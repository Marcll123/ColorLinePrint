<!--header proyecto-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link type="text/css" rel="stylesheet" href="../../resources/css/bootstrap.min.css" media="screen,projection">
    <link type="text/css" href="../../resources/css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" href="../../resources/css/all.min.css">

    <link rel="stylesheet" href="../../resources/css/style.css">
    <link rel="icon" href="../../resources/img/logo/favicon.PNG">
    <title>ColorLine</title>
</head>
<!--Partes del menu que cuenta co  todos los mudulos a utilizar en en proyectos
inglues el manejo de usuarios, manejo de ventas, manejo de compras y sus administracion-->

<body>
    <div class="d-flex principal" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-white bg-white"><img src="../../resources/img/logo/logo2.png" class="logo"
                    alt=""></div>

            <div class="list-group list-group-flush">
                <!--Inicio es el modulo principal que cuenta con informacion de la empresa-->
                <a href="../../views/dashboard/index.php"
                    class="list-group-item list-group-item-action bg-white hover">Inicio</a>
                <!--Apartado de usuarios con la administracion de estos y de las empresas-->
                <a href="#userData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Usuarios <i
                        class="fas fa-angle-down iconp text-primary"></i></a>
                <div id="userData" class="collapse">
                    <a href="../../views/dashboard/Users.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-user iconol2 text-primary"></i>Administrar usuarios</a>
                    <a href="../../views/dashboard/Enterprises.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-users-cog iconoli text-success"></i> Administrar empresas</a>
                </div>
                <!--Aprtado de compras cuenta con toda administracion-->
                <a href="#comprasData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Compras<i
                        class="fas fa-angle-down iconp2 text-primary"></i></a>
                <div id="comprasData" class="collapse">
                    <a href="../../views/dashboard/compras.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-shopping-bag iconoli text-warning"></i>Realizar compras</a>
                    <a href="../../views/dashboard/detallecompras.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-shopping-cart iconoli text-primary"></i>Gestión compras</a>
                    <a href="../../views/dashboard/inventory.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-warehouse iconoli text-danger"></i>Inventario</a>
                </div>
                <!--Apartado de ventas cuenata con todo los detalle de administracion de esta-->
                <a href="#ventasData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Ventas<i
                        class="fas fa-angle-down iconp3 text-primary"></i></a>
                <div id="ventasData" class="collapse">
                    <a href="../../views/dashboard/ventas.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-clipboard-check iconoli text-success"></i>Realizar ventas</a>
                    <a href="../../views/dashboard/detalleventas.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-tasks iconoli text-warning"></i>Detalle de ventas</a>
                            <a href="../../views/dashboard/quotation.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-dollar-sign iconoli text-primary"></i>Cotización</a>
                </div>

                <a href="#userchart" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Graficas<i
                        class="fas fa-angle-down iconp4 text-primary"></i></a>
                <div id="userchart" class="collapse">
                    <a href="../../views/dashboard/chartCompra.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-chart-pie iconol2 text-primary"></i>Compras</a>
                    <a href="../../views/dashboard/chartVentas.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-chart-line iconoli text-success espacio"></i>Ventas</a>
                </div>
                <!--Ajustes son cuestiones del manejo de la cuenta personal de los usuarios del
                 sistema-->
                <a href="#ajustesData" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Ajustes<i
                        class="fas fa-angle-down iconp3 text-primary"></i></a>
                <div id="ajustesData" class="collapse">
                    <a href="../../views/dashboard/settings.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-user-cog iconoli text-danger"></i>Mi perfil</a>
                    <a href="../../views/dashboard/notes.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-sticky-note iconoli text-primary"></i>Notas</a>
                </div>
                <!--Gestion de las tablas-->
                <a href="#gestiontables" data-toggle="collapse"
                    class="list-group-item list-group-item-action bg-white hover">Gestion<i
                        class="fas fa-angle-down iconp3 text-primary"></i></a>
                <div id="gestiontables" class="collapse">
                    <a href="../../views/dashboard/addresses.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-user-cog iconoli text-danger"></i>Direcciones</a>
                    <a href="../../views/dashboard/billing.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-sticky-note iconoli text-primary"></i>Facturacion</a>
                            <a href="../../views/dashboard/managementtype.php"
                        class="list-group-item list-group-item-action bg-white hover"><i
                            class="fas fa-sticky-note iconoli text-primary"></i>Tipos Administracion</a>
                </div>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->