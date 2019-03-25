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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <nav class="navbar navbar-white bg-white">
                                <form class="form-inline">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Buscar"
                                        aria-label="Buscar">
                                    <button class="btn btn-outline-primary my-2 my-sm-2" type="submit">Buscar</button>
                                </form>
                            </nav>
                            <!--Se crea la tabla con todos los datos registrados de las compras-->
                            <table class="table table-responsive-sm">
                                <thead class="bg-primary text-white">
                                    <tr>
                                        <th scope="col">Codigo</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Genero</th>
                                        <th scope="col">Fecha de nacimiento</th>
                                        <th scope="col">Usuario</th>
                                        <th scope="col">Correo</th>
                                        <th scope="col">Contraseña</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Miguel</td>
                                        <td>Gonzales</td>
                                        <td>Marculino</td>
                                        <td>04/09/2001</td>
                                        <td>Brei</td>
                                        <td>123</td>
                                        <td>2</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Miguel</td>
                                        <td>Gonzales</td>
                                        <td>Marculino</td>
                                        <td>04/09/2001</td>
                                        <td>Brei</td>
                                        <td>123</td>
                                        <td>2</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Miguel</td>
                                        <td>Gonzales</td>
                                        <td>Marculino</td>
                                        <td>04/09/2001</td>
                                        <td>Brei</td>
                                        <td>123</td>
                                        <td>2</td>
                                        <td><a data-toggle="modal" data-target="#editmodal"><i
                                                    class="fas fa-pen text-success"></i></a>
                                            <a data-toggle="modal" data-target="#exampleModal"><i
                                                    class="fas fa-trash-alt icon2 text-danger"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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