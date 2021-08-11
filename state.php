<?php
header('Content-Type: application/json');

$country  = (isset($_GET['country']))? htmlspecialchars($_GET['country']) :null;

require_once('database.php');
$dataBase = new DB;

$sqlSelect = "SELECT * FROM states WHERE country_id LIKE '%$country%' ORDER BY name";
$rows = $dataBase->getQuery($sqlSelect);

foreach($rows as $reg):
    $data[] = [
        "id"   => $reg['states_id'],
        "name" => utf8_encode(addslashes($reg['name']))
    ];
endforeach;

echo json_encode($data);