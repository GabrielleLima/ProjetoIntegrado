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
            body{
                background: white;
            }
            div#contato {
                position: relative;
               font-size: 15px;
                width: 600px;
                top: 0px;
                left: 500px;
          
            }
            div#titulo{
                
                background-color: rgba(0,0,0,0.5);
               
            }
            p{
                font-size: 15pt;
                color: black;
                text-align: justify;
                margin: 3px;
               
            }
            div#hist{
               position: relative;
               top: 0px;
               left: 240px;
               width: 900px;
            background-color: rgba(255,255,255,0.6);
            border-radius: 10px;
            }
            h2{
                color: black;
                font-size: 35pt;
                text-shadow: 3px 3px 10px gray;
                text-align: center;
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
            p#fonte{
                font-size: 10pt;
                font-style: italic;
            }
            </style>
    </head>
    <body>
         <div id="cabecalho">
             <img src="fotos/simbolo.png" align="left" width="8%" height="8%"> <br>
        <h1 style text align="left">Primeira Igreja Batista </h1>
        
        <nav id="menu">
            <ul>
                <li><a href="index.php">Inicio</a> </li>
                <li><a href="sobre.php">Sobre nós</a> </li>                
                <li><a href="programacoes.php">Programações</a> </li>
                <li><a href="contato.php">Fale conosco</a></li>
            </ul>
            
        </nav> 
        <a  href="logout.php"><input id="botao" type="button"name="login" value="Sair"></a>
        <hr width="100%" align="center" color="black">
       
        </div>
        <div id="titulo">
            História dos Batistas
        </div>
        <div id="hist">
            <h2>Nossa História</h2><br>
            <img src="fotos/igreja.png" width="100%" height="30%"><br>
            <p> A Primeira Igreja Batista começou em 12/06/1982 na Quadra 01 MR 12 lote 20 Setor Norte Planaltina-GO 
            e depois foi construído o templo em 09/05/1991 na Quadra 01 MR 01 Lotes 01 e 02 Setor Norte Planaltina-GO 
            o qual está até hoje.<br>
     Cronologia da direção da PIB:
     12/06/82 a 11/03/84 – Pr. Carlos...<br>
11/03/84 a 27/07/86 – AlciVernay da Silva<br>
27/07/86 a 25/07/93 - Pr. Carlos... (saiu para ser Pr. Da SIG)<br>
25/07/93 a 28/01/01 – Pr. Reginaldo Ramos Silva<br>
28/01/01 a 18/02/01 – Ir. Odair Jose (vice-presidente)<br>
18/02/01 a 14/03/02 - Pr. Carlos... (Pr. Interino)<br>
14/03/02 a 11/08/02 – Irª. Dione Coelho da Silva Salviano (vice-moderadora)<br>
11/08/02 a 20/10/02 – Pr.HeribertoRegen Silva Alves<br>
20/10/02 a 12/01/03 - Irª. Dione Coelho da Silva Salviano (vice-moderadora)<br>
12/01/03 a 08/03/03 – Ir. Marcos Salviano de Souza (vice-moderador)<br>
08/03/03 a 17/08/08 – Pr. João Marcos Matias de Santana<br>
17/08/08 a 04/10/08 – Pr. Rubens da Costa Monteiro (Pr. Interino)<br>
04/10/08 a 11/04/10 – Pr. Fábio de Castro Mesquita<br>
11/04/10 a 25/12/10 – Pr. Marcelo Henrique Guedes (Pr. Interino)<br>
25/12/10 a indeterminado – Pr. Estevão Alves da Silva<br><br>
            
Veja nosso estatuto: <a href="pdfs/estatuto.pdf" target="_blank">Estatuto PIB</a><br><br>

            <p id="fonte"> Fonte: http://www.convencaobatista.com.br/siteNovo/index.php </p> </p>
        </div>
       <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body> 
</html>
