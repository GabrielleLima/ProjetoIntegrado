<?php
session_start();
include ('conexao.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <style type="text/css">
            div#tamanhoTema{
                position: relative;
                height: 500px;
                margin-left: -8px;
                margin-right: -5px;
                border-radius: 10px;   
                
            }
             div#final{
                background: black;
                position: relative;
                bottom: -10px;
                left: 0px;
                height: 100px;
                padding: 1px;
               
            }
            p#rodape{
                color: white;
                text-align: center;
            }
            div#tamanhoTema img {
                width: 50%;
                
            }
            div#cabecalho{
                margin-left: -8px;
                margin-right: -8px;
            }
            h3#tema{
                font-family: cursive;
                text-align: center;
                
            }
            p#index{
                text-shadow: 3px 3px 10px gray;
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
            div#link1{
                position: relative;
                width: 250px;
                height: 200px;
                left: 400px;
                top: 30px;
                text-align: center;
            }
            div#link1 button{
                background: rgba(0,0,0,0.9);
                color: white;
                border: 2px solid rgba(0,0,0,0.9) ;
                cursor: pointer;
                border-radius: 10px;
            }
            div#link2{
                position: relative;
                width: 250px;
                height: 200px;
                left: 780px;
                top: -170px;
                text-align: center;
            }
             div#link2 button{
                background: rgba(0,0,0,0.9);
                color: white;
                border: 2px solid rgba(0,0,0,0.9) ;
                cursor: pointer;
                border-radius: 10px;
             }
                div#letra{
                    text-align: center;
                    font-size: 23pt;
                    font-family: initial;
                    width: 100%;
                    
                }
        </style>
        <title>Início</title>
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
        <div id="tamanhoTema">
            
            <h3 id="tema"> 
                <p id="index">Tema</p>
                Uma igreja comprometida com a palavra de Deus<br>
                <p id="index">Divisa</p>
                "E sede cumpridores da palavra e não somente ouvintes, enganando-vos com falsos discursos."<br> Tiago 1:22
                
        </h3>
           
        </div>
        <hr width="80%" align="center" color="black">
        <div id="letra"> <n>Sobre</n> </div>
        <div id="link1">
            <img src="fotos/convencaoPlanalto.png" width="70%" height="65%"><br><br>
            <a href="nossaHistoria.php"> <button>Leia sobre a convenção</button></a>
        </div>
        
        <div id="link2">
            <img src="fotos/programacao.png" width="60%" height="65%"><br><br>
            <a href="programacoes.php"><button>Veja nossas programações</button></a>
        </div>
        
        
        
        <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br>
                
                Telefone: (61) 3637-1188<br>
                Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás<br>
            
            </p>
           
        </div>
    </body>
</html>

