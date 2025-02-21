<?php

$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$id_jenis = $_POST['id_jenis'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];


include '../../config/koneksi.php';

$query = mysqli_query($conn,"INSERT INTO barang VALUES('$id_barang','$nama_barang','$id_jenis',
'$stok','$harga')");

if($query){
    echo "<script>alert('Tambah Berhasil')</script>";
    echo "<script>window.location.href='index.php'</script>";
}else {
    echo "<script>alert('Tambah Gagal')</script>";
    echo "<script>window.location.href='tambah.php'</script>";
}