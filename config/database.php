<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'db_sekolah';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($conn->connect_errno) {
    die('Koneksi database gagal: ' . htmlspecialchars($conn->connect_error));
}
$conn->set_charset('utf8mb4');

if (!function_exists('e')) { function e($value): string { return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8'); } }
