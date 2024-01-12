<?php
//Per leggere il file JSON
$database = file_get_contents((__DIR__ . '/infoCd.json'));

$cds = json_decode($database);

if (isset($_GET['index'])) {
    $index = $_GET['index'];
    $current_cd = $cds[$index];
    header('Content-Type: application/json');
    echo json_encode($current_cd);
    die;
}

header('Content-Type: application/json');
echo json_encode($cds);
