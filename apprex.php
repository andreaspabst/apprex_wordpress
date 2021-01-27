<?php
/*
Plugin Name: Apprex LMS Integration
Plugin URI: https://www.apprex.de/plugins/wordpress
Description: Integriere deine Onlinekurse aus apprex direkt in WordPress
Author: Andreas Pabst von apprex.de
Author URI: https://www.andreaspabst.com
Version: 1.0.0
*/

// Stop direct calling of this file
if (!defined('WPINC')) { die; } 

// including the most important classes
require_once('lib/ApprexSettings.php');

if (is_admin()) { $apprexSettings = new ApprexSettings(); }

require_once('registrations.php');