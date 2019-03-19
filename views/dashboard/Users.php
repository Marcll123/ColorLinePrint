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
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <label for="corelativoa"> Nombre:</label>
                                <input type="text" id="corelativoa" class="form-control" placeholder="Nombre">
                                <label for="numerodocumento"> Apellido:</label>
                                <input type="text" id="numerodocumento" class="form-control" placeholder="Apellido">
                                <label for="cproveedor"> Genero:</label>
                                <input type="text" id="cproveedor" class="form-control" placeholder="Genero">
                                
                                <label for="fechac"> Fecha de Nacimiento:</label>
                                <input class="form-control" type="date" id="fechac" value="2019-03-19" id="example-date-input">
                            </div>
                            <div class="col-6">
                                <label for="seriedocto"> Nombre de Usuario:</label>
                                <input type="text" id="seriedocto" class="form-control" placeholder="Usuario">
                                
                                <label for="seriedocto"> Correo:</label>
                                <input type="text" id="seriedocto" class="form-control" placeholder="Correo">
                                <label for="seriedocto"> Clave:</label>
                                <input type="text" id="seriedocto" class="form-control" placeholder="*****">
                                <label for="seriedocto"> Confirmar Clave:</label>
                                <input type="text" id="seriedocto" class="form-control" placeholder="*****">
                                
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- Boton de confirmacion para agregar usuarios-->
                    <div class="col">
                        <div class="card card-margen">
                            <div class="card-body text-center">
                                <button type="button" class="btn btn-primary">Agregar</button>
                            </div>
                        </div>
                    </div>
                    <div class="card card-margen">
                        <div class="card-body">
                                <form class="form-group">
                                    <div class="row">
                                        <div class="col-4">
                                            <input type="text" class="form-control" placeholder="Buscar">
                                        </div>
                                        <div class="col">
                                            <button type="button" class="btn btn-outline-primary">Buscar</button>
                                        </div>
                                    </div>
                                </form>
                            <!-- Tabla con todos los usuarios-->
                            <table class="table table-striped table-responsive-sm ">
                                <thead class="bg-primary text-white">
                                    <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Cargo</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt iconoli text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt iconoli text-danger"></i></a></td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-trash-alt iconoli text-danger"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    
                    </div>
                   
        </div>
    </div>
    <!-- Formulario para eliminar usuarios-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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