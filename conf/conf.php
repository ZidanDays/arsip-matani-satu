<?php

$koneksi = mysqli_connect("localhost", "root", "", "sequential_search");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}