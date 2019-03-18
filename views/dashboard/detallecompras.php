<?php
    require_once '../../core/helpers/header.php'
?>
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
                    <div class="card card-margen">
                        <div class="card-body">
                            <nav class="navbar navbar-white bg-white">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar"
                                        aria-label="Buscar">
                                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Buscar</button>
                                </form>
                            </nav>
                            <table class="table">
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
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>100</td>
                                        <td>Tintes Negros</td>
                                        <td>0.50</td>
                                        <td>500.00</td>
                                        <td>500.50</td>
                                        <td><a href=""><i class="fas fa-pen text-success"></i></a>
                                            <a href=""><i class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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
    <?php 
    require_once '../../core/helpers/footer.php'
?>