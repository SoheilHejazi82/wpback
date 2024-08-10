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
add_shortcode('contact-form',function (){
    if (isset($_post['sub'])){
        echo "salam";
    }


    ?>
    <form>
        <label>نام:</label><input name="fname" type="text"><br>
        <label>فامیلی:</label><input name="lname" type="text"><br>
        <button name="sub">ثبت</button>
    </form>



    <?php



});?>
<?php
add_action('add_meta_boxes','boxs');
function boxs()
{
    add_meta_box('addbox','اطلاعات اضافی نوشته',function (){
        ?>
        <label>نام نویسنده</label>
        <input type="text" id="textbox">
        <label>آدرس</label>
        <input type="url" id="urlbox">
        <?php
    },'post','advanced','high');
}


?>
