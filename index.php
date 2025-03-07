<!doctype html>
<html lang="en">

<head>
    <title>GRIDDER</title>
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php require_once './dependecias.php'?>
    <?php require_once './contenido.php'; $datos=contenido();?>
    
</head>

<body class="fondo">
    <div class="container-fluid text-white mt-4">
        <h1>Catalogo de carros <span class="fa-solid fa-car"></span></h1>
        <h2 class="text-center">"La transtienda"</h2>
        <ul class="gridder">
            <?php
                for ($i=0; $i<count($datos) ; $i++):
                    $d=explode("||", $datos[$i]);

            ?>
            <li class="gridder-list" data-griddercontent="<?php echo '#gridder-content-'.$i ?>">
                <img src="<?php echo $d[0]; ?>" class="img-responsive" width="100px" height="200px">
            </li>
            <?php
                endfor;
            ?>
        </ul>
        <?php
            for ($i=0; $i < count($datos); $i++):
                $d=explode("||", $datos[$i]);
            
        ?>
            <div id="<?php echo 'gridder-content-'.$i; ?>" class="gridder-content"> 
                <div class="row">
                    <div class="col-sm-6">
                        <img src="<?php echo $d[0]; ?>" class="img-responsive">
                    </div>
                    <div class="col-sm-6">
                        <h2><?php echo $d[1]; ?></h2>
                        <p><?php echo $d[2]; ?></p>
                    </div>
                </div>
            </div>
        <?php
            endfor;
        ?>
        <div class="card fondo">
            <div class="card-body fondo">
                <div class="d-flex justify-content-between">
                    <div class="col-sm-6"><p><span class="fa-solid fa-phone"></span> Contacto: 5567534525</p></div>
                    <div class="col-sm-6"><p><span class="fa-solid fa-at"></span> email: latranstienda@gmail.com</p></div>
                </div>
            </div>
        </div>
        
    </div>
        
    
    
</body>

</html>

<script type="text/javascript">
	$(document).ready(function(){
		$(".gridder").gridderExpander({
			scroll: true,
			scrollOffset: 60,
                    scrollTo: "listitem", // panel or listitem
                    animationSpeed: 100,
                    animationEasing: "easeInOutExpo",
                    showNav: true,
                    nextText: "<i class=\"fa fa-arrow-right\"></i>",
                    prevText: "<i class=\"fa fa-arrow-left\"></i>",
                    closeText: "<i class=\"fa fa-times\"></i>",
                    onStart: function () {
                        console.log("Gridder Inititialized");
                    },
                    onContent: function () {
                        console.log("Gridder Content Loaded");
                        $(".carousel").carousel();
                    },
                    onClosed: function () {
                        console.log("Gridder Closed");
                    }
                });
	});
</script>