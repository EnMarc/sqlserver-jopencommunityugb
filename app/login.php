<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Iniciar Sesion</title>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/fontawesome-all.min.css"/>
        <link rel="stylesheet" href="css/styles.css"/>
    </head>
    <body style="background-color: #932426;">
        <div class="container">
            <div class="account-wall">
                <img class="profile-img" src="img/LOGO UGB.png" alt="">
                <form id="formLogin" action="ajax/listarUsuarios.php" method="post" class="form-signin">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-user"></i>
                        </span>
                        <input name="user" type="text" class="form-control" placeholder="Usuario" required autofocus>
                    </div><br>
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">
                            <i class="fa fa-key"></i>
                        </span>
                        <input name="pass" type="password" class="form-control" placeholder="Contraseña" required autofocus>
                    </div><br>
                    <button class="btn btn-lg btn-danger btn-block" type="submit">Ingresar</button>
                </form>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/popper.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $('#formLogin').submit(function(){
                    $.ajax({
                        url:$('#formLogin').attr('action'),
                        type:$('#formLogin').attr('method'),
                        data:$('#formLogin').serialize(),
                        success: function (data, textStatus, jqXHR) {//en caso que los datos ingresados sean correctos
                            if (data){
                                alert(data);
                                setInterval(function(){
                                    window.location = 'index.php';//redireccionara de acuerdo a los logs del usuario
                                },1000);
                            } else {
                                alert('Datos incorrectos');
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            alert('Error de conexion');
                        }
                    });
                    return false;
                });
            });
        </script>
    </body>
<html>