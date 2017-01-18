<?php
/**
 * Created by PhpStorm.
 * User: mcamara
 * Date: 18/01/2017
 * Time: 15:43
 */

$arquivo="counter";

$handle = fopen($arquivo, 'r+');

$data= fread($handle, 512);

$contador = $data +1;

echo "Visitante Nº:".$contador;

fseek($handle, 0);

fwrite($handle, $contador);

fclose($handle);

?>