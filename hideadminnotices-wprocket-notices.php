<?php

/* Not fully tested */

add_action('in_admin_header', function () {
 {
  remove_action('admin_notices','rocket_warning_htaccess_permissions');
  remove_action('admin_notices','rocket_warning_cache_dir_permissions');

  
  }
  
 
  
}, 1000);
