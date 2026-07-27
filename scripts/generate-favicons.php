<?php
$sizes = array(64,128,192,256,512,1024,2048);
$in = __DIR__ . '/../public/logo.png';
if (!is_file($in)) {
    echo "Source image not found: $in\n";
    exit(1);
}
foreach ($sizes as $s) {
    $out = __DIR__ . "/../public/favicon-$s.png";
    $im = imagecreatefrompng($in);
    if (!$im) {
        echo "Failed to load image: $in\n";
        exit(1);
    }
    $w = imagesx($im);
    $h = imagesy($im);
    $thumb = imagecreatetruecolor($s, $s);
    imagealphablending($thumb, false);
    imagesavealpha($thumb, true);
    imagecopyresampled($thumb, $im, 0, 0, 0, 0, $s, $s, $w, $h);
    imagepng($thumb, $out);
    imagedestroy($thumb);
    imagedestroy($im);
    echo "WROTE $out\n";
}
