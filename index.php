<?php
    require('config/config.php');
    $modo = 'view';
?>
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Agenda - Universo do Trance</title>
  </head>
  <body>
    <div class="contact-bar">
        <div class="container-contact">
            <div class="esquerda-contact-bar">
                <a href="mailto:contato@universodotrance.com.br" class="mail-link">contato@universodotrance.com.br</a>
            </div>
            <div class="direita-contact-bar">
                <ul>
                    <li><a href="https://www.instagram.com/universodotrance/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/universodotrance/"><i class="fab fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/universodtrance"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCBjiGQjoeyb9I7wVxelnm0g"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="https://open.spotify.com/user/gapobm86mobsx03aoxpji3zlw?si=ZZQuWPwRRSqGuA-n1uOO_A"><i class="fab fa-spotify"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=5531992878553"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container-header">
            <div class="esquerda">
                <img src="https://universodotrance.com.br/wp-content/uploads/2020/02/horizontal_logo-768x227.png" alt="Logo Universo do Trance" class="img-logo">
            </div>
            <div class="direita-header-menu">
                <ul class="direita-header-menu-ul">
                    <li><a href="#">GALERIA</a></li>
                    <li><a href="#">SOBRE</a></li>
                    <li><a href="#">CONTATO</a></li>
                    <li><a href="http://universodotrance.com.br/agenda/">AGENDA</a></li>
                    <li><a href="http://universodotrance.com.br/blog/">BLOG</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="breadc">
        <div class="bread-container">
            <p class="bread-content"><a href="https://www.universodotrance.com.br/">Home</a> / Agenda</p>
        </div>
    </div>
    <div class="evento-filtro">
        <form method="get" class="formulario">
            <div class="row linha-custom">
                <div class="col-md-4">
                    Cidade:
                    <input class="form-control" type="text" name="cidade" placeholder="Digite o nome da cidade..." maxlength="100">
                </div>
                <div class="col-md-3">
                    Tipo de evento:
                    <select  class="form-control" name="tipoEvento" id="tipoEvento">
                        <option value="todos" hidden default>Todos</option>
                        <option value="comercial">Comercial</option>
                        <option value="festival">Festival</option>
                        <option value="pvt">PTV</option>
                        <option value="rave">Rave</option>
                    </select>
                </div>
                <div class="col-md-1">
                    ‎‎‎‎‎‏‏‎ <br>
                    <button type="submit" class="btn btn-primary">Busca</button>
                    <input type="hidden" name="busca" value="busca">
                </div>
            </div>
        </form>
    </div>
    <div class="main-container container-fluid">
        <?php
                
            if(isset($_GET['busca'])){
                $modo = 'busca';
                
                if (!empty($_GET['busca']) && $_GET['busca'] == 'busca'){
                    $cidade = $_GET['cidade'];
                    $tipo = $_GET['tipoEvento'];

                    if(empty($cidade)){
                        switch ($tipo) {
                            case 'todos':
                                $sqlBusca = "SELECT * FROM eventos ORDER BY dataEvento DESC";
                                $qryBusca = mysqli_query($conecta, $sqlBusca);
                                echo "<div class='card-deck row-cols-md-2'>";
                                    while($linha = mysqli_fetch_array($qryBusca)) {
                                        $id = $linha['id'];
                                        $titulo = $linha['titulo'];
                                        $dataEvento = $linha['dataEvento'];
                                        $local = $linha['localEvento'];
                                        $bannerImg = $linha['bannerImg'];
                                        $descricao = $linha['descricao'];
                                        ?>
                                            <div class="card" style="width: 18rem;">
                                                <img src="evento_upload/<?php echo $bannerImg ?>" class="card-img-top" alt="<?php echo $titulo ?>">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $titulo ?></h5>
                                                    <p class="card-text"><?php echo mb_strimwidth($descricao, 0, 100, "..."); ?></p>
                                                    <a href="#" class="btn btn-primary">Ver evento</a>
                                                </div>
                                            </div>
                                        <?php
                                    }
                                echo "</div>";
                            break;
                            case 'festival';
                            case 'comercial';
                            case 'rave';
                            case 'pvt';
                                $sqlBusca = "SELECT * FROM eventos WHERE tipoEvento = '$tipo' ORDER BY dataEvento DESC";
                                $qryBusca = mysqli_query($conecta, $sqlBusca);
                                echo "<div class='card-deck'>";
                                    while($linha = mysqli_fetch_array($qryBusca)) {
                                        $id = $linha['id'];
                                        $titulo = $linha['titulo'];
                                        $dataEvento = $linha['dataEvento'];
                                        $local = $linha['localEvento'];
                                        $bannerImg = $linha['bannerImg'];
                                        $descricao = $linha['descricao'];
                                        ?>
                                                <div class="card" style="width: 18rem;">
                                                    <img src="evento_upload/<?php echo $bannerImg ?>" class="card-img-top" alt="<?php echo $titulo ?>">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $titulo ?></h5>
                                                        <p class="card-text"><?php echo mb_strimwidth($descricao, 0, 100, "..."); ?></p>
                                                        <a href="#" class="btn btn-primary">Ver evento</a>
                                                    </div>
                                                </div>
                                        <?php
                                    }
                                echo "</div>";
                            break;

                        }
                    } else {
                        switch ($tipo) {
                            case 'todos':
                                $sqlBusca = "SELECT * FROM eventos WHERE cidade = '$cidade' ORDER BY dataEvento DESC";
                                $qryBusca = mysqli_query($conecta, $sqlBusca);
                                echo "<div class='card-deck'>";
                                    while($linha = mysqli_fetch_array($qryBusca)) {
                                        $id = $linha['id'];
                                        $titulo = $linha['titulo'];
                                        $dataEvento = $linha['dataEvento'];
                                        $local = $linha['localEvento'];
                                        $bannerImg = $linha['bannerImg'];
                                        $descricao = $linha['descricao'];
                                        ?>
                                                <div class="card" style="width: 18rem;">
                                                    <img src="evento_upload/<?php echo $bannerImg ?>" class="card-img-top" alt="<?php echo $titulo ?>">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $titulo ?></h5>
                                                        <p class="card-text"><?php echo mb_strimwidth($descricao, 0, 100, "..."); ?></p>
                                                        <a href="#" class="btn btn-primary">Ver evento</a>
                                                    </div>
                                                </div>
                                        <?php
                                    }
                            echo "</div>";
                            break;

                            case 'festival';
                            case 'comercial';
                            case 'rave';
                            case 'pvt';
                                $sqlBusca = "SELECT * FROM eventos WHERE tipoEvento = '$tipo' and cidade LIKE '%'.'$cidade%'.'%' ORDER BY dataEvento DESC";
                                $qryBusca = mysqli_query($conecta, $sqlBusca);
                                echo "<div class='card-deck'>";
                                    while($linha = mysqli_fetch_array($qryBusca)) {
                                        $id = $linha['id'];
                                        $titulo = $linha['titulo'];
                                        $dataEvento = $linha['dataEvento'];
                                        $local = $linha['localEvento'];
                                        $bannerImg = $linha['bannerImg'];
                                        $descricao = $linha['descricao'];
                                        ?>
                                                <div class="card" style="width: 18rem;">
                                                    <img src="evento_upload/<?php echo $bannerImg ?>" class="card-img-top" alt="<?php echo $titulo ?>">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><?php echo $titulo ?></h5>
                                                        <p class="card-text"><?php echo mb_strimwidth($descricao, 0, 100, "..."); ?></p>
                                                        <a href="#" class="btn btn-primary">Ver evento</a>
                                                    </div>
                                                </div>
                                        <?php
                                    }
                                echo "</div>>";
                            break;

                        }
                    }
                } 
            }
    
            if($modo == 'view'){
                echo "mostrar eventos cadastrados recentemente";
            }
        ?>
    </div>
    <!-- Optional JavaScript -->
    <script type="text/javascript" src="js/script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>