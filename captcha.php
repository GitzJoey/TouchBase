<?php
session_start();

$permitted_chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ34679';
$string_length = 6;

$input_length = strlen($permitted_chars);
$captcha_string = '';
for($i = 0; $i < $string_length; $i++) {
    $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
    $captcha_string .= $random_character;
}

$_SESSION["captcha_text"] = $captcha_string;

$target_layer = imagecreatetruecolor(70,30);
$captcha_background = imagecolorallocate($target_layer, 255, 160, 119);

imagefill($target_layer,0,0,$captcha_background);

$captcha_text_color = imagecolorallocate($target_layer, 0, 0, 0);

imagestring($target_layer, 5, 5, 5, $captcha_string, $captcha_text_color);
header("Content-type: image/jpeg");
imagejpeg($target_layer);