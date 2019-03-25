<!-- Se manda a llamar el header-->
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
                    <div class="col-sm-12 col-md-12 col-lg-9">
                        <div class="card">
                            <div class="card-body">
                                <!-- Formulario para las ventas-->
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                        <label for="sucursal"> Sucursal :</label>
                                        <select id="sucursal" class="form-control form-control-sm">
                                            <option>Origen</option>
                                        </select>
                                        <label for="tipoComprovante"> Tipo de comprobante :</label>
                                        <select id="tipoComprovante" class="form-control form-control-sm">
                                            <option>Crédito fiscal </option>
                                            <option>Tikets</option>
                                            <option>Factura consumidor final</option>
                                            <option>Factura exportación</option>
                                            <option>Nota de crédito</option>
                                            <option>Nota de debito</option>
                                            <option>Factura de devolución</option>
                                        </select>
                                        <label for="codigocliente"> Código cliente:</label>
                                        <input type="text" id="codigocliente" class="form-control">
                                        <label for="direccionventas"> Dirección:</label>
                                        <input type="text" id="direccionventas" class="form-control">
                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-6">
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
                                                <label for="diasCredito"> Días de credito:</label>
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
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <label for="corelativoa"> N registro</label>
                                <input type="text" id="nregistro" class="form-control">
                                <label for="corelativoa"> NIT:</label>
                                <input type="text" id="nit" class="form-control">
                                <label for="corelativoa"> Notas remision:</label>
                                <input type="text" id="notasremision" class="form-control">
                                <label for="corelativoa"> Numero pedido:</label>
                                <input type="text" id="numpedido" class="form-control">
                                <label for="corelativoa"> Bodega:</label>
                                <input type="text" id="bodega" class="form-control">
                                <label for="corelativoa"> Telefono:</label>
                                <input type="text" id="telefonoventa" class="form-control">
                                <label for="fechacomprobante"> Fecha servicio:</label>
                                <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                    id="example-date-input">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="card card-margen">
                            <div class="card-body">
                                <div class="row">
                                    <!-- formulario ventas-->
                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                        <label for="corelativoa"> Card producto:</label>
                                        <input type="text" id="card" class="form-control">
                                        <label for="corelativoa"> UMD:</label>
                                        <input type="text" id="umd" class="form-control">
                                        <label for="corelativoa"> Cantidad:</label>
                                        <input type="text" id="cantidad" class="form-control">
                                        <label for="corelativoa"> Descuento:</label>
                                        <input type="text" id="descuento" class="form-control">
                                        <label for="corelativoa"> V/No sujeta:</label>
                                        <input type="text" id="vnosu" class="form-control">
                                        <label for="corelativoa"> V/efecta:</label>
                                        <input type="text" id="vefecta" class="form-control">
                                    </div>

                                    <div class="col-sm-12 col-md-12 col-lg-5">
                                        <label for="corelativoa">T/P:</label>
                                        <input type="text" id="tp" class="form-control">
                                        <label for="corelativoa"> Descripción:</label>
                                        <input type="text" id="descrip" class="form-control">
                                        <label for="corelativoa">Total gravado:</label>
                                        <input type="text" id="totalgra" class="form-control">
                                        <label for="corelativoa">P/unitario:</label>
                                        <input type="text" id="punitario" class="form-control">
                                        <label for="corelativoa"> V/exenta:</label>
                                        <input type="text" id="vexenta" class="form-control">
                                        <label for="corelativoa"> U/conversion:</label>
                                        <input type="text" id="uconversion" class="form-control">
                                    </div>
                                    <!-- Formulario para los impuestos-->
                                    <div class="col-sm-12 col-md-12 col-lg-2">

                                        <label for="corelativoa">Sub Total:</label>
                                        <input type="text" id="subtotal" class="form-control">
                                        <label for="corelativoa"> IVA:</label>
                                        <input type="text" id="iva" class="form-control">
                                        <label for="corelativoa">CESC:</label>
                                        <input type="text" id="cesc" class="form-control">
                                        <label for="corelativoa">Percepcion:</label>
                                        <input type="text" id="percepcion" class="form-control">
                                        <label for="corelativoa"> Total:</label>
                                        <input type="text" id="totalventa" class="form-control">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- confirmacion para realizar venta-->
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body text-center">
                             <div class="row">
                             <div class="col-sm-12 col-md-12 col-lg-6">
                                    <button type="button" class="btn btn-primary btn-block">Realizar áccion</button>
                                </div>
                                <!-- Realizar factura-->
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <button type="button" class="btn btn-danger btn-block">Realizar e imprimir</button>
                                </div> 
                             </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- Se manda a llamar el footer-->
<?php 
    require_once '../../core/helpers/footer.php'
?>