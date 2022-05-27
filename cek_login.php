<?php
include "koneksi.php";
$email = $_POST['email'];
$password=md5($_POST['password']);
$sql="SELECT * FROM siswa WHERE email='$email' AND password='$password'";
$login=mysqli_query($con,$sql);
$ketemu=mysqli_num_rows($login);
$r= mysqli_fetch_array($login);
if ($ketemu > 0){
 session_start();
 $_SESSION['email'] = $r['email'];
 $_SESSION['passuser'] = $r['password'];
header('location:index.php');
echo"USER BERHASIL LOGIN<br>";
echo "email =",$_SESSION['email'],"<br>";
echo "password=",$_SESSION['passuser'],"<br>";
echo "<a href=logout.php><b>LOGOUT</b></a></center>";
}
else{
echo "<center>Login gagal! username & password tidak benar<br>";
echo "<a href=login.php><b>ULANGILAGI</b></a></center>";
}
mysqli_close($con);
?>
