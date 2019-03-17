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
            <div class="card card-margen">
                <div class="card-body">
                    <h5 class="text-primary text-center">COMPRAS</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label for="corelativoa"> Correlativo asignado:</label>
                                    <input type="text" id="corelativoa" class="form-control"
                                        placeholder="Correlativo asignado">
                                    <label for="numerodocumento"> Numero de documentos:</label>
                                    <input type="text" id="numerodocumento" class="form-control"
                                        placeholder="Numero de documentos">
                                    <label for="cproveedor"> Codigo del proveedor:</label>
                                    <input type="text" id="cproveedor" class="form-control"
                                        placeholder="Codigo del proveedor">
                                    <label for="direccion"> Dirreccion:</label>
                                    <input type="text" id="direccion" class="form-control" placeholder="Direccion">
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
                                    <input type="text" id="seriedocto" class="form-control"
                                        placeholder="Serie del docto">
                                    <label for="fechac"> Fecha de compra:</label>
                                    <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                        id="example-date-input">
                                    <label for="nombreEmpresa"> Nombre:</label>
                                    <input type="text" id="nombreEmpresa" class="form-control" placeholder="Nombre">

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
                                                <option>Creditos</option>
                                            </select>
                                        </div>
                                    </div>

                                    <label for="origenC"> Origen compra:</label>
                                    <select id="origenC" class="form-control form-control-sm">
                                        <option>Local</option>
                                        <option>Importacion</option>
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
                            <form action="">
                                <label for="corelativoa"> N.registro</label>
                                <input type="text" id="corelativoa" class="form-control"
                                    placeholder="Correlativo asignado">
                                <label for="corelativoa"> NIT:</label>
                                <input type="text" id="corelativoa" class="form-control"
                                    placeholder="Correlativo asignado">
                                <label for="corelativoa"> N.O.compra:</label>
                                <input type="text" id="corelativoa" class="form-control"
                                    placeholder="Correlativo asignado">
                                <label for="corelativoa"> DAI:</label>
                                <input type="text" id="corelativoa" class="form-control"
                                    placeholder="Correlativo asignado">
                                <label for="corelativoa"> Doc.Excluidos:</label>
                                <input type="text" id="corelativoa" class="form-control"
                                    placeholder="Correlativo asignado">

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /#page-content-wrapper -->
</div>

<?php 
    require_once '../../core/helpers/footer.php'
?>