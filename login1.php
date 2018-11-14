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
        
       /* echo"<script>loginSucesso()</script>";*/
        
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
        <title>Login</title>    
    <body>  
        
        <div id="cabecalho">
            <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
       
        <hr widht=100 align="center" color="black">
       
        </div>
        
        <h1>Fazer login</h1>
        <form action="login1.php" method="POST">
            Email:<input type="email" name="email" > <br><br>
            Senha:<input type="password" name="senha"><br><br>
            <input type="submit" name="entrar" value="Entrar">
                   
        </form>
        <a href="cadastro.php">  Fazer cadastro</a>
    </body>
</html>


