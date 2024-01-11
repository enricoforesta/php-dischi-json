<?php
//Per leggere il file JSON
$database = file_get_contents((__DIR__ . '/infoCd.json'));

$cds = json_decode($database);

header('Content-Type: application/json');
echo json_encode($cds);
