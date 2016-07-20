<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Rede Abrolhos</title>

        <!-- Bootstrap -->
        <link href="css/main.css" rel="stylesheet">


        <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
        <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>

        <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
        <script src="js/bootstrap-image-gallery.min.js"></script>
        <script src="js/blueimp-extra.js"></script>


    </head>
    <body>
        <header>
            <?php include './template-parts/faixa-verde-top.php'; ?>
            <?php include './template-parts/nav-bar.php'; ?>
        </header>



        <div id="galeria">

            <div class="container">
                <div class="row"> 
                    <div class="col-xs-12">
                        <h1>Galeria de imagens</h1>
                    </div>                    
                </div>


                <div class="row">
                    <div  id="links" class="galeria-fotos">
                        <div class="col-sm-6 col-md-3">
                            <a href="image/galeria/galeria 01 full.jpg" title="Foto 01" data-description="This is a banana." data-gallery>
                                <img src="image/galeria/galeria 01 thumb.jpg" alt="Foto 01">
                            </a>                        
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <a href="image/galeria/galeria 02 full.jpg" title="Foto 02" data-description="This is a banana." data-gallery>
                                <img src="image/galeria/galeria 02 thumb.jpg" alt="Foto 02">
                            </a>                     
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 03 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 04 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 05 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 06 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 07 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 08 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 01 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 02 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 03 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 04 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 05 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 06 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 07 thumb.jpg">                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <img class="img-responsive" src="image/galeria/galeria 08 thumb.jpg">                            
                        </div>

                    </div>

                </div>

            </div>
        </div><!-- #contato -->

        <footer>
            <?php include './template-parts/faixa-verde-bottom.php'; ?>            
            <?php include './template-parts/faixa-branca-bottom.php'; ?>            
            <?php include './template-parts/faixa-verde-bottom-2.php'; ?>
        </footer>



        <?php include './template-parts/blueimp-gallery.php'; ?>

    </body>
</html>
