<?php
/**
 * Instantiates the Tackle plugin
 *
 * @package Tackle
 */

namespace Tackle;

global $tackle_plugin;

require_once __DIR__ . '/php/class-plugin-base.php';
require_once __DIR__ . '/php/class-plugin.php';

$tackle_plugin = new Plugin();

/**
 * Tackle Plugin Instance
 *
 * @return Plugin
 */
function get_plugin_instance() {
	global $tackle_plugin;
	return $tackle_plugin;
}
