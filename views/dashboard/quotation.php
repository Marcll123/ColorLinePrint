<!--Se trae desde  helpers el menu del programa con php-->
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
            <!--Titulo del contenido-->
            <div class="card card-margen">
                <div class="card-body">
                    <h5 class="text-primary text-center">COTIZACIÓN</h5>
                </div>
            </div>
            <!--Inicio del formulario que contiene todos los campos nesesarios para efectuar 
            la compra contando con las funciones principales-->
            <form action="">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <label for="cproveedor"> ID:</label>
                                        <input type="text" id="cproveedor" class="form-control">
                                        <label for="numerodocumento"> Producto:</label>
                                        <select id="tipobodega" class="form-control form-control-sm">
                                            <option>Facturas</option>
                                        </select>
                                        <label for="numerodocumento"> Cliente:</label>
                                        <select id="tipobodega" class="form-control form-control-sm">
                                            <option>MAFRE</option>
                                        </select>
                                        <label for="numerodocumento">Cantidad:</label>
                                        <input type="text" id="numerodocumento" class="form-control">
                                        <label for="cproveedor"> Descuento:</label>
                                        <input type="text" id="cproveedor" class="form-control">


                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <label for="seriedocto"> Serie del docto:</label>
                                        <input type="text" id="seriedocto" class="form-control">
                                        <label for="fechac"> Fecha de compra:</label>
                                        <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                            id="example-date-input">
                                        <label for="nombreEmpresa"> Nombre:</label>
                                        <input type="text" id="nombreEmpresa" class="form-control">

                                        <div class="row">
                                            <div class="col">
                                                <label for="tipoC"> Tipo compra:</label>
                                                <select id="tipoC" class="form-control form-control-sm">
                                                    <option>Gravada</option>
                                                    <option>Exentas</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="formaP"> Forma pago:</label>
                                                <select id="tipoC" class="form-control form-control-sm">
                                                    <option>Contado</option>
                                                    <option>Créditos</option>
                                                </select>
                                            </div>
                                        </div>

                                        <label for="origenC"> Origen compra:</label>
                                        <select id="origenC" class="form-control form-control-sm">
                                            <option>Local</option>
                                            <option>Importación</option>
                                        </select>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <label for="corelativoa"> N registro</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> NIT:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> N O Pedido:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa">Nota de Remision:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="fechavecto"> Fecha de Servicio:</label>
                                <input class="form-control" type="date" id="fechavecto" value="2019-03-19"
                                    id="example-date-input">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary">Realizar Acción </button>
                            </div>
                        </div>
                    </div>
            </form>

            <div class="col">
                <div class="card card-margen">
                    <div class="card-body">
                        <h5 class="text-primary text-center">Cotizaciones realizadas</h5>
                        <table class="table table-responsive-sm">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Descuento</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Total</th>
                                    <th scope="col">Acciones</th>
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
                            </tbody>
                            <!-- paginacion de la tabla-->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Formulario para eliminar cotizacion-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar cotizacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ¿Estas seguro que quieres eliminar esta cotizacion?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Eliminiar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar cotizacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">
                    <div class="row">
                        <div class="col-12">
                            <label for="corelativoa"> Cantidad:</label>
                            <input type="text" id="corelativoa" class="form-control">
                            <label for="corelativoa"> Precio:</label>
                            <input type="text" id="corelativoa" class="form-control">
                            <label for="corelativoa">Descuento:</label>
                            <input type="text" id="corelativoa" class="form-control">
                            <label for="corelativoa"> Cliente:</label>
                            <input type="text" id="corelativoa" class="form-control">
                            <label for="corelativoa">Total:</label>
                            <input type="text" id="corelativoa" class="form-control">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Realizar</button>
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