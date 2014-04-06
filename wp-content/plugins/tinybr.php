<?php
/*
Plugin Name: TinyBR
Plugin URI: http://www.it-rem.ru/wordpress-vizualnyiy-redaktor-zamena-p-na-br.html
Description: Swaps <p> tag (Enter) with <br> (Shift+Enter) in visual editor
Version: 1.0.0
Author: Vitaliy S. Orlov
Author URI: http://www.it-rem.ru/
License: any
*/

function change_mce_options($init){
    $init["forced_root_block"] = false;
    $init["force_br_newlines"] = true;
    $init["force_p_newlines"] = false;
    $init["convert_newlines_to_brs"] = true;
    return $init;
}
add_filter('tiny_mce_before_init','change_mce_options');