<?php 
include "koneksi.php"; 
 
$sql="select * from siswa order by id"; 
$tampil = mysqli_query($con,$sql); 
if (mysqli_num_rows($tampil) > 0) { 
    $no=1; 
 $response = array(); 
 $response["data"] = array(); 
 while ($r = mysqli_fetch_array($tampil)) { 
 $h['id'] = $r['id']; 
 $h['nama_lengkap'] = $r['nama_lengkap']; 
 $h['email'] = $r['email']; 
 $h['password'] = $r['password'];
 $h['jenis_kelamin'] = $r['jenis_kelamin']; 
 $h['umur'] = $r['umur']; 
 array_push($response["data"], $h); 
 } 
 echo json_encode($response); 
} 
else { 
 $response["message"]="tidak ada data"; 
 echo json_encode($response); 
 } 
?>