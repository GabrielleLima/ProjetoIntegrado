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
            <h2>Quem somos como Batistas</h2>

            <p>Somos um povo que vem de longe, com muitos nomes, de muitas perseguições, de muitas lutas, mas construindo uma bela história de fé, de doutrina e de princípios. 
                Você os conhecerá nos conteúdos de documentos que disponibilizamos neste Portal.<br><br>

Somos o povo da Bíblia, a Palavra Infalível e Eterna de Deus. Cremos em Deus Pai, Santo, Justo, Criador, e Sustentador de todas as coisas. Cremos no Deus Filho, Jesus Cristo, 
Salvador e Senhor de nossas vidas e almas, e no Deus Espirito Santo, o Consolador que nos guia em tudo quanto Jesus ensinou.<br><br>

Com o nome de Batista existimos desde 1612, quando Thomas Helwys, de volta da Holanda, onde se refugiara da perseguição do Rei James I da Inglaterra, 
organizou com os que voltaram com ele uma Igreja em Spitalfields, arredores de Londres.<br><br>

Thomas Helwys, que era advogado e estudioso da Bíblia, ao escrever um livro intitulado " Uma Breve Declaração Sobre o Mistério da Iniquidade", foi preso e morreu na prisão, em 1615.<br><br>

No referido livro, ele escreveu aquilo que é um dos mais caros princípios batistas, o princípio da liberdade religiosa e de consciência:"… a religião do homem está entre Deus e ele: 
o rei não tem que responder por ela e nem pode o rei ser juiz entre Deus e o homem. Que haja, pois, heréticos, turcos ou judeus, ou outros mais,
não cabe ao poder terreno puni-los de maneira nenhuma".<br><br>

Nossas Igrejas adotam a forma de governo Congregacional Democrático. São Igrejas autônomas e locais. Relacionam-se umas com as outras pela mesma fé e ordem, de forma cooperativa e por laços fraternais.<br><br>

Creem na conversão pessoal de cada crente a Jesus Cristo, no exercício de sua responsabilidade individual e que é aceito pela Igreja por batismo por imersão e mediante
confissão da sua fé em Jesus Cristo como salvador pessoal. Portanto, não aceitam e nem praticam o batismo infantil. Realizam seus objetivos comuns pela cooperação voluntária, 
na forma de associação de Igrejas ou de Convenções, como é o caso da Convenção Batista Brasileira.<br><br>
Declaração doutrinária da convenção: <a href="pdfs/Declaraçao doutrinaria.pdf" target="_blank"> Declaração doutrinária</a> <br><br><br>
           



            <p id="fonte">Fonte: http://www.convencaobatista.com.br/siteNovo/index.php</p> </p>
        </div>
       <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
    </body> 
</html>
