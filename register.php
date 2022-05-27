<html>
 
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registesr</title>

 </head>
 
 <body>


 <?php
 // define variables and set to empty values
 $error = false;
 $nama_lengkapErr = $emailErr = $passwordErr= $jenis_kelaminErr = $umurErr = "";
 $nama_lengkap = $email = $password = $jenis_kelaminErr = $umurErr = "";
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (empty($_POST["nama_lengkap"])) {
 $nama_lengkapErr = "Nama harus diisi";
 $error = true;
 }else {
 $nama_lengkap = test_input($_POST["nama_lengkap"]);
 }
 
 if (empty($_POST["email"])) {
 $emailErr = "Email harus diisi";
 $error = true;
 }else {
 $email = test_input($_POST["email"]);
 
 // check if e-mail address is well-formed
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $emailErr = "Email tidak sesuai format"; 
 $error = true;
 }
 }
 
 if (empty($_POST["password"])) {
 $password = "password harus di isi";
 $error = true;
 }else {
 $password = test_input($_POST["password"]);
 }
 
 if (empty($_POST["jenis_kelamin"])) {
 $jenis_kelaminErr = "jenis_kelamin harus dipilih";
 $error = true;
 }else {
 $jenis_kelamin = test_input($_POST["jenis_kelamin"]);
 }

 if (empty($_POST["umur"])) {
    $umurErr = "umur harus diisi";
    $error = true;
    }else {
    $umur = test_input($_POST["umur"]);
    }
 }
 
 function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
 echo $data;
 }
 ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>









<div class="p-3 mb-2 bg-success text-white bg-gradient">

 <form class="mt-5 border p-1 p-3 mb-2 bg-light text-dark "  style="max-width:420px; margin:auto;" method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <div class="text-center">
 <img class ="rounded" width="30%" height="20%" src="shoes.png"  > </img>
</div>
 <h1 class="text-center text-success py-3 ">FORM PENDAFTARAN </h1>
 <p class="text-center"><span class = "error">* Harus Diisi.</span></p>
 
  <table class="table table-bordered border-3d ">
  
   <tr>
   <div class="row mb-3">
     
      <div class="col-sm-15">
        <input type="text" class="form-control" placeholder="Nama" name="nama_lengkap">
        <span class = "error">* <?php echo $nama_lengkapErr;?></span>
      </div>
    </div>
   </tr>
  
    <div class="row mb-3">
     
      <div class="col-sm-15">
        <input type="text" class="form-control" placeholder="E-Mail" name="email">
   <span class = "error">* <?php echo $emailErr;?></span>
   </div>
    </div>
   
    <div class="row mb-3">
    
      <div class="col-sm-15">
        <input type="password" class="form-control" placeholder="Password" name="password">
   <span class = "error">* <?php echo $passwordErr;?></span>
   </div>
    </div>
  
  
    <div class="row mb-3">
      <div class="col-sm-15">
        <input type="text" class="form-control" placeholder="Umur" name="umur">
   <span class = "error">* <?php echo $umurErr;?></span>
   </div>
    </div>
  
   
   <fieldset class="row mb-5">
      <legend class="col-form-label col-sm-5 pt-0">Jenis Kelamin :</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin"  value="L" checked>
          <label class="form-check-label" >
          Laki-laki
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jenis_kelamin"  value="P" checked>
          <label class="form-check-label" >
          Perempuan
          </label>
        </div>
    </fieldset>
  
  
  
   
  <div class="text-center">
   <button type="submit" name = "submit" value = "Submit" class=" btn btn-danger ">Submit</button>
</div>
   </table>
  
 </form>
 </div>
 <?php
 session_start();
 // Check If form submitted, insert form data into users table.
 if(isset($_POST['submit']) && $error == false) {
 $nama_lengkap = $_POST['nama_lengkap'];
 $email = $_POST['email'];
 $password1 = md5($_POST['password']);
 $umur = $_POST['umur'];
 $jenis_kelamin = $_POST['jenis_kelamin'];
 // include database connection file
 include_once("koneksi.php");
 // Insert user data into table
 $result = mysqli_query($con, "INSERT INTO siswa(nama_lengkap,email, password,umur, jenis_kelamin) 
 VALUES('$nama_lengkap','$email', '$password1','$umur','$jenis_kelamin')");
 // Show message when user added
 $_SESSION['login'] = true;
 $_SESSION['password'] = $password1;
  header('location:index.php');
 }
 
 ?>

      </form>
    </div>
  </div>
 </body>
</html>