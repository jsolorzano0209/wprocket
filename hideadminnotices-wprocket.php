<?php

add_action('in_admin_header', function () {
 {
  remove_all_actions('admin_notices');
  
  }
  
  
}, 1000);
