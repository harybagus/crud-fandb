<?php

// Menentukan Base URL
define('BASEURL', "http://localhost/pemrograman/latihan/crud-fandb/public");

// Menentukan host, username, password, dan nama database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crud_fandb');

// Membuat function format rupiah
function formatRupiah($harga)
{
    $rupiah = "Rp" . number_format($harga, 0, ",", ".");
    // Mengembalikan $rupiah yang berisi format rupiah.
    return $rupiah;
}
