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
            <div class="card card-margen">
                <div class="card-body">
                    <h5 class="text-primary text-center">USUARIOS</h5>
                </div>
            </div>
            <!-- Formulario para agregar usuarios-->
            <form action="">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6 ">
                                <label for="corelativoa"> Nombre:</label>
                                <input type="text" id="corelativoa" class="form-control">
                                <label for="numerodocumento"> Apellido:</label>
                                <input type="text" id="numerodocumento" class="form-control">
                                <label for="cproveedor"> Genero:</label>
                                <input type="text" id="cproveedor" class="form-control">

                                <label for="fechac"> Fecha de Nacimiento:</label>
                                <input class="form-control" type="date" id="fechac" value="2019-03-19"
                                    id="example-date-input">
                            </div>
                            <div class=" col-sm-12 col-md-12 col-lg-6 ">
                                <label for="seriedocto"> Nombre de Usuario:</label>
                                <input type="text" id="seriedocto" class="form-control">

                                <label for="seriedocto"> Correo:</label>
                                <input type="text" id="seriedocto" class="form-control">
                                <label for="seriedocto"> Clave:</label>
                                <input type="text" id="seriedocto" class="form-control">
                                <label for="roles"> Tipo de usuario:</label>
                                <select id="roles" class="form-control form-control-sm">
                                    <option>Administrador</option>
                                    <option>Gerencia</option>
                                </select>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Boton de confirmacion para agregar usuarios-->
                <div class="row">
                    <div class="col">
                        <div class="card card-margen">
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary">Agregar usuario</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <!-- Formulario para eliminar usuarios-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿¿Estas seguro que quieres eliminar este usuario??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Eliminiar</button>
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