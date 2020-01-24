<?php
session_start();
if(!isset($_SESSION['username'])){
header('location:login.php');
}

?>

<!doctype html>
<html>
<head>
<title>Login Success</title>
<link href="css/success.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
<div class="greet">
<h2 style="font-size:35px;" class="text-center"> Welcome <?php echo $_SESSION['username']; ?> </h2>
</div>
</head>
<body>
<p>How's your day... <?php echo $_SESSION['username'];?></p>
<a style="text-align:right" href="logout.php"> LOGOUT</a>
</body>
</html> 