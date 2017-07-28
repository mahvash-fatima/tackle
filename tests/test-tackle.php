<?php
/**
 * Test_Tackle
 *
 * @package Tackle
 */

namespace Tackle;

/**
 * Class Test_Tackle
 *
 * @package Tackle
 */
class Test_Tackle extends \WP_UnitTestCase {

	/**
	 * Test _tackle_php_version_error().
	 *
	 * @see _tackle_php_version_error()
	 */
	public function test_tackle_php_version_error() {
		ob_start();
		_tackle_php_version_error();
		$buffer = ob_get_clean();
		$this->assertContains( '<div class="error">', $buffer );
	}

	/**
	 * Test _tackle_php_version_text().
	 *
	 * @see _tackle_php_version_text()
	 */
	public function test_tackle_php_version_text() {
		$this->assertContains( 'Tackle plugin error:', _tackle_php_version_text() );
	}
}
