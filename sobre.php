<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <style  type="text/css">
            div#sobre{
               position: relative;
               top: 0px;
               left: 300px;
               width: 900px;
            
            }
            div#sobre img{
                position: relative;
                left: 100px;
                width: 700px;
                height: 200px;
               
            }
            div#escolha{
                background: white;
                background-color: rgba(0,0,0,0.4);
                position: relative;
                height: 130px;
                border-radius: 10px;
            }
            div#escolha:hover{
                background-color: rgba(0,0,0,0.6);}
            
            a#textoEscolha {
                text-decoration: none;
               color: white;
               font-size: 40pt;
               text-align: center;
               
               
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
              margin-left: -8px;
  margin-right: -8px; 
             padding: 1px;
            }
            p#rodape{
                color: white;
                text-align: center;
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
        <title>Sobre nós</title>
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
            Sobre nós
        </div><br><br>
        
        <a id="textoEscolha" href="nossaHistoria.php"><div id="escolha">Nossa história</div></a><br><br>
        <a id="textoEscolha" href="histBatistas.php"><div id="escolha">História dos Batistas</div></a><br><br>
        <a id="textoEscolha"href="principios.php"><div id="escolha">Pacto e Princípios Batistas</div></a><br><br>
        <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body>
</html>

