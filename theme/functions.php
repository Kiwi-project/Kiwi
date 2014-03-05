<?php

/*
 * Theme related functions. 
 */

 
/*
 * Get title for the webpage by concatenating page specific title with site-wide title.
 */
function get_title($title) {
  global $kiwi;
  return $title . (isset($kiwi['title_append']) ? $kiwi['title_append'] : null);
}