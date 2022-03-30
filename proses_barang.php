<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if( $action == "add") {
    $koneksi->tambah_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual']);
    header('location:index.php');
} elseif ($action=="update") {
    $koneksi->update_data($_POST['nama_barang'],$_POST['stok'],$_POST['harga_beli'],$_POST['harga_jual'],$_POST['id_barang']);
    header('location:index.php');
} 
?>
