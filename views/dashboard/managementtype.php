<?php
    require_once '../../core/helpers/header.php'
?>
<!-- Page Content -->
<div id="page-content-wrapper" class="bg xd">
    <?php
        require_once '../../core/helpers/navcontainer.php'
    ?>
    <!--Inicio del contenedor donde ira la informacion de cada modulo-->
    <div class="size-completo">
        <div class="container-fluid bg-content ">
            <!--Titulo del modulo-->
            <div class="card card-margen">
                <div class="card-body">
                    <h5 class="text-primary text-center">TIPOS DE ADMINISTARCION</h5>
                </div>
            </div>
            <!--Inicio de los apartados-->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                        aria-controls="home" aria-selected="true">Tipo Venta</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                        aria-controls="profile" aria-selected="false">Forma de pago</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#sucursal" role="tab"
                        aria-controls="profile" aria-selected="false">Sucursal</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-9">
                                            <nav class="navbar navbar-white bg-white">
                                                <form class="form-inline">
                                                    <input class="form-control mr-sm-2" type="search"
                                                        placeholder="Buscar" aria-label="Buscar">
                                                    <button class="btn btn-outline-primary my-2 my-sm-2"
                                                        type="submit">Buscar</button>
                                                </form>
                                            </nav>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-3">
                                            <button type="button"
                                                class="btn btn-outline-primary mx-auto diseño">Agregar</button>
                                        </div>
                                        <div class="col-12">
                                            <table class="table table-responsive-sm">
                                                <thead class="bg-primary text-white">
                                                    <tr>
                                                        <th scope="col">Codigo</th>
                                                        <th scope="col">Venta</th>
                                                        <th scope="col">acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Exenta</td>
                                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>Normal</td>
                                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                </tbody>
                                            </table>
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar
                                                                Usuario</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            ¿Estas seguro que quieres eliminar esta cotizacion?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Cancelar</button>
                                                            <button type="button"
                                                                class="btn btn-primary">Eliminiar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <nav aria-label="Page navigation example ">
                                                <ul class="pagination justify-content-center">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <nav class="navbar navbar-white bg-white">
                                        <form class="form-inline">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar"
                                                aria-label="Buscar">
                                            <button class="btn btn-outline-primary my-2 my-sm-2"
                                                type="submit">Buscar</button>
                                        </form>
                                    </nav>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-3">
                                    <button type="button"
                                        class="btn btn-outline-primary mx-auto diseño">Agregar</button>
                                </div>
                                <div class="col-12">
                                    <table class="table table-responsive-sm">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th scope="col">Codigo</th>
                                                <th scope="col">Forma de pago</th>
                                                <th scope="col">acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Contado</td>
                                                <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                                    <a data-toggle="modal" data-target="#exampleModal"><i
                                                            class="fas fa-trash-alt icon2 text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Creditos</td>
                                                <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                                    <a data-toggle="modal" data-target="#exampleModal"><i
                                                            class="fas fa-trash-alt icon2 text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar
                                                        Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Estas seguro que quieres eliminar esta cotizacion?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-primary">Eliminiar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example ">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="sucursal" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-9">
                                    <nav class="navbar navbar-white bg-white">
                                        <form class="form-inline">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar"
                                                aria-label="Buscar">
                                            <button class="btn btn-outline-primary my-2 my-sm-2"
                                                type="submit">Buscar</button>
                                        </form>
                                    </nav>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-3">
                                    <button type="button"
                                        class="btn btn-outline-primary mx-auto diseño">Agregar</button>
                                </div>
                                <div class="col-12">
                                    <table class="table table-responsive-sm">
                                        <thead class="bg-primary text-white">
                                            <tr>
                                                <th scope="col">Codigo</th>
                                                <th scope="col">Sucursal</th>
                                                <th scope="col">acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">1</th>
                                                <td>Principal</td>
                                                <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                                    <a data-toggle="modal" data-target="#exampleModal"><i
                                                            class="fas fa-trash-alt icon2 text-danger"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                            <tr>
                                        </tbody>
                                    </table>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Eliminar
                                                        Usuario</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Estas seguro que quieres eliminar esta cotizacion?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Cancelar</button>
                                                    <button type="button" class="btn btn-primary">Eliminiar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav aria-label="Page navigation example ">
                                        <ul class="pagination justify-content-center">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!--Se traen todos los scrips nesesarios-->
    <?php 
    require_once '../../core/helpers/footer.php'
?>