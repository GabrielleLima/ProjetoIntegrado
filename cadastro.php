
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <title></title>    
    </head>
    <body>  
        Digite seus dados abaixo
        <form action="cadastro.php" method="POST">
            Nome: <input type="text" name="nome"><br><br>
            Email: <input type="email" name="email"><br><br>
            Senha: <input type="password" name="senha"><br><br>
            <input type="submit" name="cadastrar" value="Cadastrar">
                  
        </form>
    </body>
</html>
<?php
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
    
?>