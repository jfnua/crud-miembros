<?php
//Alto y ancho de 1а imagen que mostrará el captcha
$ancho = 60;
$alto = 30;
//ruido o fondo raro a mostrar en la imagen del captcha
$fondo_imagen = 15;
//Gerara el codigo del captcha usando -un random
$CodigoCaptchaAleatorio = rand(1000, 9999);
//Guardar el codigo captcha en una sesion
session_start();
$_SESSION["captcha_code"]=$CodigoCaptchaAleatorio;
//crear la imagen
$im = imagecreatetruecolor($ancho, $alto);
$bg = imagecolorallocate($im, 230, 80, 0); // color de fondo
$fg = imagecolorallocate($im, 255, 255, 255);// color de texto
$ns = imagecolorallocate($im, 200, 200, 200);// color rayas o ruido
//rellenar la imagen con color de fondo
imagefill($im,0, 0, $bg);
//agregar el codigo random a la imagen
imagestring($im, 5, 10, 8, $CodigoCaptchaAleatorio, $fg);


// agregar ruido a la imagen para distorcionar.
for($i = 0; $i < $fondo_imagen; $i++) {
      for($j = 0; $j < $fondo_imagen; $j++) {
            imagesetpixel(
            $im,
            rand(0, $ancho),
            rand(0, $alto),//pixeles aleatorios
            $ns
        );
    }
}
//se le indica al navegador que se generará una imagen para pasarla en los headers
header("Cache-Control: no-cache, must-revalidate");
header('Content-type: image/png');
//generar imagen png
imagepng($im);
//borrar la imagen
imagedestroy($im);

?>