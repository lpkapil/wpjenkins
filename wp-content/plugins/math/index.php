<?php

/**
 * @package Math
 */
/*
  Plugin Name: Math
  Description: This is Mathematics Class.
  Version: 1.0
  Author: Kapil Yadav
  Text Domain: math
 */

if (!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}

include 'classes/Math.php';

new Math();





