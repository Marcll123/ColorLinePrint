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
            <div class="row content-card">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Clientes</h5>
                                    <h1>500</h1>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../resources/img/principal/clientes.png" alt="">
                                </div>
                                <div class="col-sm-12">
                                    <p>Desde hace una semana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Ventas</h5>
                                    <h1>200</h1>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../resources/img/principal/people-trading.png" alt="">
                                </div>
                                <div class="col-sm-12">
                                    <p>Desde hace una semana</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5>Compras</h5>
                                    <h1>100</h1>
                                </div>
                                <div class="col-sm-6">
                                    <img src="../../resources/img/principal/shopping-cart.png" alt="">
                                </div>
                                <div class="col-sm-12">
                                    <p>Desde hace una dia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text">Lista de Trabajos pendientes</h2>

        <div class="list-group group-task">
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Diseño de logotipo</h5>
                    <small>3 hace tres dias</small>
                </div>
                <p class="mb-1">Realizavion del diseños a una empresa que llevara como producto principal
                    el cuido al medio ambiente
                </p>
                <small class="text-primary">Estado Medio</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Creacion de Banner</h5>
                    <small class="text-muted">3 hace tres dias</small>
                </div>
                <p class="mb-1">Realiacion de un banner para una empresa que lleve todo sus productos en
                    el diseño
                </p>
                <small class=" text-success">Casi finalizado</small>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">Creacion de tikets</h5>
                    <small class="text-muted">3 hace tres dias</small>
                </div>
                <p class="mb-1">Realizacion de tikets de descuento para un restaurante uq equiere que
                    token_get_allsu logo y lema</p>
                <small class="text-warning">Comenzando</small>
            </a>
        </div>
    </div>

</div>
<!-- /#page-content-wrapper -->
</div>

<?php 
    require_once '../../core/helpers/footer.php'
?>