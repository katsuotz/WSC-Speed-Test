<?php

$image = imagecreatefromjpeg('image.jpg');
$wm = imagecreatefrompng('logo.png');

imagecopy($image, $wm, imagesx($image) - imagesx($wm) - 10, imagesy($image) - imagesy($wm) - 10, 0, 0, imagesx($wm), imagesy($wm));

header('Content-Type: image/jpeg');
imagejpeg($image);
