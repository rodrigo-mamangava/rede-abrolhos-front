<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Rede Abrolhos</title>

        <script src="https://use.fontawesome.com/8879a685b4.js"></script>
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



        <div id="expedicoes">

            <div class="container-fluid">

                <div class="row">

                    <div class="faixa">
                        <img src="image/expedicoes/home-01.jpg" class="img-responsive">
                    </div>
                </div>

            </div>

            <div class="container">




                <div class="row">
                    <div class="col-xs-12">

                        <h1>Expedições</h1>

                        <hr/>

                        <p>
                            As atividades fundamentais das expedições da Rede 
                            Abrolhos estão relacionadas ao mapeamento de fundo, 
                            a obtenção de amostras geológicas, a aquisição de 
                            séries temporais longas de dados, a realização de 
                            experimentos manipulativos, a realização de 
                            amostragens para a caracterização da biodiversidade. 
                            O trabalho de campo extensivo contribui também para 
                            a capacitação de recursos humanos de alto nível, 
                            proporcionando aos estudantes um ambiente único de 
                            aprendizado prático. A Rede Abrolhos opera uma série 
                            de equipamentos oceanográficos, sonares, sondas, 
                            sensores, equipamentos de mergulho técnico, e 
                            veículos submersíveis de operação remota (ROV).
                        </p>

                        <h2>As páginas a seguir ilustram algumas das nossas operações de campo:</h2>

                        <div class="expedicoes-lista">

                            <div class="expedicoes-item">
                                <div class="row">
                                    <div class="col-xs-2 col-sm-1">
                                        <h3>
                                            2016
                                        </h3>

                                    </div>
                                    <div class="col-xs-10 col-sm-11">
                                        <ul>
                                            <li><a href="expedicao-single.php">Maio</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .expedicoes-item -->
                            <div class="expedicoes-item">
                                <div class="row">
                                    <div class="col-xs-2 col-sm-1">
                                        <h3>
                                            2015
                                        </h3>

                                    </div>
                                    <div class="col-xs-10 col-sm-11">
                                        <ul>
                                            <li><a href="#">Fevereiro</a></li>
                                            <li><a href="#">Maio</a></li>
                                            <li><a href="#">Novembro</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .expedicoes-item -->
                            <div class="expedicoes-item">
                                <div class="row">
                                    <div class="col-xs-2 col-sm-1">
                                        <h3>
                                            2014
                                        </h3>

                                    </div>
                                    <div class="col-xs-10 col-sm-11">
                                        <ul>
                                            <li><a href="#">Fevereiro</a></li>
                                            <li><a href="#">Maio</a></li>
                                            <li><a href="#">Novembro</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .expedicoes-item -->




                        </div>



                    </div> <!-- .expedicoes-lista -->
                </div>
            </div>
        </div><!-- #expedicoes -->

        <footer>
            <?php include './template-parts/faixa-verde-bottom.php'; ?>            
            <?php include './template-parts/faixa-branca-bottom.php'; ?>            
            <?php include './template-parts/faixa-verde-bottom-2.php'; ?>
        </footer>

    </body>
</html>
