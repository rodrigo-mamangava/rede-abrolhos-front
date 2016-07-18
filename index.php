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



        <div id="home">

            <div id="home-vitrine">

                <?php include './template-parts/carrosel.php'; ?>
            </div><!-- #home-vitrine -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h1 class="home">A Rede Abrolhos</h1>
                        <p>
                            A Rede Abrolhos integra iniciativas inter-institucionais de pesquisa, capacitação, 
                            formação de recursos humanos e gestão ambiental produzindo e transmitindo 
                            conhecimento sobre o maior recife coralíneo do Atlântico Sul, o Banco do Abrolhos. 
                            São metas da Rede Abrolhos o entendimento dos processos relacionados a 
                            estruturação e a dinâmica dos recifes coralíneos frente a diferentes estressores locais, 
                            regionais e mundiais (pesca predatória, sedimentação, aquecimento global) e a 
                            conservação da biodiversidade. O conhecimento produzido pela Rede Abrolhos tem 
                            contribuído para efetivação de políticas públicas na gestão dos ecossistemas marinhos, 
                            na mitigação e na adaptação dos sistemas recifais às mudanças locais, regionais e 
                            climáticas globais.
                        </p>
                    </div>
                    <div class="col-xs-12 text-center">
                        <a class="btn-saiba-mais">saiba mais</a>

                    </div>
                </div>
            </div>
        </div><!-- #home-texto -->

        <footer>
            <div id="faxa-verde-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <h3>Siga</h3>
                            <a>
                                <p><img src="image/social/facebook.png"> Facebook</p>
                            </a>
                            <a>
                                <p><img src="image/social/youtube.png"> Youtube</p>
                            </a>
                            <a>
                                <p><img src="image/social/twitter.png"> Twitter</p>
                            </a>
                        </div>

                        <div class="col-sm-2">
                            <h3>Rede</h3>
                            <a>
                                <p>Quem somos</p>
                            </a>
                            <a>
                                <p>Equipe</p>
                            </a>
                            <a>
                                <p>Expedições</p>
                            </a>
                            <a>
                                <p>Projetos</p>
                            </a>
                            <a>
                                <p>Financiamentos e pacerias</p>
                            </a>
                        </div>

                        <div class="col-sm-2">
                            <h3>Publicações</h3>
                            <a>
                                <p>Artigos</p>
                            </a>
                            <a>
                                <p>Divulgação na mídia</p>
                            </a>    
                        </div>

                        <div class="col-sm-2">
                            <h3>Eixo temático</h3>
                            <a>
                                <p>Notícias</p>
                            </a>
                            <a>
                                <p>Galeria</p>
                            </a>    
                            <a>
                                <p>Contato</p>
                            </a>    
                        </div>

                    </div>

                </div>
            </div>
        </footer>

    </body>
</html>
