<?php
/**
 * Class Test_Loading
 *
 * @package fork
 */

class Test_Loading extends WP_UnitTestCase {
	/**
	 * Test Constants.
	 */
	public function testConstants() {
		$this->assertTrue( defined( 'FORK_VERSION' ) );
		$this->assertTrue( defined( 'FORK_DEBUG' ) );
		$this->assertTrue( defined( 'FORK_DIR' ) );
		$this->assertTrue( defined( 'FORK_URL' ) );
	}

	/**
	 * Make sure debug is false.
	 */
	public function testDebugOff() {
		$this->assertEquals( FORK_DEBUG, WP_DEBUG );
	}

	/**
	 * Make sure Core is loaded.
	 *
	 * @return void
	 */
	public function testCoreLoaded() {
		$this->assertTrue( class_exists( 'Fork\Core', false ) );
	}
}