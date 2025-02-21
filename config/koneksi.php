<?php

$conn = mysqli_connect('localhost','root','','dbinventory_alfinn');

if(!$conn){
    die("Koneksi Gagal".mysqli_connect_error());
}