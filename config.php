<?php
/*
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = "joaopaulocoimbra2013@gmail.com";
    $assunto = "Contato Site Portifólio";

    $corpo = "Nome: ". $nome."\n"."Telefone: ".$telefone."\n"."Email: ".$email."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: joaopaulocoimbra201304@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($para, $assunto, $corpo, $cabeca)){
        echo("Contato recebido. Em breve entrarei em contato!");
    }else{
        echo("Houve um erro ao enviar os seus dados.");
    }








if (isset($_POST['enviar'])){
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
}

$host = "localhost";
$user = "root";
$senha_user = "Joao@123456";
$banco = "formulario";

$con = mysqli_connect($host, $user, $senha_user, $banco);

if(!$con){
    die("Conexão Falhou." .mysqli_connect_error());
}

$sql = "INSERT INTO Clientes(Nome, Telefone, Email, Mensagem) VALUES ('$nome', '$telefone', '$email', '$mensagem')";

$rs = mysqli_query($con, $sql);

if($rs){
    echo "Contato recebido. Em breve entrarei em contato!";
}

