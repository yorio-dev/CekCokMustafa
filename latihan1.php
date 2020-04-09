<?php

// $santri = [
//     [


//     "nama" => "you rio",
//     "nim" => "123123",
//     "email" => "yo.rio282@gmail.com"
//     ],

//     [


//         "nama" => "you rio",
//         "nim" => "123123",
//         "email" => "yo.rio282@gmail.com"
//         ]
//     ];


$dbh = new PDO('mysql:host=localhost;dbname=santri1', 'root', 'password');
$db = $dbh->prepare('SELECT *FROM terserah');
$db->execute();
$data = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($data);
echo $data;



?>