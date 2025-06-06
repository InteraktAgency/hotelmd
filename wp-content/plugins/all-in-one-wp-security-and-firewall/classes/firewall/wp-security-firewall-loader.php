<?php
namespace AIOWPS\Firewall;

if (!defined('AIOWPS_FIREWALL_DIR')) {
	header('HTTP/1.1 403 Forbidden');
	exit();
}


/**
 * Loads and executes our firewall
 */
class Loader {

	/**
	 * Reference to itself
	 *
	 * @var Loader
	 */
	protected static $instance = null;

	/**
	 * Loads and builds all the necessary files
	 *
	 * @return void
	 */
	public function load_firewall() {

		try {

			/**
			 * The preloader file should not be directly accessed.
			 * It should only be loaded via the bootstrap file or in a WordPress context
			 */
			if ($this->is_preloader_directly_accessed()) return;
			
			$this->init();

			global $aiowps_firewall_constants;
			if ($aiowps_firewall_constants->AIOS_NO_FIREWALL) return;
	
			//Allow list for bypassing PHP rules
			if (Allow_List::is_ip_allowed()) return;

			$families = new Family_Collection(Family_Builder::get_families());

			foreach (Rule_Builder::get_active_rule() as $rule) {
				$families->add_rule_to_member($rule);
			}
			
			foreach ($families->get_family() as $member) {
				$member->apply_all();
			}
			
		} catch (Exit_Exception $e) {
			$this->log_message($e->getMessage());
			exit();
		} catch (\Exception $e) {
			$this->log_message($e->getMessage());
		} catch (\Error $e) {
			$this->log_message($e->getMessage());
		}

	}

	/**
	 * Performs general initialisation
	 *
	 * @return void
	 */
	public function init() {

		$this->init_includes();
		$this->init_services();

		new Debug();
	}

	/**
	 * Detects whether the preloader file (wp-security-firewall.php) was directly accessed
	 *
	 * @return boolean
	 */
	public function is_preloader_directly_accessed() {
		return (1 === preg_match('/wp-security-firewall\.php$/', get_included_files()[0]));
	}

	/**
	 * Log our error messages
	 *
	 * @param string $message
	 * @return void
	 */
	private function log_message($message) {
		if (function_exists('do_action')) {
			do_action('aios_firewall_loader_log_error', $message, $this);
		}
		
		error_log('AIOS firewall error: ' . $message);
	}

	/**
	 * Initialises our services
	 *
	 * @return void
	 */
	 private function init_services() {

		$workspace = $this->get_firewall_workspace();

		if (empty($workspace)) {
			throw new \Exception('unable to locate workspace.');
		}

		$GLOBALS['aiowps_firewall_config'] = new Config($workspace . 'settings.php');
		$GLOBALS['aiowps_firewall_message_store'] = Message_Store::instance();
		$GLOBALS['aiowps_firewall_constants'] = new Constants();
		Allow_List::set_path($workspace.'allowlist.php');
	 }

	 /**
	  * Get our workspace directory, i.e., where we save and load data to and from.
	  *
	  * @return string
	  */
	 private function get_firewall_workspace() {
		global $aiowps_firewall_rules_path;

		$workspace = '';

		if (!empty($aiowps_firewall_rules_path)) {
			$workspace = $aiowps_firewall_rules_path;
		} elseif (Context::wordpress_safe()) {
			$workspace = \AIOWPSecurity_Utility_Firewall::get_firewall_rules_path();
		}

		return $workspace;
	 }

	/**
	 * Registers the autoloader
	 *
	 * @return void
	 */
	private function init_includes() {
	
		spl_autoload_register(function($class) {
			if (0 === strpos($class, "AIOWPS\\Firewall\\")) { //only autoload the firewall's files

				$relative_classname = substr($class, strlen("AIOWPS\\Firewall\\"), strlen($class)-1);
							
				$classname = str_replace('_', '-', strtolower($relative_classname));
							
				$file = "wp-security-firewall-{$classname}.php";
				$rule = "{$classname}.php";
				
				$paths = array(
					AIOWPS_FIREWALL_DIR."/{$file}",
					AIOWPS_FIREWALL_DIR."/family/{$file}",
					AIOWPS_FIREWALL_DIR."/rule/{$file}",
					AIOWPS_FIREWALL_DIR."/rule/actions/{$classname}.php",
					AIOWPS_FIREWALL_DIR."/rule/rules/{$rule}",
					AIOWPS_FIREWALL_DIR."/rule/rules/6g/{$rule}",
					AIOWPS_FIREWALL_DIR."/rule/rules/bruteforce/{$rule}",
					AIOWPS_FIREWALL_DIR."/rule/rules/blacklist/{$rule}",
					AIOWPS_FIREWALL_DIR."/rule/rules/general/{$rule}",
					AIOWPS_FIREWALL_DIR."/rule/rules/bots/{$rule}",
					AIOWPS_FIREWALL_DIR."/libs/{$file}",
					AIOWPS_FIREWALL_DIR."/libs/traits/{$classname}.php",
				);

				clearstatcache();
				foreach ($paths as $path) {
					if (file_exists($path)) {
						include_once($path);
						break;
					}
				}
			}
		});
		
		// Manually include needed files
		$classes_dir = dirname(AIOWPS_FIREWALL_DIR);

		$manual_files = array(
			$classes_dir.'/wp-security-firewall-resource-unavailable.php',
			$classes_dir.'/wp-security-firewall-resource.php',
			$classes_dir.'/wp-security-helper.php',
		);

		foreach ($manual_files as $file) {
			clearstatcache();
			if (file_exists($file)) include_once $file;
		}

		if (Context::wordpress_safe()) {
			include_once("{$classes_dir}/wp-security-utility-file.php");
		}
	}

	/**
	 * Gets or creates an instance of this object
	 *
	 * @return Loader
	 */
	public static function get_instance() {

		if (null === self::$instance) {
			return new self();
		}

		return self::$instance;
	}

}
