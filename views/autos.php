<?php 
 

 require  "libraries/funciones.php";

  $autoSeleccionado =  $_GET['ser'] ?? FALSE ;

  $productos = catalogo_x_marcas($autoSeleccionado);



$miTitulo = $autoSeleccionado ?  ucwords(str_replace("_"," ", $autoSeleccionado )) : FALSE;


?>



<h1 class="text-center mt-2">Autos en venta de la marca <?= $miTitulo ?></h1>

<div class="row mt-5">
<?php if (count($productos)) { ?>
<?php foreach ($productos as $auto) { ?>

 <div class="col-4">

            <div class="card mt-5">
                <img style="height: 400px;" src="img/<?=  $auto['imagen']  ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"><?=  $auto['marca']  ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?=  $auto['modelo']  ?></h6>
                        
                        <p class="card-text text-success fw-bold fs-5">PRECIO: USD <?= number_format($auto['precio'], 3)    ?></p>
                        <a class="btn btn-success d-block py-3" href="index.php?sec=auto&id=<?= $auto['id']; ?>">Ver mas</a>

                </div>
            </div>


        </div>

    <?php   } ?>
    <?php } else { ?>
    <div class="col">
        <h2 class="text-center mb-5">No se encontraron Autos.</h2>
    </div>
<?php } ?>

</div>