<?php 

$dinero = $_GET["dinero"];

$_500 = intdiv($dinero, 500);
$dinero %= 500;

$_200 = intdiv($dinero, 200);
$dinero %= 200;

$_100 = intdiv($dinero, 100);
$dinero %= 100;

$_50 = intdiv($dinero, 50);
$dinero %= 50;

$_20 = intdiv($dinero, 20);
$dinero %= 20;

$_10 = intdiv($dinero, 10)
$dinero %= 10;

$_5 = intdiv($dinero, 5);
$dinero %= 5;

$_2 = intdiv($dinero, 2);
$dinero %= 2;

$_1 = intdiv($dinero, 1);
$dinero %= 1;

echo("$_500 billetes de 500" . </br>);
echo("$_200 billetes de 200" . </br>);
echo("$_100 billetes de 100" . </br>);
echo("$_50 billetes de 50" . </br>);
echo("$_20 billetes de 20" . </br>);
echo("$_10 billetes de 10" . </br>);
echo("$_5 billetes de 5" . </br>);
echo("$_2 monedas de 2" . </br>);
echo("$_1 monedas de 1" . </br>);
?>