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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label for="corelativoa"> Correlativo asignado:</label>
                            <input type="text" id="corelativoa" class="form-control" placeholder="Correlativo asignado">
                            <label for="numerodocumento"> Numero de documentos:</label>
                            <input type="text" id="numerodocumento" class="form-control" placeholder="Numero de documentos">
                            <label for="cproveedor"> Codigo del proveedor:</label>
                            <input type="text" id="cproveedor" class="form-control" placeholder="Codigo del proveedor">
                        </div>
                        <div class="col-6">
                            <label for="seriedocto"> Serie del docto:</label>
                            <input type="text" id="seriedocto" class="form-control" placeholder="Serie del docto">
                            <label for="fechac"> Fecha de compra:</label>
                            <input class="form-control" type="date" id="fechac" value="2019-03-19" id="example-date-input">
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