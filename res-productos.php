<?php 
 require 'assets/includes/postgresql.php';

 if (isset($_POST)) {

  $search=$_POST['buscar'];
  $sql="SELECT * FROM art where co_art like '%$search%'";
  
  
}else {
  
  $sql = "SELECT * FROM art ";
  

  
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Fiscales</title>
	
</head><!--/head-->

<body id="home" class="homepage">


    <?php require 'assets/includes/header.php'; ?>



    
   



    <!-- CINTA INFORMATIVA -->

    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">Nuestros <span>Productos</span></h2>
                <!-- <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Somos empresa líder con más de 15 años de experiencia dedicada <br />a la distribución de soluciones electronicas para su negocio.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Contactanos</a></p> -->
            </div>
        </div>
    </section>

  <!-- PORTAFOLIO -->

  <section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Portafolio / Shop</h2>
            
             <form action="res-productos.php" method="post">
             <h3 class="text-center wow fadeInDown">Buscar: <input type="search" class="text-center wow fadeInDown"  name="buscar" id=""></h3>
             </form> 
            
       </div>



        <div class="text-center">

            <ul class="portfolio-filter">
            <li><a class="active" href="#" data-filter="*">Productos</a></li>

        <?php
        
        $consulta_linea = pg_query($conn,$sql);

        while ($res=pg_fetch_array($consulta_linea)) {

                $linea=$res['linea_des'];
                if ($linea=='Punto de Venta') {
                    $linea_data='punto';
                    echo "<li><a href='#' data-filter='.$linea_data'>$linea</a></li>";

                }else {
                    
                    echo "<li><a href='#' data-filter='.$linea'>$linea</a></li>";
                }
            
       
            
                
                

            

                }  ?>
            </ul><!--/#portfolio-filter-->
  
        </div>

<!-- portafolio -->
        <div class='portfolio-items'>

        <?php

       
        
    $consulta = pg_query($conn,$sql);

        while ($res=pg_fetch_array($consulta)) {

                $id=$res['id'];
                $co_art=$res['co_art'];
                    $articulo=ucwords($co_art);
                $linea_des=$res['linea_des'];
                $ref_art=$res['ref_art'];
                $art_des=$res['art_des'];
                $img1=$res['img1'];

                if ($linea_des=='Punto de Venta') {
                    $linea_des='punto';
                }

            ?>
       

            <div class="portfolio-item <?=$linea_des?>">
                <div class="portfolio-item-inner">
                    <img class="img-responsive" src="log/uploads/img/<?=$img1?>" alt="">
                    <div class="portfolio-info">
                        <h3><?=$articulo?></h3>
                        
                        <a style="font-size: 35px ;" href='descrip.php?id=<?php echo $id?>'> <i class="fa fa-eye"></i>  </a>
                        <a class="preview" href="log/uploads/img/<?=$img1?>" rel="prettyPhoto">
                            <img src="assets/images/portfolio/expand.png" alt="">
                        </a>
                    </div>
                </div>
            </div><!--/.portfolio-item-->


            <?php     }  ?>

        </div>
    </div><!--/.container-->
</section><!--/#portfolio-->
  
    <?php
    
    require 'assets/includes/footer.php'; 
     ?>
</body>
</html>




















