<?php

// 1. Lettura File

$database = file_get_contents(__DIR__ . '/albums.json');

var_dump($database);
