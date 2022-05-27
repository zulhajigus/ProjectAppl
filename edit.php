<?php
// include database connection file
include_once("koneksi.php");
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{ 
 $id = $_POST['id'];
 $nama_lengkap=$_POST['nama_lengkap'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $jenis_kelamin=$_POST['jenis_kelamin'];
 $umur = $_POST['umur']
 // update user data
$query =" UPDATE siswa SET nama_lengkap='$nama',jenis_kelamin='$jenis_kelamin',umur='$umur' WHERE nim='$id'";
    mysqli_query($con, $query);
    mysqli_close($con);

 // Redirect to homepage to display updated user in list
header("Location: tampil.php");
}
?>
<?php

$id= $_GET['id'];
$query= mysqli_query($con, "SELECT * FROM siswa WHERE id='$id'");
while($user_data = mysqli_fetch_array($query))
{
$id = $user_data['id'];
$nama_lengkap = $user_data['nama_lengkap'];
$email = $user_data['email'];
$password = $user_data['password'];
$jenis_kelamin = $user_data['jenis_kelamin'];
$umur = $user_data['umur'];
}
?>
<html>
<head> 
<title>Edit Data Pegawai</title>
</head>
<body>
 <a href="index.php">Home</a>
 <br/><br/>
<form name="update_pegawai" method="post" action="edit.php">
<table border="0">
<tr> 
<td>Nama_lengkap</td>
<td><input type="text" name="nama" value=<?php echo $nama_lengkap;?>></td>
</tr>
<tr> 
<td>jenis_kelamin</td>
<td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin;?>></td>
</tr>
<tr> 
<td>Umur</td>
<td><input type="text" name="umur" value=<?php echo $umur;?>></td>
</tr>

<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>