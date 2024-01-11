<?php

// 1. Lettura File
$database = file_get_contents(__DIR__ . '/albums.json');



// 2. Struttura PHP

$albums = json_decode($database);





// trasformo in json
header('Content-Type: application/json');
echo json_encode($albums);
