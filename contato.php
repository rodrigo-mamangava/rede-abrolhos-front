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
    </head>
    <body>
        <header>
            <?php include './template-parts/faixa-verde-top.php'; ?>
            <?php include './template-parts/nav-bar.php'; ?>
        </header>



        <div id="contato">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">

                        <section>

                            <h1>Entre em contato conosco</h1>

                            <h2>Rede Abrolhos</h2>

                            <p>Instituto de Pesquisas Jardim Botânico do Rio de Janeiro</p>
                            <p>Rua Pacheco Leão 915 – CEP 22460-030 – Rio de Janeiro – RJ</p>
                            <br/>
                            <p>Tel: +55 (21) 3204 2150</p>
                            <br/>
                            <p>redeabrolhos@gmail.com</p>

                        </section>
                        <section>
                            <h1>Siga-nos nas redes sociais</h1>
                            
                            <ul class="social">
                                <li>
                                    <a><img src="image/social/face-verde.png" >Facebook</a>
                                </li>
                                <li>
                                    <a><img src="image/social/you-verde.png">Youtube</a>
                                </li>
                                <li>
                                    <a><img src="image/social/twitter-verde.png">Twitter</a>
                                </li>
                            </ul>
                            
                        </section>

                    </div>
                </div>
            </div>
        </div><!-- #contato -->

        <footer>
            <?php include './template-parts/faixa-verde-bottom.php'; ?>            
            <?php include './template-parts/faixa-branca-bottom.php'; ?>            
            <?php include './template-parts/faixa-verde-bottom-2.php'; ?>
        </footer>

    </body>
</html>
