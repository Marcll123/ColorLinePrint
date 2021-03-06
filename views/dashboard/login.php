<!DOCTYPE html>
<html lang="en">

<!-- header-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../../resources/css/bootstrap.min.css" media="screen,projection">
    <link rel="stylesheet" href="../../resources/css/all.min.css">
    <link rel="stylesheet" href="../../resources/css/loginstyle.css">
    <link rel="icon" href="../../resources/img/logo/favicon.PNG">
    <title>ColorLine</title>
</head>

<body>
    <!-- Formulario para iniciar sesíon-->
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-8">
            <div class="card car-c ">
                <div class="card clase-card">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary">Iniciar sesión</h4><br />
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="text-primary">Correo electrónico </label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Correo electronico">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1" class="text-primary">Contraseña</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Contaseña">
                                <!-- Recuperacion de contraseña-->
                            </div>
                            <a href="../../views/dashboard/recuperar.php" class="btn btn-flat text-primary">¿Olvidaste
                                tu contraseña?</a><br /><br />
                            <a href="../../views/dashboard/index.php" class="btn btn-primary btn-login">Iniciar
                                Sesión </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-2">
        </div>
    </div>
</body>

</html>