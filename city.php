<?php
header('Content-Type: application/json');

$state  = (isset($_GET['state']))? htmlspecialchars($_GET['state']) :null;

require_once('database.php');
$dataBase = new DB;

$sqlSelect = "SELECT * FROM city WHERE state_id LIKE '%$state%' ORDER BY name";
$rows = $dataBase->getQuery($sqlSelect);

foreach($rows as $reg):
    $data[] = [
        "id"   => $reg['city_id'],
        "name" => utf8_encode(addslashes($reg['name']))
    ];
endforeach;

echo json_encode($data);