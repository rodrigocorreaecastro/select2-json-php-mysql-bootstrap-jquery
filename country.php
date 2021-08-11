<?php
header('Content-Type: application/json');

$term  = (isset($_GET['term']))? htmlspecialchars($_GET['term']) :null;

require_once('database.php');
$dataBase = new DB;

$sqlSelect = "SELECT * FROM country WHERE country LIKE '%$term%' ORDER BY country";
$rows = $dataBase->getQuery($sqlSelect);

foreach($rows as $reg):
    $data[] = [
        "id"   => $reg['country_id'],
        "name" => utf8_encode(addslashes($reg['country']))
    ];
endforeach;

echo json_encode($data);