<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Fale conosco</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formatacao.css"> 
        <style type="text/css">
            div#contato {
                position: relative;
               font-size: 15px;
                width: 600px;
                top: 0px;
                left: 500px;
          
            }
            div#titulo{
                 margin-left: -8px;
  margin-right: -8px;
                background-color: rgba(255,255,255,0.8);
            }
             div#final{
                background: black;
                position: relative;
                bottom: -10px;
                left: 0px;
                height: 100px;
              
             padding: 1px;
              margin-left: -8px;
  margin-right: -8px;
            }
            p#rodape{
                color: white;
                text-align: center;
            }
            iframe{
                position: relative;
                left: 300px;
            }
            #botao{
                position: absolute;
                top: 30px;
                right: 10px;
                width: 90px;
                background: none;
                border: 2px solid rgba(0,0,0,0.8) ;
                font-size: 10pt;
                cursor: pointer;
            }
            </style>
    </head>
    <body>
         <div id="cabecalho">
             <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
        
        <nav id="menu">
            <ul>
                <li><a href="index.php">Início</a> </li>
                <li><a href="sobre.php">Sobre nós</a> </li>                
                <li><a href="programacoes.php">Programações</a> </li>
                <li><a href="contato.php">Fale conosco</a></li>
            </ul>
            
        </nav> 
        <a  href="logout.php"><input id="botao" type="button"name="login" value="Sair"></a>
        <hr width="100%" align="center" color="black">
       
        </div>
        <div id="titulo">
            Fale conosco
        </div>
        <div id="contato">
       
        
        <ul>
            <li>Telefone: (61) 3637-1188</li> <br>
            <li>Email: pib.plango@hotmail.com</li> <br>
            <li>Endereço: Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás</li><br>
            
            <li>Localizaçao:<br><br> </div>
        <iframe 
            width="800" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBXVWvCKdFJgzX10v1qYRBw_8QrzT64G1w&q=PrimeiraIgrejaBatistaPlanaltina+GO" allowfullscreen></iframe></li>
        </ul>
       <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body> 
</html>
