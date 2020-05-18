<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consignado</title>
    <link rel="icon" type="imagem/png" href="../images/favicon.png" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
<!--  -->
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
            <form id="form1" class="col s12" action="../model/salvar_proposta.php/" method="post" name="proposta">
                <div class="row center">
                    <div class="">
                        <input name="credito" value="consignado" type="radio" id="option-one" checked>
                        <label class="credito" for="option-one">
                            <h6>Crédito consignado</h6>
                        </label>
                        <input name="credito" value="pessoal" type="radio" id="option-two">
                        <label class="credito" for="option-two">
                            <h6>Crédito pessoal</h6>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nome" id="first_name" type="text" class="validate">
                        <label for="first_name">Nome</label>                        
                    </div>
                    <div class="input-field col s12">
                        <input name="sobrenome" id="last_name" type="text" class="validate">
                        <label for="last_name">Sobrenome</label>                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="email" id="email" type="email" class="validate">
                        <label for="email">Email</label>                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="telefone" id="telefone" type="tel" class="validate">
                        <label for="telefone">Telefone</label>                        
                    </div>
                    <p>
                        <label>
                            <input name="whatsapp" type="checkbox" value="sim"/>
                            <span>Whatsapp?</span>
                        </label>
                    </p>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="valor" id="value" type="number" class="validate">
                        <label for="value">Valor desejado</label>                        
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="cpf" id="cpf" type="number" class="validate">
                        <label for="cpf">CPF</label>                        
                    </div>
                </div>
                <div class="row col l3">
                    <div>
                        <label name="perfil" class="col l5 s12">
                            <input name="perfil" type="radio" value="aposentado" checked />
                            <span>Aposentado ou Pensionista INSS</span>
                        </label>

                        <label class="col l3 s12">
                            <input name="perfil" value="servidor" type="radio" />
                            <span>Servidor Público</span>
                        </label>


                        <label class="col l4 s12">
                            <input name="perfil" value="autonomo" type="radio" />
                            <span>Assalariado ou Autônomo</span>
                        </label>
                    </div>
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
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer
                        content.</p>
                </div>
                <div class="center col l3 offset-l1 s5">
                    <h5 class="white-text">Unidade</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!"><i
                                    class="tiny material-icons">home</i>xxxxxxxxxxx</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i class="tiny material-icons">call</i>(31)
                                999999999</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!"><i
                                    class="tiny material-icons">email</i>email@gmail.com</a></li>
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
    <!--JavaScript at end of body for optimized loading-->

    <script src="../js/materialize.min.js"></script>    
    <script src="../js/initialization-effect.js"></script>
    <script src="../js/clean-input.js"></script>
</body>

</html>
