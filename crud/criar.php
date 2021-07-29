<?php
session_start();
include_once 'conexao.php'; 
//conexao.php somente faz a conexão com banco de dados, define as credenciais e atrubi a variável $conn
//$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);
 
//$btn = filter_input(INPUT_POST, 'pedido', FILTER_SANITIZE_STRING);
 
if(isset($_POST['pedido'])){
    //Recebe os dados do form
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
    $localizacao = filter_input(INPUT_POST, 'localizacao', FILTER_SANITIZE_STRING);

 
    //Insere os dados no banco
    $inserir = "INSERT INTO pedidos (nome, email, quantidade, descricao, localizacao) VALUES (:nome, :email, :quantidade, :descricao, :localizacao)";
 
    $insert_data = $conn->prepare($inserir);
    $insert_data->bindParam(':nome', $nome);
    $insert_data->bindParam(':email', $email);
    $insert_data->bindParam(':quantidade', $quantidade);
    $insert_data->bindParam(':descricao', $descricao);
    $insert_data->bindParam(':localizacao', $localizacao);
    if($insert_data->execute()){
        $_SESSION['msg'] = "<p style='color:tomato;'>Enviado com sucesso</p>";
        header("Location:../controlo.php"); 
    }else{
        $_SESSION['msg'] = "<p style='color:tomato;background:#fff;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
        header("Location:../erro.php"); //Se não apresenta o erro
    }
}else{
    $_SESSION['msg'] = "<p style='color:tomato;'>Não foi possível enviar suas informações, verifique e tente novamente.</p>";
    header("Location:../controlo.php"); 
}