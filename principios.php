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
            <h2>Pacto das Igrejas Batistas</h2>
<p>Tendo sido levados pelo Espírito Santo a aceitar a Jesus Cristo como único e suficiente Salvador, e batizados, sob profissão de fé, 
em nome do Pai, do Filho e do Espírito Santo, decidimo-nos, unânimes, como um corpo em Cristo, firmar, solene e alegremente, na presença de Deus e desta congregação,
o seguinte Pacto:<br><br>

Comprometemo-nos a, auxiliados pelo Espírito Santo, andar sempre unidos no amor cristão; trabalhar para que esta Igreja cresça no conhecimento da Palavra, na santidade,
no conforto mútuo e na espiritualidade; manter os seus cultos, suas doutrinas, suas ordenanças e sua disciplina; contribuir liberalmente para o sustento do ministério, 
para as despesas da Igreja, para o auxílio dos pobres e para a propaganda do Evangelho em todas as nações.<br><br>

Comprometemo-nos, também, a manter uma devoção particular; a evitar e condenar todos os vícios; a educar religiosamente nossos filhos; a procurar a salvação de todo o mundo, 
a começar dos nossos parentes, amigos e conhecidos; a ser corretos em nossas transações, fiéis em nossos compromissos, exemplares em nossa conduta e ser diligentes nos trabalhos seculares; 
evitar a detração, a difamação e a ira, sempre e em tudo visando à expansão do Reino do nosso Salvador.<br><br>
Além disso, comprometemo-nos a ter cuidado uns dos outros; a lembrarmo-nos uns dos outros nas orações; ajudar mutuamente nas enfermidades e necessidades; cultivar relações francas e a 
delicadeza no trato; estar prontos a perdoar as ofensas, buscando, quando possível, a paz com todos os homens.<br><br>

Finalmente, nos comprometemos a, quando sairmos desta localidade para outra, nos unirmos a uma outra Igreja da mesma fé e ordem, em que possamos observar os princípios da Palavra de Deus e 
o espírito deste Pacto.<br><br>

O Senhor nos abençoe e nos proteja para que sejamos fiéis e sinceros até a morte.<br><br>

Leia sobre os Princípios Batistas : <a href="pdfs/principios batistas.pdf" target="_blank">Princípios Batistas</a>    <br><br>   



<p id="fonte">Fonte: http://www.convencaobatista.com.br/siteNovo/index.php </p> </p>
        </div>
       <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body> 
</html>
