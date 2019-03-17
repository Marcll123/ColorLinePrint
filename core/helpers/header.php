<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../resources/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="icon" href="../../resources/img/logo/favicon.PNG">
    <title>ColorLine</title>
</head>

<body>
    <div class="d-flex principal" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white bg-white"><img src="../../resources/img/logo/logo2.png" class="logo"
                    alt=""></div>

            <div class="list-group list-group-flush">
              
                <a href="../../views/dashboard/index.php" class="list-group-item list-group-item-action bg-white text-dark">Inicio</a>
                <a href="#userData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white text-dark">Usuarios <i
                        class="fas fa-angle-down iconp text-primary"></i></a>
                <div id="userData" class="collapse">
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-user iconol2 text-primary"></i>Administrar usuarios</a>
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-users-cog iconoli text-success"></i> Administrar empresas</a>
                </div>
                <a href="#comprasData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white text-dark">Compras<i
                        class="fas fa-angle-down iconp2 text-primary"></i></a>
                <div id="comprasData" class="collapse">
                    <a href="../../views/dashboard/compras.php" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-shopping-bag iconoli text-warning"></i>Realizar Compras</a>
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-shopping-cart iconoli text-primary"></i>Gestion compras</a>
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-warehouse iconoli text-danger"></i>Inventario</a>
                </div>
                <a href="#ventasData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white text-dark">Ventas<i
                        class="fas fa-angle-down iconp3 text-primary"></i></a>
                <div id="ventasData" class="collapse">
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark bg-light"><i
                            class="fas fa-clipboard-check iconoli text-success"></i>Realizar Ventas</a>
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i
                            class="fas fa-tasks iconoli text-warning"></i>Detalle de ventas</a>
                </div>
                <a href="#ajustesData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white text-dark">Ajustes<i
                        class="fas fa-angle-down iconp3 text-primary"></i></a>
                <div id="ajustesData" class="collapse">
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark bg-light"><i
                            class="fas fa-user-cog iconoli text-danger"></i>Mi perfil</a>
                    <a href="#" class="list-group-item list-group-item-action bg-white text-dark"><i class="fas fa-sticky-note iconoli text-primary"></i>Notas</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->