<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <style type="text/css">
            div#tamanhoTema{
                position: relative;
                height: 600px;
                 margin-left: -8px;
                 margin-right: -8px;
                border-radius: 10px;   
                
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
            .button{
                position: absolute;
                top: 40px;
                right: 10px;
                width: 90px;
                 background: none;
                    border: 2px solid rgba(0,0,0,0.8) ;
                    font-size: 10pt;
                    cursor: pointer;
            }
            div#login{
                position: absolute;
                top: 20px;
                right: 5px;
            }
        </style>
        <title></title>
    </head>
    <body>
        <div id="cabecalho">
            <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
        
        <div id="login">Faça o login para saber mais sobre nossa Igreja!</div>
        <a  href="login1.php"><input class="button" type="button"name="login" value=" Login"> </a>
        <hr widht=100 align="center" color="black">
       
        </div>
        <div id="tamanhoTema">
            
            <h3 id="tema"> 
                <p id="index">Tema</p>
                Uma igreja comprometida com a palavra de Deus<br>
                <p id="index">Divisa</p>
                "E sede cumpridores da palavra e não somente ouvintes, enganando-vos com falsos discursos."<br> Tiago 1:22.
                
        </h3>
           
        </div>
        <img src="fotos/logoConvencao.jpg" width="10%" height="15%">
        
        
        <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br>
                
                Telefone: (61) 3637-1188<br>
                Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás<br>
            
            </p>
           
        </div>
    </body>
</html>
