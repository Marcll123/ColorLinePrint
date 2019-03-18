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
                    <h5 class="text-primary text-center">COMPRAS</h5>
                </div>
            </div>
            <!--Inicio del formulario que contiene todos los campos nesesarios para efectuar 
            la compra contando con las funciones principales-->
            <form action="">
                <div class="row">
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="corelativoa"> Correlativo asignado:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="numerodocumento"> Numero de documentos:</label>
                                        <input type="text" id="numerodocumento" class="form-control">
                                        <label for="cproveedor"> Código del proveedor:</label>
                                        <input type="text" id="cproveedor" class="form-control">
                                        <label for="direccion"> Dirección:</label>
                                        <input type="text" id="direccion" class="form-control">
                                        <label for="bodega"> Bodega:</label>
                                        <select id="bodega" class="form-control form-control-sm">
                                            <option>General</option>
                                        </select>
                                        <label for="tipobodega"> Tipo de documento:</label>
                                        <select id="tipobodega" class="form-control form-control-sm">
                                            <option>Compra</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
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
                                        <label for="fechavecto"> Fecha de Vencto:</label>
                                        <input class="form-control" type="date" id="fechavecto" value="2019-03-19"
                                            id="example-date-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <label for="corelativoa"> N registro</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> NIT:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> N O compra:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> DAI:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> Doc Excluidos:</label>
                                <input type="text" id="corelativoa" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-margen">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-5">
                                        <label for="corelativoa"> Codigo producto:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Cantidad:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Descripción:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                    </div>
                                    <div class="col-5">
                                        <label for="corelativoa">Precio Unitario:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Total Exento:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa">Total gravado:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                    </div>
                                    <div class="col-2">

                                        <label for="corelativoa">Sub Total:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> IVA:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa">CESC:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa">Percepcion:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Total:</label>
                                        <input type="text" id="corelativoa" class="form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card">
                        <div class="card-body text-center">
                            <button type="button" class="btn btn-primary">Realizar Acción </button>
                            <button type="button" class="btn btn-danger">Aplicar al Inventario</button>
                            <button type="button" class="btn btn-warning">Revertir Aplicación</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /#page-content-wrapper -->
</div>
<!--Se traen todos los scrips nesesarios-->
<?php 
    require_once '../../core/helpers/footer.php'
?>