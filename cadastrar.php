<?php
    require('config/config.php')
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/49f815cc3f.js" crossorigin="anonymous"></script>
    <title>Cadastre seu evento - Universo do Trance</title>
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
            <p class="bread-content"><a href="https://www.universodotrance.com.br/">Home</a> / <a href="#">Agenda </a> / Cadastre seu evento</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastre seu evento</h1>
            </div>
        </div>

        <form class="form" id="form-cadastro" method="POST" enctype="multipart/form-data" onkeydown="return event.key != 'Enter';">
            <div class="row">
                <div class="col">
                    Título do evento:
                    <input type="text" name="titulo" class="form-control" maxlength="150" minlength="2" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Data:
                    <input type="date" name="data" class="form-control" required>
                </div>

                <div class="col">
                    Local do evento:
                    <input type="text" name="local" class="form-control" required>
                </div>

                <div class="col">
                    Cidade:
                    <input type="text" name="cidade" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Email:
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="col">
                    Telefone:
                    <input type="text" name="telefone" class="form-control" minlength="8" maxlength="13" required>
                </div>
                <div class="col">
                    Link do Evento (para compra):
                    <input type="text" name="link" class="form-control">
                </div>
            </div>
            <div class="row input-spacer">
                <div class="input-group mb-3 col">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="bannerImg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" accept="image/png, image/jpg" required>
                      <label class="custom-file-label" for="inputGroupFile01">Selecione o banner do seu evento (1000x1000px)</label>
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="col">
                    Tipo de Evento:
                    <select name="tipoEvento" class="form-control">
                        <option default hidden>Selecione...</option>
                        <option value="rave">Rave</option>
                        <option value="pvt">PVT</option>
                        <option value="festival">Festival</option>
                        <option value="comercial">Comercial</option>
                    </select>
                </div>
            </div>
            <div class="row input-spacer">
                <div class="col">
                    Descrição:
                    <textarea name="descricao" cols="30" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h1 class="text-danger">Atenção</h1>
                    <ul>
                        <li>Todos os eventos cadastrados são de única e exclusiva responsabilidade de seus organizadores, isentando a Universo do Trance de quaisquer responsabilidades sobre os eventos.</li>
                        <li>Os eventos cadastrados nesta plataforma passam por uma moderação com o objetivo de verificar se todas as informações foram inseridas de modo a não gerar dúvidas aos usuários do site.
                        A Universo do Trance não está obrigada a informar aos divulgadores sobre o status da moderação do seu evento.
                        </li>
                        <li>Certifique-se de preencher as informações do evento e de contato corretamente, é por meio delas que o público entrará em contato com você. A Universo do Trance não se responsabiliza por informações incompletas.</li>
                    </ul>
         
                    <p>Apenas se você concorda com os termos aqui descritos, <b id="show-submit">clique em Aqui.</b></p>
                </div>
            </div>
            <div class="row" id="submit">
                <div class="col">
                    <button type="submit" class="btn btn-primary">Cadastrar Evento</button>
                    <input type="hidden" name="send" value="send">
                </div>
            </div> 
            <?php 

                if (isset ($_POST['send'])){

                    $getExtensao = strtolower(substr($_FILES['bannerImg']['name'], -4)); 
                    $nome = md5(time()) . $getExtensao; 
                    $diretorio = "evento_upload/"; 
                    move_uploaded_file($_FILES['bannerImg']['tmp_name'], $diretorio.$nome);

                    $titulo = $_POST['titulo'];
                    $data = $_POST['data'];
                    $local = $_POST['local'];
                    $cidade = $_POST['cidade'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];
                    $link = $_POST['link'];
                    $tipoEvento = $_POST['tipoEvento'];
                    $descricao = $_POST['descricao'];
                    $bannerImg = $nome;
                    $status = "revisar";
                    $ipDivulgador = $_SERVER['REMOTE_ADDR'];

                    $sqlEvento = "INSERT INTO eventos (titulo, dataEvento, localEvento, cidade, email, telefone, link, bannerImg, tipoEvento, descricao, statusEvento, ipDivulgador) VALUES ('$titulo', '$data', '$local', '$cidade','$email', '$telefone', '$link', '$bannerImg', '$tipoEvento', '$descricao', '$status', '$ipDivulgador');";

                    if($conecta->query($sqlEvento) === TRUE) {
                        // echo "dados cadastrados";
                        // echo "<meta http-equiv='Refresh' content== '0.01'; url=????? >"
                    } else {
                        echo "Erro: " .$sqlEvento. "<br>" .$conecta->error;
                    }
                    
                }
            ?>
        </form>
    </div>
    <footer>
        <div class="last-bar">
            <a href="https://www.thecodelovers.com.br/">< / > with ❤️ by The Code Lovers</a>
        </div>
    </footer>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>