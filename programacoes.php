<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <title>Avisos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="formatacao.css">
        <style type="text/css">
            div#aviso {
                position: relative;
               font-size: 15px;
                width: 500px;
                top: 0px;
                left: 530px;
          
            }
            h2{
               font-size: 35px;
               text-shadow: 3px 3px 10px gray;
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
            div#titulo{
                 margin-left: -8px;
  margin-right: -8px;
                background-color: rgba(255,255,255,0.8);
            }
            div#aviso li{
                text-align: justify;
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
                <li><a href="index.php">Inicio</a> </li>
                <li><a href="sobre.php">Sobre nós</a> </li>
                <li><a href="programacoes.php">Programações</a> </li>
                <li><a href="contato.php">Fale conosco</a></li>
            </ul>
            
        </nav> 
        <a  href="logout.php"><input id="botao" type="button"name="login" value="Sair"></a>
        <hr widht=100 align="center" color="black">
       
        </div>
       <div id="titulo">
            Programações
        </div>
        <div id="aviso">
        <h2>Cultos semanais:</h2>
        <ul>
            <li>Culto de oração matutino:</li>
                <ul>
                    <li>Segunda a sábado = 07:00 às 08:00 horas </li> 
                </ul><br>
                <li>Culto de oração e doutrina:</li>
                <ul>
                    <li>Quarta-feira = 19:30 às 21:00 horas </li> </ul><br>
                    <li>Cultos normais:</li>
                    <ul>
                        <li>Domingo = 09:00 às 11:00 horas / 19:30 às 21:00 horas </li></ul><br>
                        <li>Culto no lar </li>
                        <ul>
                            <li>Sexta-feira = 20:00 horas </li> </ul>      
        </ul>
        
        <h2>Eventos anuais:</h2>
        <ul>
            <li>Retiro espiritual: Semana de carnaval/Semana Santa</li><br>
            <li>Aniversário da igreja: Junho </li><br>
            <li>Congresso de jovens: Agosto</li><br>
            <li>Congresso de mulheres: Novembro</li>
        </ul>
        <br><br>
                <br><br>        <br><br>        <br><br>        <br><br>        <br><br>
       </div>
        <div id="final">
            <p id="rodape">Primeira Igreja Batista em Planaltina Goiás<br><br>
                
                Telefone: (61) 3637-1188<br>
            Quadra 01 Mr 01 Lotes 01 e 02 Setor Norte - Planaltina Goiás
            </p>
           
        </div>
       
    </body>
</html>
