<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<style>
html { color-scheme: dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<?php
//***objektorjenteeritud***//
//sinu andmed
$db_server = 'localhost:3306';
$db_andmebaas = 'muusikapood';
$db_kasutaja = 'yuuna';
$db_salasona = 'Viljandiparool';
//yhenduse loomine
$yhendus = new mysqli($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);
// ühenduse kontroll
if(!$yhendus){
    die('Ei saa ühendust andmebaasiga');
}
//päring
$paring = 'SELECT * FROM albumid';
$valjund = $yhendus->query($paring);
//väljund
while($rida = $valjund->fetch_row()){
    var_dump($rida);
}
//ühenduste sulgemine
$yhendus->close();
?>