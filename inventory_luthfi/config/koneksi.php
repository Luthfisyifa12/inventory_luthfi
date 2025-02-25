<?php

//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'db_inventory_luthfi';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
}
