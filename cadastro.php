
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <title></title>    
    </head>
    <body>  
        Digite seus dados abaixo
        <form action="cadastro.php" method="POST">
            Nome: <input type="text" name="nome" required autofocus><br><br>
            Email: <input type="email" name="email" required><br><br>
            Senha: <input type="password" name="senha" required><br><br>
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
            
            header("location:login1.php");
            
        }else{
            
            header("location:cadastro.php");
            
        }
        }
}
    
?>