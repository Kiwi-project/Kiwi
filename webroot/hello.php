<?php 

/*
 * This is a Kiwi pagecontroller.
 */

// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Anax container.
$kiwi['title'] = "Hello World";
 
$kiwi['header'] = <<<EOD
<img class='sitelogo' src='img/kiwi.png' alt='Kiwi Logo' width='120'>
<span class='sitetitle'>Kiwi webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$kiwi['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Kiwi ser ut och fungerar.</p>
EOD;
 
$kiwi['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Sandra Yousif | <a href='https://github.com/sayo14/Kiwi-base'>Kiwi på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Kiwi.
include(KIWI_THEME_PATH);