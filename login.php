<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css_login.css">
</head>
<body>
    
	<div id="container">
    <img id="logo" src="shoes.png">
    <center>
    <?php
        session_start();
        if (isset($_SESSION['email'])) {
        header("Location: index.php");
       
    }
    
    echo "<h2>LOGIN</h2>
    <form method=post action=cek_login.php>
    <table>
    <tr><td></td><td><input name='email' type='text'></td></tr>
    <tr><td></td><td><input name='password' type='password'></td></tr>
    <tr><td colspan=2> <center><input type='submit' value='LOGIN'><center></td></tr>
    </table>
    </form>";
    
    ?></center>
            <p> Belum Memiliki akun?
                  <a href="register.php">Register di sini</a>
	</div>
</body>
</html>