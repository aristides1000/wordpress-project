<?php
/**
 * Basic Tests
 *
 * @package ThemeIsle\ContentForms
 */

/**
 * Test functions in register.php
 */
class Plugin_Test extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();
		wp_set_current_user( $this->factory->user->create( [ 'role' => 'administrator' ] ) );

		do_action( 'init' );
		do_action( 'plugins_loaded' );
	}

	/**
	 * Tests test_library_availability().
	 *
	 * @covers FullWidthTemplates::instance();
	 */
	function test_library_availability() {
		$this->assertTrue( class_exists( '\ThemeIsle\FullWidthTemplates') );
	}

	function test_version() {
		$composer_version = json_decode( file_get_contents( dirname( dirname( __FILE__ ) ) . '/composer.json' ) );

		$this->assertTrue( $composer_version->version === \ThemeIsle\FullWidthTemplates::$version );
	}
}