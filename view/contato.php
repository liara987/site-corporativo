<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Contato</title>
    <link rel="stylesheet" href="../css/style.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="icon" type="imagem/png" href="../images/favicon.png" />
    <script src="../js/jquery-3.4.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <main>
        <!-- navbar -->
        <nav>
            <div class="nav-wrapper blue darken-1">
                <a href="index.php" class="brand-logo"><img class="circle" width="50" src="../images/money.jpg"></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="quem-somos.php">Quem somos</a></li>
                    <li><a href="proposta.php">Simular</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
                <!-- sidenav -->
                <ul id="slide-out" class="sidenav">
                    <li>
                        <div class="user-view">
                            <div class="background">
                                <img class="materialboxed" width="400" src="../images/tracking.jpg">
                            </div>
                            <a href="index.php"><img class="circle" src="../images/money.jpg"></a>
                        </div>
                    </li>
                    <li><a href="quem-somos.php">Quem somos</a></li>
                    <li><a href="proposta.php">Simular</a></li>
                    <li><a href="contato.php">Contato</a></li>
                    <li><a id="bottomDiv" class="sidenav-close white-text red lighten-1">Fechar</a>
                    </li>
                </ul>
                <div id="shmenulinks" class="nav nav-pills collapse">
                    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                </div>
            </div>
        </nav>

        <!-- container -->
        <div class="container">
            <!-- form -->
            <form id="form1" class="col s12" action="../model/salvar_contato.php/" method="post" name="contato">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nome" id="nome" type="text" class="validate">
                        <label for="nome">Nome</label>                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="text" class="validate">
                        <label for="email">Email</label>                        
                    </div>
                </div>
                <div class="input-field col s12">
                    <input name="assunto" id="assunto" type="text" class="validate">
                    <label for="assunto">Assunto</label>                    
                </div>
                <div class="input-field col s12">
                    <textarea name="mensagem" rows="10" id="mensagem" class="materialize-textarea" class="materialize-textarea"
                        style="height: 200px;"></textarea>
                    <label for="textarea1">Mensagem</label>                    
                </div>
                <p id="form-massage"></p>
        </div>

        <div class="row center">
            <input  type="submit" class="btn" value="enviar">
        </div>
        </form>
        </div>
    </main>
    <!-- footer -->
    <footer class="page-footer blue darken-1">
        <div class="container">
            <div class="row">
                <div class="col l4 s4">
                    <h5 class="white-text">Footer Content</h5>
                    <h6 class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="center col l3 offset-l1 s5">
                    <h5 class="white-text">Unidade</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">home</i>xxxxxxxxxxx</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">call</i>(31) 999999999</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">email</i>email@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col l3 offset-l1 s3">
                    <h5 class="white-text">Redes sociais</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center">
                © 2020 Todos os direitos reservados
            </div>
        </div>
    </footer>
    </div>

    <script src="../js/materialize.min.js"></script>
    <script src="../js/initialization-effect.js"></script>    
    <script src="../js/clean-input.js"></script>
</body>
</html>