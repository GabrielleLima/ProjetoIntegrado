<?php
include("conexao.php");

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $inserir = "insert into cadastro(nome,email,senha) values ('$nome','$email','$senha')";
        $enviar = mysqli_query($mysqli, $inserir);
    
   

    
/*
session_start();
include("conexao.php");
if(isset($_POST['cadastrar'])){
    
    if(!empty($_POST['nome']) ||  !empty($_POST['email']) || !empty($_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
    $inserir="INSERT INTO cadastro(nome,email,senha) VALUES ('$nome','$email','$senha')";
    $enviar= mysqli_query($mysqli, $inserir);
        if($enviar){
            $_SESSION['mensagem']="Cadastrado com sucesso";
            header("location:index.php");
            exit;
        }else{
            $_SESSION['mensagem']="ERRO AO CADASTRAR";
            header("location:cadastro.php");
            exit;
        }
    }else{
        $_SESSION['mensagem']="Algum campo em branco";
        header("location:cadastro.php");
        exit;
    }
}
*/
        
        
        
        
        
        /*
if(isset($_POST['email'])&& strlen($_POST['email'])>0){
    if(!isset($_SESSION))
        session_start ();
    $sql_code = "SELECT email,senha from cadastro where email ='$_POST[email]' ";
    $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();
    $total = $sql_query->num_rows;
    
    if($total == 0){
        $erro[] = "Este email nao pertence a nenum usuario";
    }else{
        if($dado['senha']==$_POST['senha']){
            $_SESSION['']
        }
    }
}
?>*/
        
        
       