<?php

/**
 * Math Plugin Main File
 * 
 * PHP version 5.6
 * 
 * @category Plugin
 * @package  Math
 * @author   Kapil Yadav <lpkapil@gmail.com>
 * @license  open source
 * @version  GIT: https://github.com/lpkapil/wpjenkins
 * @link     https://github.com/lpkapil/wpjenkins
 */
/**
 * Plugin Name: Math
 * Description: This is Mathematics Class.
 * Version: 1.0
 * Author: Kapil Yadav
 * Text Domain: math
 */

namespace Math;

if (!defined('ABSPATH')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit;
}

require 'classes/Math.php';

new Math();
