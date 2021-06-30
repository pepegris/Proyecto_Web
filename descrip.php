<?php
require 'assets/includes/postgresql.php';


$mensaje_error1='';
$mensaje_error2='';
 $art_des=''; 
 $co_art=''; 
 $ref_art=''; 
 $stock=''; 

if  (isset($_GET['id'])) {
  $id = $_GET['id'];
  
  //calculando la tasa
    $tasa="SELECT tasa_dia FROM configuracion where ref=0";
    $runT=pg_query($conn,$tasa);
    $rowT=pg_fetch_assoc($runT);
    $dolar=$rowT['tasa_dia'];   
  
  $query = "SELECT * FROM art WHERE id=$id";
  $result = pg_query($conn, $query);
  if (pg_num_rows($result) == 1) {
    $row = pg_fetch_array($result);
    $art_des=$row['art_des']; 
    $co_art=$row['co_art']; 
                $articulo=ucwords($co_art);
    $ref_art=$row['ref_art'];
                $total=$ref_art*$dolar;
                $bolivares=number_format($total, 2, ',', '.');
    $linea_des=$row['linea_des']; 
    $stock=$row['stock']; 
    $img1=$row['img1'];
    
  }
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
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">Descripción del <span>Producto</span></h2>
                <!-- <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Somos empresa líder con más de 15 años de experiencia dedicada <br />a la distribución de soluciones electronicas para su negocio.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Contactanos</a></p> -->
            </div>
        </div>
    </section>
    
   

    <!-- DESCRIPCION DEL ARTICULO -->
<section id="features">
<div class="container">
    <!-- BUSCADOR -->
        <!-- <div class="section-header">
            
             <form action="res-productos.php" method="post">
             <h3 class="text-center wow fadeInDown">Buscar: <input type="search" class="text-center wow fadeInDown"  name="buscar" id=""></h3>
             </form> 
            
       </div> -->
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown"><?=$articulo?></h2>
            <p class="text-center wow fadeInDown"><?=$art_des?></p>
        </div>
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <img class="img-responsive" src="log/uploads/img/<?=$img1?>" alt="">
            </div>
            <div class="col-sm-6">
            <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading"><?=$linea_des?></h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>


                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-line-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Seguro</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>

                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-cubes"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Las Mejores Ofertas</h4>
                        <p>Bs.<?=$bolivares?> - <?=$ref_art?>$</p>
                    </div>
                </div>

                <div class="media service-box wow fadeInRight">
                    <div class="pull-left">
                        <i class="fa fa-pie-chart"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">La Mejor Calidad</h4>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
</section>
<!-- SOBRE NOSOTROS -->




<!-- PORTAFOLIO -->

<section id="portfolio">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Recomendaciones</h2>
            
             
            
       </div>



    


<!-- portafolio -->
        <div class='portfolio-items'>

        <?php
        
        $sql_art = "SELECT * FROM art where linea_des='$linea_des' AND id != $id ORDER BY fecha DESC LIMIT 3 ";
        $consulta_art = pg_query($conn,$sql_art);

        while ($res=pg_fetch_array($consulta_art)) {

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