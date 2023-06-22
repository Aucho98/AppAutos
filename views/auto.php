<?PHP
require_once "libraries/funciones.php";
$id = $_GET['id'] ?? FALSE;
$auto = producto_x_id($id);


?>



 
 
 <?php if (isset($auto)) { ?>

    <h1 class="text-center my-5"> <span class="text-success"><?=  $auto['marca']  ?></span>  - <?=  $auto['modelo']  ?></h1>

    <div class="col">
        <div class="card mb-4">
                <div class="row">
                    <div class="col-5">
                    <img src="img/<?= $auto['imagen']; ?>" class="  p-2 img-fluid rounded-start" alt="">
                    <div class="card-body">
                                <p class="fs-4 m-0 fw-bold text-danger"><?=  $auto['marca']  ?></p>
                                <h2 class="card-title fs-2 mb-4"><?=  $auto['modelo']  ?></h2>
                        </div>

                    </div>
                    <div class="col-7  p-5">
                     <ul class="list-group">
                            <li class="list-group-item"><span class="fw-bold">VERSION: <?=  $auto['version']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold">COMBUSTIBLE: <?=  $auto['combustible']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold">MORTOR: <?=  $auto['motor']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold"> AÑO: <?=  $auto['anio']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold">KILOMETROS: <?=  $auto['kilometros']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold">COLOR: <?=  $auto['color']  ?></span> </li>
                            <li class="list-group-item"><span class="fw-bold">PUERTAS: <?=  $auto['puertas']  ?></span> </li>
                           
                        </ul>

                        <div class="card-body mt-4">
                            <div class="fs-3 mb-3 fw-bold text-center text-danger">USD <?= number_format($auto['precio'], 3, ",", "."); ?></div>
                            <a href="#" class="btn btn-success w-100 fw-bold">COMPRAR</a>
                        </div>

                    </div>
                </div>
        </div>
    </div>


<?php }else { ?>
    <div class="col">
    <h2 class="text-center m-5">No se encontró el producto deseado.</h2>
</div>
<?php } ?>