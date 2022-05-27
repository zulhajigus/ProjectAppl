<?php
        session_start();
        if (!isset($_SESSION['email'])) {
            header("Location: login.php");
        }
?>

<html>
<head>
	<title>TAMPIL</title>
    <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
<style>
    table {
    font-family: sans-serif;
    color: white;
    border-collapse: collapse;
    width: 50%;
    border: 1px solid black;
    margin-left: auto;
    margin-right: auto;
}
a{
    text-decoration: none;
    color: white;
}
a:hover{
    color: #35A9DB;
}
button{
    margin-left: 120px;
    margin-top: 30px;
    padding: 10px;
    background: #35A9DB;
    color: white;
    border-radius: 12px;
    
}
body{
    background-image: linear-gradient(rgb(0, 255, 30),rgba(0, 149, 255, 0.857));
    color: white;
}
button:hover{
    margin-left: 120px;
    margin-top: 30px;
    padding: 10px;
    background: white;
    color: #35A9DB;
    border-radius: 12px;
}
tr th{
    background: #35A9DB;
    color: #fff;
    font-weight: normal;
}
h2{
    text-align: center;

}
.table, th, td {
    padding: 8px 20px;
    text-align: center;
}
 
.table tr:hover {
    background-color: #f5f5f5;
}
 
.table tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>


</head>
<body>

	<div id="container">
        <form>
        <?php
    echo "<h2>DAFTAR PEGAWAI</h2>
    
    <table>
    <tr><th>No</th><th>Id</th><th>NamaLengkap</th><th>Email</th><th>password</th><th>jenisKelamin</th><th>Umur</th>
    <th>Aksi</th></tr>";
    include "koneksi.php";
    $sql="select * from siswa order by id";
    $tampil = mysqli_query($con,$sql);
    if (mysqli_num_rows($tampil) > 0) {
    $no=1;
    while ($r = mysqli_fetch_array($tampil))
{
    echo "<tr><td>$no</td><td>$r[id]</td>
    <td>$r[nama_lengkap]</td>
    <td>$r[email]</td>
    <td>$r[password]</td>
    <td>$r[jenis_kelamin]</td>
    <td>$r[umur]</td>
    <td><a href='hapus.php?id=$r[id]'>Hapus</a></td>
    <td><a href='edit.php?id=$r[id]'>Edit</a></td>
    </tr>";
    $no++;
}
    echo "</table>";
} else {
    echo "0 results";
 }
    mysqli_close($con);
?>
        
        <button > <a href='index.php'> KEMBALI</a></button>
        <button > <a href='cetak.php'> Cetak Database</a></button>
        <button > <a href='json.php'> JSON VIEWER</a></button>
        <button > <a href='xml.php'> XML VIEWER</a></button>
        <button > <a href='Cari.php'> Pencarian Data</a></button>
	</div>
</body>
</html>