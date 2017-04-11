<?php
header('Cache-Control: s-maxage=0');
//header('Expires: max-age=9999');

header( "Content-type: image/png" );

$my_img = imagecreate( 200, 80 );
$background = imagecolorallocate( $my_img, 0, 0, 255 );
$text_colour = imagecolorallocate( $my_img, 255, 255, 0 );

imagestring( $my_img, 4, 30, 25, "-1--", $text_colour );

imagepng( $my_img );
imagecolordeallocate( $text_color );
imagecolordeallocate( $background );
imagedestroy( $my_img );

sleep(1);
?>