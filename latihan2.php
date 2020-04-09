<?php 

$data = file_get_contents('coba.json');
$santri1 = json_decode($data, true);

var_dump($santri1);
echo $santri1

?>