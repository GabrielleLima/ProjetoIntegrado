

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

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <title>Cadastro</title>    
        <style>
                nav#posicao{
                    
                    width: 280px;
                    height: 300px;
                    padding: 10px;
                    position: relative;
                    top: 50px;
                    left: 550px;
                    text-align: center;
    
                }
                p{
                    
                   font-size: 20pt;
                   text-shadow: 3px 3px 10px gray;  
                }
                .campo{
                  
                   border-bottom: 3px solid rgba(0,0,0,0.8);
                   padding: 3px ;
                   margin: 3px;
                   border-width: 50%;
                }
                .campo input{
                    color: black;
                    background: none;
                    outline: none;
                    border: none;
                    font-size: 15pt;
                }
                .button{
                    width: 100%;
                    background: none;
                    border: 2px solid rgba(0,0,0,0.8) ;
                    font-size: 15pt;
                    cursor: pointer;
                }
                                
            </style>
    </head>
    <body>  
         <div id="cabecalho">
            <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
       
        <hr widht=100 align="center" color="black">
       
        </div>
        <nav id="posicao">
            <p>Digite seus dados abaixo</p>
            
            <form action="cadastro.php" method="POST">
                <div class="campo">
                    <input type="text" placeholder="Nome" name="nome" required autofocus >
            </div>
            <div class="campo">
                <input type="email" placeholder="Email" name="email" required autofocus >
            </div>
             <div class="campo">
                 <input type="password" placeholder="Senha" name="senha" required>
             </div><br>
             <input class="button" type="submit" name="cadastrar" value="Cadastrar">
                   
        </form>
                    
        </nav>
    </body>
</html>