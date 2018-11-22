<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Nossa história</title>
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
                font-size: 12pt;
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
            button{
                background: none;                
                border: 2px solid rgba(0,0,0,0.9) ;
                cursor: pointer;
                border-radius: 5px;
             }
             h3{
                 color: black;
                font-size: 20pt;
                text-shadow: 3px 3px 10px gray;
                text-align: center;
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
            Nossa história
        </div>
        
        <div id="hist">
            <h2>Primeira Igreja Batista</h2><br>
            <p> A Primeira Igreja Batista (PIB), vinculada à Convenção Batista do Planalto Central, foi fundada em 12 de junho de 1982 na Quadra 01 MR 12 lote 20
                Setor Norte Planaltina-GO, sendo uma organização civil, de natureza religiosa, sem fins lucrativos e econômicos, tendo sede e foro nessa cidade. <br><br>
                Foi construído anos depois em 09 de maio de 1991 um templo maior na Quadra 01 MR 01 Lotes 01 e 02 Setor Norte:</p>
         <img src="fotos/igreja.png" width="100%" height="30%"><br><br>
         <p> Abaixo está a cronologia dos pastores que lideraram essa igreja:
         <ul> <li>12/06/82 a 11/03/84 – Pr. Carlos</li><br>
             <li>11/03/84 a 27/07/86 – AlciVernay da Silva</li>]<br>
    <li>27/07/86 a 25/07/93 - Pr. Carlos</li><br>
    <li>25/07/93 a 28/01/01 – Pr. Reginaldo Ramos Silva</li><br>
    <li>28/01/01 a 18/02/01 – Ir. Odair Jose (vice-presidente)</li><br>
    <li>18/02/01 a 14/03/02 - Pr. Carlos... (Pr. Interino)</li><br>
    <li>14/03/02 a 11/08/02 – Irª. Dione Coelho da Silva Salviano (vice-moderadora)</li><br>
    <li>11/08/02 a 20/10/02 – Pr.Heriberto Regen Silva Alves</li><br>
    <li>20/10/02 a 12/01/03 - Irª. Dione Coelho da Silva Salviano (vice-moderadora)</li><br>
    <li>12/01/03 a 08/03/03 – Ir. Marcos Salviano de Souza (vice-moderador)</li><br>
    <li>08/03/03 a 17/08/08 – Pr. João Marcos Matias de Santana</li><br>
    <li>17/08/08 a 04/10/08 – Pr. Rubens da Costa Monteiro (Pr. Interino)</li><br>
    <li>04/10/08 a 11/04/10 – Pr. Fábio de Castro Mesquita</li><br>
    <li>11/04/10 a 25/12/10 – Pr. Marcelo Henrique Guedes (Pr. Interino)</li><br>
    <li>E de 25/12/10 até hoje em dia lidera o Pr. presidente Estevão Alves da Silva.</li>
         </ul>
    Temos como finalidade pregar o Evangelho de Jesus Cristo<br><br>
    Veja nosso estatuto: <a href="pdfs/estatuto.pdf" target="_blank"> <button>Estatuto PIB</button></a><br><br> </p>
         
         <h3>História da Convenção Batista do Planalto Central</h3><br>
         <p>A Convenção Batista do Planalto Central foi organizada em 22 de julho de 1960, composta de cinco igrejas e um total de 358 membros. 
             Atualmente, a CBPC é composta de 137 igrejas, 38 congregações e 22 mil membros e congregados.<br><br>
             O trabalho batista começou nas terras do planalto central em dezembro de 1956, com a chegada dos irmãos Edístio Fernandes, Josias Nogueira e Jorge Dias Lima.<br><br>
Com o aparecimento das igrejas batistas na nova capital e a conseqüente expansão de suas atividades de natureza cooperativa, sentiu-se logo a necessidade de se agruparem numa convenção.<br><br>
Assim, em 22 de julho de 1960, três meses após a fundação de Brasília, na mesma ocasião em que se organizou a Igreja Memorial Batista de Brasília, em seu santuário provisório, também foi fundada a
Convenção Batista do Planalto Central, inicialmente com o nome de Convenção Batista do Distrito Federal. Cinco igrejas participaram deste evento:<br><br>
         <ul><li>PIB de Brasília;</li><br>
 <li>PIB em Taguatinga;</li><br>
 <li>PIB em Alexânia;</li><br>
<li>Igreja Batista do Planalto (atual PIB Sobradinho); e</li><br>
<li>Igreja Memorial Batista</li><br><br>
</ul>
Após 52 anos da sua fundação, a CBPC passou de cinco para 135 igrejas filiadas e 67 congregações. Multiplicaram-se o número de batistas de 358 membros para 22 mil pessoas, 
entre membros e congregados. E essa tem sido a visão da CBPC, com a firme cooperação das igrejas e órgãos a ela filiados <br><br> </p>
            <p id="fonte"> Fontes: http://www.convencaobatista.com.br/siteNovo/index.php <br>
                https://cbpc.org.br/nossa-historia/ </p>
        </div>
        
       <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body> 
</html>
