<?php 

/* 
 * This is a Kiwi pagecontroller.
 */



// Include the essential config-file which also creates the $kiwi variable with its defaults.
include(__DIR__.'/config.php'); 
 
 

// Do it and store it all in variables in the Anax container.
$kiwi['title'] = "404";
$kiwi['header'] = "";
$kiwi['main'] = "This is a Kiwi 404. Document is not here.";
$kiwi['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Kiwi.
include(KIWI_THEME_PATH);