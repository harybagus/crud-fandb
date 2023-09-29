<?php

// Jika tidak ada session maka mulai session baru atau lanjutkan session yang ada.
if (!session_id()) session_start();

// Memanggil file init.php pada folder app
require_once "../app/init.php";

// Membuat object $app dari class App.
$app = new App;
