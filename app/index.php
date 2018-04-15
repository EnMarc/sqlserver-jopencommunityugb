<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplo login</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body style="background-color: #932426;">
        <div class="container">
            <div class="account-wall">
                <img class="profile-img" src="img/LOGO UGB.png" alt="">
                <form action="procesos/validarUsuario.jsp" method="post" class="form-signin">
                    <input name="user" id="user" type="text" class="form-control" placeholder="Usuario" required autofocus><br>
                    <input name="pass" id="pass" type="password" class="form-control" placeholder="Contraseña" required><br>
                    <button class="btn btn-lg btn-danger btn-block" type="submit">Ingresar</button>
                </form>
            </div>
        </div>
    </body>
<html>