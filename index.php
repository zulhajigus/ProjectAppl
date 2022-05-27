<html>
 
 <head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>

 </head>
 
 <body>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  
  
    <nav class="navbar navbar-light   bg-success">
  <div class="container-fluid">
  <img src="pemda.jpg"  width="30" height="35" class="d-inline-block align-text-top">
    <a class="navbar-brand fw-bold text-light " href="#"  ></a>

    

    
      
     
        
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
}

echo "<center><button type='button' class='btn btn-primary'> <a href='tampil.php' class='text-light text-decoration-none'> Daftar Pengurus</a></button></center>";
echo " <button type='button' class='btn btn-primary'> <a href='logout.php' class='text-light text-decoration-none'> LOGOUT</a></button>";

?>
      </div>
    </div>
  </div>
</nav>
<center>
<h2 style="padding-top: 250px;">Selamat Datang di Website Informasi</h2>
<h3 style="padding-top: 5px;">Pemerintahan Desa Sungai Bulan Singkawang Utara</h3>
</center>
  </body>
</html>



