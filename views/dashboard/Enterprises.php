<!--Se trae desde  helpers el menu del programa con php-->
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
                    <h5 class="text-primary text-center">EMPRESAS</h5>
                </div>
            </div>
            <!-- tipos de empresas -->
            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">Datos Generales</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">Datos Fiscales Y
                                Parametros</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Otros</a>
                        </div>
                        <!-- Formulario para agregar empresas-->
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="tab-content col-12" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                            aria-labelledby="nav-home-tab">
                                            <div class="col-12">
                                                <div class="col-12">
                                                    <label for="corelativoa"> Codigo De la Empresa:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                </div>
                                                <div class="col-12">
                                                    <label for="numerodocumento"> Nombre de la Empresa</label>
                                                    <input type="text" id="numerodocumento" class="form-control">
                                                    <label for="firmante"> Primer firmante:</label>
                                                    <input type="text" id="firmante" class="form-control">
                                                    <label for="cargo"> Cargo:</label>
                                                    <input type="text" id="cargo" class="form-control" ">
                                                <label for=" firmante2"> segundo firmante:</label>
                                                    <input type="text" id="firmante" class="form-control">
                                                    <label for="cargo"> Cargo:</label>
                                                    <input type="text" id="cargo2" class="form-control">


                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                            aria-labelledby="nav-profile-tab">
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-4">
                                                        <label for="seriedocto"> N° registro de IVA:</label>
                                                        <input type="text" id="seriedocto" class="form-control">
                                                        <label for="nombreEmpresa"> NIT:</label>
                                                        <input type="text" id="nombreEmpresa" class="form-control">
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4">
                                                        <p>Tipo de Contribuyente:</p>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineCheckbox1">Pequeño</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineCheckbox1">Mediano</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="inlineCheckbox1" value="option1">
                                                            <label class="form-check-label"
                                                                for="inlineCheckbox1">Grande</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-4">
                                                        <label for="seriedocto"> Lineas por documento</label>
                                                        <input type="text" id="seriedocto" class="form-control">
                                                        <input type="text" id="nombreEmpresa" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-12 col-lg-6">
                                                        <label for="tipoC"> Cuentas para el IVA Credito Fiscal (Compras
                                                            locales):</label>
                                                        <select id="tipoC" class="form-control form-control-sm">
                                                            <option>Gravada</option>
                                                            <option>Exentas</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                                                        <label for="formaP"> Cuentas para el IVA Credito Fiscal
                                                            (Importaciones):</label>
                                                        <select id="tipoC" class="form-control form-control-sm">
                                                            <option>Contado</option>
                                                            <option>Creditos</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                                                        <label for="tipoC"> Cuentas para el IVA Credito Fiscal
                                                            (Contribuyentes):</label>
                                                        <select id="tipoC" class="form-control form-control-sm">
                                                            <option>Gravada</option>
                                                            <option>Exentas</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-12 col-md-12 col-lg-6 ">
                                                        <label for="formaP"> Cuentas para el IVA Credito Fiscal
                                                            (Consumidor
                                                            Final):</label>
                                                        <select id="tipoC" class="form-control form-control-sm">
                                                            <option>Contado</option>
                                                            <option>Creditos</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                            aria-labelledby="nav-contact-tab">
                                            <div class="col-12">
                                                <form action="">
                                                    <label for="exampleFormControlTextarea1">Descripcion de la
                                                        emprensa</label>
                                                    <textarea class="form-control" id="exampleFormControlTextarea1"
                                                        rows="3"></textarea>
                                                    <label for="corelativoa"> Municipio:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                    <label for="corelativoa"> Departamento:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                    <label for="corelativoa"> Numero Patronal:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                    <label for="corelativoa"> Telefono:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                    <label for="corelativoa"> Actividad Economica:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                    <label for="corelativoa"> Ciudad Para Emision de Cheques:</label>
                                                    <input type="text" id="corelativoa" class="form-control">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Boton de confirmacion-->
                        <div class="row">
                            <div class="col">
                                <div class="card card-margen">
                                    <div class="card-body text-center">
                                        <button type="button" class="btn btn-primary">Registrar Empresa </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /#page-content-wrapper -->
</div>

<?php 
    require_once '../../core/helpers/footer.php'
?>