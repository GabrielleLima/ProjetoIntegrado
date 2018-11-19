 <?php
 session_start();
include("conexao.php");

if(isset($_POST['entrar'])){
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($mysqli,"SELECT * FROM cadastro WHERE email='$email' AND senha='$senha'") or die(mysqli_error());
$row = mysqli_num_rows($sql);
        if($row>0){
        
        $_SESSION['email']=$_POST['email'];
        $_SESSION['senha']=$_POST['senha'];
        
       
        
       header('location:index.php');
        }else{
            echo"<script>window.alert('Email ou senha incorretos')</script>";
            echo"<script>loginFalha()</script>";
            
        }
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <script type="text/javascript">
            
            function loginFalha(){
                setTimeout("window.location='login1.php'",5000);
                
            }
            </script>
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
                    
                   font-size: 25pt;
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
                a#link{
                    text-align: right;
                    text-decoration: none;
                    color: black;
                }
            </style>
        <title>Login</title>    
    <body>  
        
        <div id="cabecalho">
            <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
       
        <hr widht=100 align="center" color="black">
       
        </div>
        <nav id="posicao">
            <p>Fazer login</p>
            
        <form action="login1.php" method="POST">
            <div class="campo">
                <input type="email" placeholder="Email" name="email" required autofocus >
            </div>
             <div class="campo">
                 <input type="password" placeholder="Senha" name="senha" required>
             </div><br>
            <input class="button" type="submit" name="entrar" value="Entrar">
                   
        </form>
            <br>
            <a href="cadastro.php" id="link">  Fazer cadastro</a>
        </nav>
    </body>
</html>


