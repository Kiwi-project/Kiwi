<?php

/*
 * Config-file for Kiwi. Change settings here to affect installation.
 */
 

/*
 * Set the error reporting.
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/*
 * Define Kiwi paths.
 */
define('KIWI_INSTALL_PATH', __DIR__ . '/..');
define('KIWI_THEME_PATH', KIWI_INSTALL_PATH . '/theme/render.php');
 
 
/*
 * Include bootstrapping functions.
 */
include(KIWI_INSTALL_PATH . '/src/bootstrap.php');
 
 
/*
 * Start the session.
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/*
 * Create the Kiwi variable.
 */
$kiwi = array();
 
 
/*
 * Site wide settings.
 */
$kiwi['lang']         = 'sv';
$kiwi['title_append'] = ' | Kiwi en webbtemplate';


/*
 * Theme related settings.
 */
$kiwi['stylesheet'] = 'css/style.css'; 
$kiwi['favicon']    = 'favicon.ico';
