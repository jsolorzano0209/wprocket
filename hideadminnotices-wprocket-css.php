<?php

add_action('in_admin_header', 'hidenotice_error_wprocket');


function hidenotice_error_wprocket() {
   echo '<style>.notice.notice-error { display: none!important; }</style>';
}
