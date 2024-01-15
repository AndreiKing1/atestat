<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
     <style>article {
          width: 500px;
    border: 3px solid #ccc;
    padding: 30px;
    background: #fff;
    border-radius: 15px;
margin-left: 0%;
  padding: 0%;
  width: 20%;
  background-color: #fff;
  opacity: 0.8;
     }
     h1 {
	text-align: center;
	color: #000000;
}
     </style>
</head>
<body>
     <article>

     <h1>Bine ai venit, <?php echo $_SESSION['name']; ?>!</h1>
     <h2><a href="Acasa.html">Spre site</a></h2>
     <h2><a href="logout.php">Logout</a></h2>
     </article>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>