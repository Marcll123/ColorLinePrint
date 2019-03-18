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
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-margen">
                            <div class="card-body">
                                <h5 class="text-primary text-center">VENTAS</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-6">
                                        <label for="sucursal"> Surcursal:</label>
                                        <select id="sucursal" class="form-control form-control-sm">
                                            <option>Origen</option>
                                        </select>
                                        <label for="tipoComprovante"> Tipo de coprovante:</label>
                                        <select id="tipoComprovante" class="form-control form-control-sm">
                                            <option>Credito fiscal</option>
                                            <option>Tikets</option>
                                            <option>Factura consumidor final</option>
                                            <option>Factura exportacion</option>
                                            <option>Nota de credito</option>
                                            <option>Nota de debito</option>
                                            <option>Factura de devolucion</option>
                                        </select>
                                        <label for="codigocliente"> Codigo cliente:</label>
                                        <input type="text" id="codigocliente" class="form-control">
                                        <label for="direccionventas"> Direccion:</label>
                                        <input type="text" id="direccionventas" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="puntoV"> Punto de venta:</label>
                                        <select id="puntoV" class="form-control form-control-sm">
                                            <option>Oficina</option>
                                        </select>
                                        <label for="fechacomprobante"> Fecha de comprobante:</label>
                                        <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                            id="example-date-input">
                                        <label for="nombreCliente"> Nombre:</label>
                                        <input type="text" id="nombreCliente" class="form-control">
                                        <label for="giro"> Giro:</label>
                                        <input type="text" id="giro" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="formaP"> Forma de pago:</label>
                                                <select id="formaP" class="form-control form-control-sm">
                                                    <option>Contado</option>
                                                </select>
                                            </div>

                                            <div class="col-4">
                                                <label for="diasCredito"> Dias de credito:</label>
                                                <input type="text" id="diasCredito" class="form-control">
                                            </div>

                                            <div class="col-4">
                                                <label for="tipoventa"> Tipo Venta:</label>
                                                <select id="tipoventa" class="form-control form-control-sm">
                                                    <option>Gravada</option>
                                                    <option>Exenta</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-6">
                                                <label for="diasCredito"> Contacto:</label>
                                                <input type="text" id="diasCredito" class="form-control">
                                            </div>
                                            <div class="col-6">
                                                <label for="formaP"> Tipo factura:</label>
                                                <select id="formaP" class="form-control form-control-sm">
                                                    <option>Facturas otras</option>
                                                    <option>Facturas gobierno</option>
                                                </select>
                                            </div>
                                        </div>
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
                                <label for="corelativoa"> Notas remision:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> Numero pedido:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> Bodega:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="corelativoa"> Telefono:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="fechacomprobante"> Fecha servicio:</label>
                                <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                    id="example-date-input">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card card-margen">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-5">
                                        <label for="corelativoa"> Card producto:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> UMD:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Cantidad:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Descuento:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> V/No sujeta:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> V/efecta:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                    </div>
                                    <div class="col-5">
                                        <label for="corelativoa">T/P:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> Descripcion:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa">Total gravado:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa">P/unitario:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> V/exenta:</label>
                                        <input type="text" id="corelativoa" class="form-control">
                                        <label for="corelativoa"> U/conversion:</label>
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
                            <button type="button" class="btn btn-primary">Realizar Accion</button>
                            <button type="button" class="btn btn-danger">Realizar e Imprimir</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>

<?php 
    require_once '../../core/helpers/footer.php'
?>