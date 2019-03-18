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
        <div class="container-fluid bg-content">
            <div class="card card-margen">
                <div class="card-body">
                    <h1 >Perfil</h1>
                </div>
            </div>
            <div class="card card-margen">
                <div class="card-body">
                   <table class="table table-borderless table-responsive-sm">
                        <thead >
                            <tr>
                            <th scope="col">Datos Personales</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Nombre</td>
                            <td>Nelson Campos</td>
                            <td><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>
                            <td>Genero</td>
                            <td>Masculino</td>
                            <td><a href="" data-toggle="modal" data-target="#exampleModal2"><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>                   
                            <td>Correo</td>
                            <td>NelsonCampos727@gmail.com</td>
                            <td><a href=""><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>
                            <td>Fecha de Nacimiento</td>
                            <td>06/04/2001</td>
                            <td><a href="" data-toggle="modal" data-target="#exampleModal3"><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>
                            <td>Usuario</td>
                            <td>Nelsoncampos12</td>
                            <td><a href="" data-toggle="modal" data-target="#exampleModal4"><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>
                            <td>Contraseña</td>
                            <td>*************</td>
                            <td><a href="" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-edit iconoli text-Primary"></i></a></td>
                            </tr>
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-group">
                     <input type="text" id="numerodocumento" class="form-control"placeholder="Nombre">
                     <input type="text" id="numerodocumento" class="form-control"placeholder="Apellido">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Genero</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-group">
                    <select id="tipoC" class="form-control form-control-sm">
                        <option>Maculino</option>
                        <option>Femenino</option>
                    </select>
                     
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Fecha de Nacimiento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-group">
                    <input class="form-control" type="date" id="fechac" value="2019-03-19" id="example-date-input">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Cambiar Nombre de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-group">
                     <input type="text" id="numerodocumento" class="form-control"placeholder="Nuevo usuario">
                     
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</div> 
<?php 
    require_once '../../core/helpers/footer.php'
?>   