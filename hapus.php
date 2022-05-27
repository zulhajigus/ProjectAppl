<?php
include "koneksi.php";
$sql="delete from siswa where id= '$_GET[id]'";
mysqli_query($con, $sql);
mysqli_close($con);
header('location:tampil.php');
?>
