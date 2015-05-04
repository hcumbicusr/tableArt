<?
/*
Este script toma la idea del siguiente video:

https://www.youtube.com/watch?v=ELZAU0Ohfdk

y es un fork de código expuesto en: 

http://www.sargentoweb.com/php_gd/?doc=25

*/
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <style>
           table {
               border-collapse:collapse; 
               border: none;
           }

           td {
               padding: 0;
               width: 1px;
               height: 1px;
           }
        </style>
        <title></title>
    </head>
    <body>
        <?php 
            // la imagen debe tener perimos de lectura para apache
            $im = imagecreatefrompng("ico0.png"); 
            echo "<table>";
            for( $y = 0; $y < imagesy( $im ); $y++ ) {
                echo "\t<tr>";
                for( $x = 0; $x < imagesx( $im ); $x++ ) {
                    $rgb = imagecolorat( $im, $x, $y );
                    $hex = sprintf( "%06X", $rgb );
                    echo "\t\t<td style=\"background-color:#".$hex.";\"></td>\n";
                }
                echo "\t</tr>\n";
            }
            imagedestroy( $im );
        ?>
    </body>
</html>