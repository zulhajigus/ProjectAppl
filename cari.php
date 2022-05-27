<?php
include 'koneksi.php';
?>
<center>
<h3>Pencarian Data Pegawai</h3>
<form action="" method="get">
<label for="">Cari : </label>
<input type="text" name="cari">
<input type="submit" value="Cari">
</form>


<?php
$result = 0;
if (isset($_GET['cari'])){
$cari = $_GET['cari'];
echo "<b> Hasil Pencarian : ".$cari."</b>";
}
?>
<table border="1">
<tr>
<th>Nomor</th>
<th>Id_pegawai</th>
<th>Nama_lengkap</th>
<th>Email</th>
<th>Password</th>
<th>Jenis Kelamin</th>
<th>Umur</th>
</tr>
<?php
if(isset($_GET['cari'])){
$cari = $_GET['cari'];
$sql = "SELECT * FROM siswa WHERE id= '".$cari."'";
$result = mysqli_query($con,$sql);
} else{
$sql = "SELECT * FROM siswa";
$result = mysqli_query($con,$sql);
}
$no = 1;
while($r = mysqli_fetch_array($result)){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $r['id']; ?></td>
<td><?php echo $r['nama_lengkap']; ?></td>
<td><?php echo $r['email']; ?></td>
<td><?php echo $r['password']; ?></td>
<td><?php echo $r['jenis_kelamin']; ?></td>
<td><?php echo $r['umur']; ?></td>
</tr>
<?php } ?>
</table>
</center>
