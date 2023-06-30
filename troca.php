<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Barlow+Semi+Condensed:wght@100&family=Dosis:wght@300;500&family=Nunito:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Italianno&family=Nunito:wght@200&display=swap"
        rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Endereços</title>

    <style>
        body {
            background-image: url(back.avif);
            padding: 15px;
            margin: 10px;
        }

        h1{
            font-family: 'Nunito', sans-serif;
            font-size: 30px;
            text-shadow: 2px 2px 3px #6a6a6a;
            background-color: #c8faa6df;
            display: flex;
            justify-content: center;
        }

header main nav {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-evenly;
    font-family: 'Nunito', sans-serif;
    font-size: 17px;
}

button a {
  text-decoration: none;
  color: #000000;
}

.efeito {
  border: none;
  color: #ffffff;
  padding: 20px;
  margin: 10px;
  font-size: 15px;
  font-family: 'Nunito', sans-serif;
  line-height: 0px;
  border-radius: 30px;
  position: relative;
  box-sizing: border-box;
  cursor: pointer;
  transition: all 400ms ease;
}

.efeito {
  background: #afe18d;
}

.efeito:hover {
  background: rgba(0, 0, 0, 0);
  color: #000000;
  box-shadow: inset 0 0 0 3px #73b04a;
}

a:link {
  color: #000000;
}

a:hover {
  color: #4e4c4c;
}

h2{
    font-size: 20px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    
}

footer {
  background-color: #afe18d;
  background: radial-gradient(circle, rgb(232, 255, 228) 0%, rgb(125, 221, 110) 100%);
  background-size: 100%;
  position: relative;
  left: -25px;
  bottom: -25px;
  padding: 15px;
  width: calc(100% + 22px);
  display: flex;
  text-align: center;
  justify-content: space-evenly;
}

.container-footer {
  padding: 0px 20px 20px;
}

ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  list-style: none;
}

ul li a {
  color: rgb(0, 0, 0);
  margin: 20px;
  text-decoration: none;
  font-size: 1em;
  font-family: 'Nunito', sans-serif;
  display: flex;
  flex-wrap: wrap;
}

.container-footer p{
  font-family: 'Allison', cursive;
  font-size: 40px;
}

@media(max-width:250px) {
  .menu-hamburguer {
      display: block;

  }

  .menu {
      display: none;
      flex-direction: column;
  }

  .menu li {
      margin: 10px 0;

  }

  .menu.ativo {
      display: flex;
  }
}
    </style>
</head>
<body>

    <?php
        echo '<header>
        <center>
            <img src="eco.png" width="200px" height="auto">
        </center><br><br>
        <main>
            <center>
            <button type="button" class="efeito efeito"><strong><a link href="index.html">Início</button></a></strong>

            <button type="button" class="efeito efeito"><strong><a link href="#">Sobre Nós</button></a></strong>

            <button type="button" class="efeito efeito"><a link href="#"><strong>Dicas de Reciclagem</button></strong></a>

            <button type="button" class="efeito efeito"><a link href="troca.html"><strong>Locais de Troca</button></strong></a>

            <button type="button" class="efeito efeito"><a href="#"><strong>Faça você mesmo</button></strong></a>

            <button type="button" class="efeito efeito"><a href="#"><strong>Espaço Kids</button></strong></a>

            <button type="button" class="efeito efeito"><a link href="feedback.html"><strong>Deixe seu Feedback</button></strong></center></a>
            </nav>
        </main>
    </header><br><br><br><br><br>';
    

    $estados = $_GET["estados"];
    switch ($estados) {
        case 1:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Recicla Brasil Comércio e Reciclagem de Sucatas Ltda<br> (Av. Severo Dullius, 1205 - São João, Porto Alegre - RS, 90200-310);</a></h2> <h2>ReciclaSim Comércio de Sucatas<br> (Av. Dique, 672 - Anchieta, Porto Alegre - RS, 90200-260);</h2> <h2>Bolinha Sucatas<br> (R. João Moreira Maciel, 9260 - Humaitá, Porto Alegre - RS, 90250-680);</h2> <h2>Reciclagem do Alemão<br> ( R. Voluntários da Pátria - Farrapos, Porto Alegre - RS, 90250-590)</h2>";
            break;

        case 2:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Comercial de Sucata MD<br> (Av. Assis Brasil, 7240 - Passo d'Areia, Porto Alegre - RS, 91140-000);</h2> <h2>N Siqueira Cia LTDA<br> (Beco José Paris, 510 - Sarandi, Porto Alegre - RS, 91140-310);</h2> <h2>METAIS CARLINHO'S<br> (Av. Francisco Silveira Bitencourt - Sarandi, Porto Alegre - RS, 91140-090);</h2> <h2>Ligasul Sucatas De metais em geral<br> (Av. Bernardino Silveira Amorim, 305 - Sarandi, Porto Alegre - RS, 91140-410);</h2>";
            break;

        case 3:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Ferro velho<br> (Alameda da Fábrica, 45 - Morro Santana, Porto Alegre - RS, 91450);</h2> <h2>HR Car peças usadas<br> (Av. Antônio de Carvalho, 1969 - Jardim Carvalho, Porto Alegre - RS, 91430-001);</h2> <h2></h2>";
            break;

        case 4:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Comércio de Ferro e Metais Nildo Pinto<br> (R. Juarez Távora, 483 - Vila Joao Pessoa, Porto Alegre - RS, 91520-100);</h2> <h2>R&D Comércio de Sucatas<br> (R. Clemente Pereira, 408 - São José, Porto Alegre - RS, 91520-430);</h2> <h2>Ferro velho do Alemão<br> (R. 9 de Junho, 1098 - São José, Porto Alegre - RS, 91520-610);</h2> <h2>Ferro Velho de Conto<br> (R. Euclídes da Cunha, 576 - Partenon, Porto Alegre - RS, 90620-220);</h2>";
            break;

        case 5:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Ferro-Velho da Gruta<br> (R. Márciano Ribeiro, 150 - Medianeira, Porto Alegre - RS, 90870-360);</h2> <h2>Comércio de Sucatas Cruzeiro do Sul<br> (R. Cruzeiro do Sul, 2541 - Santa Tereza, Porto Alegre - RS, 90840-000);</h2> <h2>Ferro Velho Zanatta<br> (R. Cel. Massot, 1241 - Cristal, Porto Alegre - RS, 91910-530);</h2> <h2>Ferro Velho da Figueira<br> (Av. Amir Domingues, 333 - Cascata, Porto Alegre - RS, 91712-130);</h2>";
            break;

        case 6:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Barreto Sucatas Ferro Velho<br> (R. Roberto Osório Júnior, 52 - Cavalhada, Porto Alegre - RS, 91740-430);</h2> <h2>Ferro Velho JKM<br> (Av. João Salomoni, 615 - Vila Nova, Porto Alegre - RS, 91740-830);</h2> <h2>Sul-Brasileira De Sucatas<br> (Av. Juca Batista, 4286 - Cavalhada, Porto Alegre - RS, 91755-010);</h2> <h2>Sucatas Neon Texas<br> (Av. Orleaes, 67 - Guarujá, Porto Alegre - RS, 91770-620);</h2>";
            break;

        case 7:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Ferro Velho<br> (Av. João Antônio Silveira - Restinga, Porto Alegre - RS, 91792-280);</h2> <h2>LC Sucatas<br> (R. Adão Benedito Lopes Brandão - Restinga, Porto Alegre - RS, 91791-100);</h2> <h2>Lc Mendes Reciclagem<br> (Av. Principal da Ponta Grossa, 947/949 - Ponta Grossa, Porto Alegre - RS, 91781-010);</h2> <h2>Reciclagem Lami<br> (Timbaúva do varejão 519- Zona Rural - Lami, Porto Alegre - RS, 91787-170);</h2>";
            break;
        
        case 8:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Ferro Velho do Neném<br> (R. Mal. Floriano Peixoto, 210 - Centro Histórico, Porto Alegre - RS, 79803-050);</h2> <h2>Antiguidades-Ferrovelho<br> (R. Miguel Tostes - Rio Branco, Porto Alegre - RS, 90430-061);</h2> <h2>Ferro Velho de Conto Ltda<br> (R. Voluntários da Pátria, 1401 - Centro Histórico, Porto Alegre - RS, 91780-590);</h2> <h2>Reciclarte<br> (R. Voluntários da Pátria - Floresta, Porto Alegre - RS, 90230-011);</h2>";
            break;
        
        case 9:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Sdv reciclando<br> (R. do Zaire, 158 - Agronomia, Porto Alegre - RS, 91540-130);</h2> <h2>RECICLAGEM CASTRO<br> (R. João Pereira da Silva Filho, 08 - Lomba do Pinheiro, Porto Alegre - RS, 91550-660);</h2> <h2>Nico Peças<br> (Av. Bento Gonçalves, 6744 - Agronomia, Porto Alegre - RS, 91540-000);</h2> <h2>CDV AGRONOMIA<br> (Av. Bento Gonçalves, 6691 - Agronomia, Porto Alegre - RS, 91540-000);</h2>";
            break;

        case 10:
            echo "<h1>Veja onde realizar a venda:</h1><br><br><br><br> <h2>Ferro Velho
            Centro de Reciclagem<br> (Mário Quintana, Porto Alegre - RS, 91250-330);</h2> <h2>Bk
            Ferro velho<br> (Rua 6 de Novembro - Mário Quintana, Porto Alegre - RS, 91270-320);</h2> <h2>AG FIX - Reciclagem<br> (Av. Alexandre Luiz, 422 - Passo das Pedras, Porto Alegre - RS, 91225-090);</h2> <h2>Mettal norte sucatas<br> (Av: Baltazar de Oliveira garcia, 1707 - São Sebastião, Porto Alegre - RS, 91150-000);</h2>";
            break;
    }

    echo '<br><br><br><br><br><br><br><br><footer>
    <div class="container-footer">
        <p>Mapa do Site</p>
        <div class="menu">
            <ul>
                <li><a href="index.html">Início</a></li>
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Dicas de Reciclagem</a></li>
                <li><a href="troca.html">Locais de Troca</a></li>
                <li><a href="#">Faça você mesmo</a></li>
                <li><a href="#">Espaço Kids</a></li>
                <li><a href="#">Deixe seu Feedback</a></li>
            </ul>
        </div><br><br>
    
        <div class="copy">
            &copy; 2023  - Pilas Eco - All Rights Reserved.
        </div>
    </div>
    </footer>'

    ?>

</body>
</html>