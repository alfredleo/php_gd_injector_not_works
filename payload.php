<?php
$jpg = imagecreatefromjpeg('focuss.jpeg');
imagejpeg($jpg, 'poc.jpg');
imagedestroy($jpg);

// command that should run if exploit passes.
// file_put_contents("home.html", file_get_contents("https://www.php.net"));