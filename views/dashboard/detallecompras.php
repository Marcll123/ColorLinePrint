<!--Se trae desde  helpers el menu del programa con php-->
<?php
    require_once '../../core/helpers/header.php'
?>
<!-- Page Content -->
<div id="page-content-wrapper" class="bg xd">
    <?php
        require_once '../../core/helpers/navcontainer.php'
    ?>
    <div class="size-completo">
        <div class="container-fluid bg-content ">
            <div class="row">
                <div class="col-12">
                    <div class="card card-margen">
                        <div class="card-body">
                            <h5 class="text-primary text-center">DETALLE COMPRAS</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <nav class="navbar navbar-white bg-white">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar"
                                        aria-label="Buscar">
                                    <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Buscar</button>
                                </form>
                            </nav>
                            <!--Se crea la tabla con todos los datos registrados de las compras-->
                            <table class="table table-responsive-sm">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Precio unitario</th>
                                        <th scope="col">Total exento</th>
                                        <th scope="col">Total gravado</th>
                                        <th scope="col">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- Formulario para eliminar compra-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Eliminar Compra</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            ¿Estas seguro que quieres eliminar esta compra?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Eliminiar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Editar compra</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="corelativoa"> Codigo producto:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                        <label for="corelativoa"> Cantidad:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                        <label for="corelativoa"> Descripción:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                        <label for="corelativoa">Precio Unitario:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                        <label for="corelativoa"> Total Exento:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                        <label for="corelativoa">Total gravado:</label>
                                                        <input type="text" id="corelativoa" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-primary">Realizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example ">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
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
    <!--Se traen todos los scrips nesesarios-->
    <?php 
    require_once '../../core/helpers/footer.php'
?>