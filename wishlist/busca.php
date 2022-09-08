<?php

include ('conn.php');
include ("form.php");

$html = file_get_contents($linkprod);

$js = preg_match('/\"pageModule(.+)\}/i', $html, $saida);
$saida = '{' . $saida[0];

$obj = json_decode($saida);

$descricaoprod = $obj->pageModule->title;
$precoprod = $obj->priceModule->formatedPrice;
$imgprod =  $obj->pageModule->imagePath;
$descontoprod = $obj->priceModule->formatedActivityPrice;







// echo $descricaoprod;
?>