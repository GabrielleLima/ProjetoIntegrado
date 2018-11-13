<?php
include("conexao.php");

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
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <title></title>    
    <body>  
        <div id="cabecalho">
            <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
       
        <hr widht=100 align="center" color="black">
       
        </div>
        
        <h1>Fazer login</h1>
        <form action="login.php" method="POST">
            Email:<input type="email" name="email"> <br><br>
            Senha:<input type="password" name="senha"><br><br>
            <input type="submit" name="entrar" value="Entrar">
                   
        </form>
        <a href="cadastro.php">  Fazer cadastro</a>
    </body>
</html>
