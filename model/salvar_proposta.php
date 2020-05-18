<?php
include_once 'conexao.php';

if (isset($_POST['credito'])) {
    $credito = $_POST['credito'];
    echo (gettype($credito)."<br>");
}
;

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    echo (gettype($nome )."<br>");
}
;
if (isset($_POST['sobrenome'])) {
    $sobrenome = $_POST['sobrenome'];
    echo (gettype($sobrenome)."<br>");
}
;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo (gettype($email)."<br>");
}
;
if (isset($_POST['telefone'])) {
    $telefone = $_POST['telefone'];
    echo (gettype($telefone)."<br>");
}
;
if (isset($_POST['whatsapp'])) {
    $whatsapp = $_POST['whatsapp'];
    echo (gettype($whatsapp)."<br>");
}
;
if (isset($_POST['valor'])) {
    $valor = $_POST['valor'];
    echo (gettype($valor)."<br>");
}
;
if (isset($_POST['cpf'])) {
    $cpf = $_POST['cpf'];
    echo (gettype($cpf)."<br>");
}
;
if (isset($_POST['perfil'])) {
    $perfil = $_POST['perfil'];
    echo (gettype($perfil)."<br>");
}
;

$msg_propostas = "insert into proposta(credito, nome, sobrenome, email, telefone, whatsapp, valor, cpf, perfil) values('$credito', '$nome', '$sobrenome', '$email', '$telefone', '$whatsapp', '$valor', '$cpf', '$perfil')";

$propostas_result = mysqli_query($conn, $msg_propostas);

if ($propostas_result) {
    header("Location: /web-page-finaceira/view/index.php");
    exit();
} else {
    // header("Location : PaymentGateway.php");    
    echo"erro ao salvar";
    exit();
}