<?php
    require_once '../../core/helpers/header.php'
?>
<div id="page-content-wrapper" class="bg xd">
    <?php
        require_once '../../core/helpers/navcontainer.php'
    ?>   
        <div class="size-completo">
            <div class="container-fluid bg-content">
                <div class="row">
                    <div class="col-6">
                        <div class="card card-margen">
                            <div class="card-body">
                                <h4 class="text-center text-primary">Compras a la Semana </h4>
                                <canvas id="myChart"></canvas>
                                
                            </div>   
                        </div>        
                    </div>
                    <div class="col-6">
                        <div class="card card-margen">
                            <div class="card-body">
                                <h4 class="text-center text-primary">Compras al mes </h4>
                                <canvas id="myChart2"></canvas>
                                
                            </div>   
                        </div>  
                    </div>
                    <div class="col-6">
                        <div class="card card-margen">
                            <div class="card-body">
                                <h4 class="text-center text-primary">Compras Anuales </h4>
                                <canvas id="myChart3"></canvas>
                                
                            </div>   
                        </div>        
                    </div>
                    <div class="col-6">
                        <div class="card card-margen">
                            <div class="card-body">
                                <h4 class="text-center text-primary">Presupuesto Anual</h4>
                                <canvas id="myChart4"></canvas>
                            </div>   
                        </div>  
                    </div>
                </div>
                
            </div>    
        </div>        
</div>                
<?php 
    require_once '../../core/helpers/footer.php'
?>                       