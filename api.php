<?php
/// Châu Thế Bảo
/// FB : ctb.2010 ( cảm ơn bạn sử dụng mã nguồn này)
date_default_timezone_set("Asia/Ho_Chi_Minh"); /// <3 VIETNAM
$next_28day = time() + (28*24*60*60);

require_once __DIR__ . '/Ajax/TextToImage.php';
require_once __DIR__ . '/Ajax/Text.php';

use Kensine\TextToImage\Text;
use Kensine\TextToImage\TextToImage;

function resize_image($file, $w, $h, $crop=FALSE) {
    list($width, $height) = getimagesize($file);
    $r = $width / $height;
    if ($crop) {
        if ($width > $height) {
            $width = ceil($width-($width*abs($r-$w/$h)));
        } else {
            $height = ceil($height-($height*abs($r-$w/$h)));
        }
        $newwidth = $w;
        $newheight = $h;
    } else {
        $newheight = $h;
        $newwidth = $w;
    }
    $src = imagecreatefromjpeg($file);
    $dst = imagecreatetruecolor($newwidth, $newheight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

    return $dst;
} 
$ho = $_POST['ho'];
$ten = $_POST['ten'];
$tendem = $_POST['tendem'];
$noidung = $_POST['noidung'];
$ngaysinh = $_POST['ngaysinh'];
$gioitinh = $_POST['gioitinh'];
$magd =  rand(0,9999999);

$lastName = Text::from($ho)->position(440, 516)->font(19, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);
$firstName = Text::from($ten)->position(440, 563)->font(19, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);

$firstNamedem = Text::from($tendem)->position(450, 673)->font(19, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);

$CTB = Text::from($noidung)->position(480, 725)->font(19, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);

$magd = Text::from("38880$magd")->position(430, 440)->font(18, __DIR__ .'/fonts/Arial-Bold.ttf')->color(238,18,137,255);


$DOB = Text::from(date('H:i - d/m/Y'))->position(420, 390)->font(19, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);
$gender = Text::from("$gioitinh")->position(250, 315)->font(28, __DIR__ .'/fonts/Arial-Bold.ttf')->color(13,11,49,255);

$imageText = (new TextToImage(__DIR__ . '/momo.jpg'))->addTexts( $lastName, $firstName, $DOB, $firstNamedem, $CTB ,$magd, $gender)->render();
file_put_contents('true.jpg', $imageText);

$image = imagecreatefromjpeg('true.jpg');  
imagecopy($image, $avatar, 153, 164, 0, 0, imagesX($avatar), imagesY($avatar));

header('Content-Type: image/jpeg');
imagejpeg($image);

imagedestroy($image);
imagedestroy($avatar);