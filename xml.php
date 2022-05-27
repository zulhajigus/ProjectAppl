<?php 
 
include "koneksi.php"; 
header('Content-Type: text/xml'); 
$query = "SELECT * FROM siswa"; 
$hasil = mysqli_query($con,$query); 
$jumField = mysqli_num_fields($hasil); 
 
echo "<?xml version='1.0'?>"; 
echo "<data>"; 
while ($data = mysqli_fetch_array($hasil)) 
{ 
 echo "<siswa>"; 
 echo"<id>",$data['id'],"</id>"; 
 echo"<nama_lengkap>",$data['nama_lengkap'],"</nama_lengkap>"; 
 echo"<email>",$data['email'],"</email>"; 
 echo"<password>",$data['password'],"</password>"; 
 echo"<jenis_kelamin>",$data['jenis_kelamin'],"</jenis_kelamin>"; 
 echo"<umur>",$data['umur'],"</umur>"; 
 echo "</siswa>"; 
} 
echo "</data>"; 
?>