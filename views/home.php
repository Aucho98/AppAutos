<?php
require_once "libraries/funciones.php";
$autos = catalogo_completo();


?>

<!-- Carrousel -->


<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/home/1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/home/3.webp" class="d-block w-100" alt="...">
    </div>
   
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container mt-5">
      <h2 class="text-center">Algunas de nuestras marcas mas importantes</h2>

    <div class="row d-flex justify-content-center gap-3">

    <a class="card p-2" href="index.php?sec=autos&ser=chevrolet" style="width: 18rem; height:230px;" >
       <img src="img/marcas/chevrolet.jpg" class="card-img-top" alt="...">
    </a>
     
    <a class="card p-2" href="index.php?sec=autos&ser=fiat" style="width: 18rem; height:230px;">
        <img src="img/marcas/fiat.jpg" class="card-img-top" alt="...">

    </a>

      <a class="card p-2" href="index.php?sec=autos&ser=volkswagen"  style="width: 18rem; height:230px;">
          <img src="img/marcas/volkswagen.jpg" class="card-img-top" alt="...">
            
   

      </a>
    </div>
      

</div>



<div class="container mt-5">
        <h1 class="text-center">Todos los autos en un solo lugar</h1>


       

<div class="row mt-5">

<?php foreach ($autos as $auto) { ?>

  <div class="col-3 mb-3">

            <div class="card">
                <img style="height: 200px;" src="img/<?=  $auto['imagen']  ?>" class="card-img-top" alt="...">
                <div class="card-body">
                        <h5 class="card-title"><?=  $auto['marca']  ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?=  $auto['modelo']  ?></h6>
                        <p class="card-text text-success fw-bold">PRECIO: USD <?= number_format($auto['precio'], 3)    ?></p>
                        <a class="btn btn-success d-block py-3" href="index.php?sec=auto&id=<?= $auto['id']; ?>">Ver mas</a>


                </div>
            </div>


        </div>

    <?php   } ?>

 
</div>


</div>