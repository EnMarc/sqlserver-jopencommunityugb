<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['sqlOpenCommunityUsername'])){
    header('Location: login.php');
}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inicio</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/fontawesome-all.min.css"/>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body>
        <h1>Hola Mundo</h1><br>
        <a href="logout.php">Cerrar Sesion</a>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
