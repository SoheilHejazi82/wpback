<?php
/*
Plugin Name: پلاگین اقساطی برنامه نویس
Plugin URI: http://soheil.com
Description: پلاگین خرید اقساطی کالا و مدیریت داشبورد
Author: soheilhejazi
Version: 1.0.0
Author URI: http://soheil.com/
*/
add_action('admin_menu', function () {
    add_menu_page(
        'پنل اقساطی',
        'پنل اقساطی',
        'manage_options',
        'aloooo', function () {
        echo "<h1>سلام به پنل خوش آمدید</h1>";
    },
        'dashicons-laptop',
        2);
    add_submenu_page('aloooo',
        'افزودن',
        'افزودن', 'manage_options',
        'aloooo2', function () {
            echo "<br><br><input style='display: flex;' type='text'><input type='submit' value='افزودن'>";
        });
});