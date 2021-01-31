<?php
session_start();
 
$a = mt_rand(0,10);
$b = mt_rand(0,10);
$_SESSION['captcha'] = $a+$b;

header ('Content-Type: image/png');
$im = @imagecreatetruecolor(55, 30)
      or die('Impossible de créer un flux d\'image GD');
$text_color = imagecolorallocate($im, 255,255,255);
imagestring($im, 4, 4, 7,  $a.'+'.$b.' =', $text_color);
imagepng($im);
imagedestroy($im);



 
?>
