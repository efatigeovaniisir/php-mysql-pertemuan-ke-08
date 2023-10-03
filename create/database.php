<?php 

// variabel database

$namaServer = 'localhost';
$namaPengguna = 'root';
$kataSandi = '';

// koneksi ke database

$conn = new mysqli($namaServer, $namaPengguna, $kataSandi);

if($conn->connect_error)
{
    echo "Koneksi gagal!";
} else{
    echo "Koneksi berhasil!";
}

// proses membuat database dengan perintah sql

$sql = 'CREATE DATABASE db_efati';

// notifikasi jika database berhasil / gagal dibuat

if($conn->query($sql) === TRUE) {

    echo "<h1>Database berhasil dibuat.</h1>";
}else
{
    echo "<h1> Database gagal dibuat.</h1>";
}