<?php
include_once 'conexao.php';

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
}
;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
;
if (isset($_POST['assunto'])) {
    $assunto = $_POST['assunto'];
}
;
if (isset($_POST['mensagem'])) {
    $mensagem = $_POST['mensagem'];
}
;

$msg_contatos = "insert into contatos(nome, email, assunto, mensagem) values('$nome', '$email', '$assunto', '$mensagem')";
$contatos_result = mysqli_query($conn, $msg_contatos);

if ($contatos_result) {
    header("Location: /web-page-finaceira/view/index.php");
    exit();
} else {
    // header("Location : PaymentGateway.php");
    exit();
}
