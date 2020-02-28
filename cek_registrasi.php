<?php

include 'koneski.php';

$username = $_POST['nama'];
$password = $_POST['password'];
$telp= $_POST['telp'];
$no= $_POST['no_kamar'];
$lama=$_POST['lama_inap'];

$query="INSERT INTO masuk (nama,password,telp,no_kamar,lama_inap) VALUES ('$username','$password','$telp','$no_kamar','$lama')";
$result= mysqli_query($koneksi,$query);
$num= mysqli_afeccted_rows($koneksi);

if($num>0){
    echo "berhasil";

}


?>