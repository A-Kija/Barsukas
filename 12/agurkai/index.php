<?php
session_start();

// box ['id' => 25, 'amount' => 258]

if (!file_exists(__DIR__.'/boxes.json')) {
    file_put_contents(__DIR__.'/boxes.json', json_encode([]));
}
$boxes = json_decode(file_get_contents(__DIR__.'/boxes.json', 1));

// 1. Agurku deziu saraso atvaizdavimas GET
if (!isset($_GET['action']) && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/home.php';
}

// 2. Pridejimo atvaizdavimas GET

elseif ($_GET['action'] == 'add' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/add.php';
}


// 3. Pridejimo vykdymas POST

// 4. Isemimo atvaizdavimas GET

// 5. Isemimo vykdymas POST

// 6. Naujos dezes pridejimo atvaizdavimas GET

elseif ($_GET['action'] == 'add-box' && $_SERVER['REQUEST_METHOD'] == 'GET') {
    require __DIR__. '/addBox.php';
}

// 7. Naujos dezes pridejimo vykdymas POST

// 8. Dezes trynimo vykdymas POST


