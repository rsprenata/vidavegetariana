<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap-4.1.1/dist/css/bootstrap.css">

    <link href="cover.css" rel="stylesheet">

    <link rel="icon" href="media/favicon.ico">

    <title>Vida vegetariana</title>

</head>
<body data-spy="scroll" data-target="#navbar">
    <!-- Pagina 1 -->
    <div class="cor2 d-flex w-100 height-100 mx-auto flex-column margem" id="divInicio">
        <header class="masthead mb-auto fixed-top">
            <div class="inner">
                <nav class="nav nav-masthead justify-content-center navbar" id="navbar">
                    <a class="nav-link active smoothScroll" href="#divInicio" >Início</a>
                    <a class="nav-link smoothScroll btn disabled" href="#divOqueE" id="aOqueE">O que é</a>
                    <a class="nav-link smoothScroll btn disabled" href="#divOqueComer" id="aOqueComer">O que comer</a>
                    <a class="nav-link smoothScroll btn disabled" href="#divImpacto" id="aImpacto">Impacto</a>
                    <a class="nav-link smoothScroll btn disabled" href="#divConclusao" id="aConclusao">Conclusão</a>
                    <a class="nav-link smoothScroll btn disabled" href="#divAvaliacao" id="aAvaliacao">Avaliação</a>
                </nav>
            </div>
        </header>
        <main role="main" class="container inner cover mt-auto invCor">
            <h1 class="cover-heading">Como levar uma Vida Vegetariana</h1
            <p class="lead"><b>
                Este material tem a intenção de trazer um conceito básico sobre vegetarianismo.
                A duração estimada desse conteúdo é de 15 minutos. É constituído por quatro tópicos, tendo um vídeo, um áudio e uma pequena avaliação com quatro perguntas para avaliar seu aprendizado. Esteja em um ambiente calmo e tranquilo.
            </b></p>
            <p class="lead">
                <a href="#divForm" class="btn btn-lg btn-secondary smoothScroll">Começar</a>
            </p>
        </main>
        <footer class="container mastfoot mt-auto invCor">
            <div class="inner">
                <p align="justify-content-center">Feito pelos alunos: Renata Soares, Lucas Praça, Lucas Becher e João Maia do Curso Superior de Tecnologia em Análise e Desenvolvimento de Sistemas da Universidade Federal do Paraná. Disciplina de Ergonomia das Interfaces de Aplicações - 2018 </p>
            </div>
        </footer>
    </div>

    <!-- Pagina 1.5 -->
    <div class="cor2 d-flex w-100 height-100 mx-auto flex-column margem" id="divForm">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Por favor, preencha alguns dados importantes...</h1>
            <form>
                <div class="form-group">
                    <label class="lead" for="formSexo">Sexo</label>
                    <select class="form-control selectForm" id="formSexo">
                        <option>Selecione</option>
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outro</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lead" for="formIdade">Idade</label>
                    <select class="form-control selectForm" id="formIdade">
                        <option>Selecione</option>
                        <option>Menos de 16</option>
                        <option>16 a 60</option>
                        <option>Mais de 60</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lead" for="formVeg">É vegetariano?</label>
                    <select class="form-control selectForm" id="formVeg">
                        <option>Selecione</option>
                        <option>Sim</option>
                        <option>Não, mas pretendo</option>
                        <option>Não e não pretendo </option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="lead" for="formTec">Geralmente usa computador/smartphone?</label>
                    <select class="form-control selectForm" id="formTec">
                        <option>Selecione</option>
                        <option>Sim</option>
                        <option>Não</option>
                    </select>
                </div>
            </form>
            <p class="lead">
                <a href="#divOqueE" class="btn btn-lg btn-secondary smoothScroll disabled" id="btnProxOqueE">Próximo</a>
            </p>
      </main>
    </div>

    <!-- Pagina 2 -->
    <div class="cor2 w-100 mx-auto flex-column margem" id="divOqueE" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">O que é vegetarianismo?</h1>
            <p class="lead"><b> É uma dieta alimentar livre de qualquer tipo de carne animal e também pode ser livre de outros alimentos de origem animal. Há alguns tipos de dieta vegetariana: </b></p>
            <img class="img-fluid" src="tipo_veg.png" title="Imagem: Os Autores" vspace="40px" hspace="15px" border="10px" align="center"/>
            <p class="lead"><b>A dieta vegetariana estrita é muito confundida com “veganismo”, porém o veganismo é um <b><i>estilo de vida</i></b> que procura excluir ao máximo qualquer forma de exploração aos animais, seja na alimentação, vestuário (couros) entre outras coisas. Uma pessoa vegana é vegetariana estrita, porém uma pessoa vegetariana estrita não necessariamente é vegana.</b></p>
            <p class="lead">
                <a href="#divOqueComer" class="btn btn-lg btn-secondary smoothScroll">Próximo</a>
            </p>
        </main>
    </div>

    <!-- Pagina 3 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divOqueComer" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">O que comer?</h1>
            <img align="right" src="proteinas.jpg" vspace="40px" hspace="15px" border="10px" height="43%" width="43%">
            <p class="lead"><b>Costuma-se pensar que vegetarianos comem somente saladas sem gosto e sem tempero, porém essa é uma imagem errada. Vegetarianos comem CEREAIS, FRUTAS, LEGUMES e qualquer outro alimento que venha das plantas, além de ALGAS e COGUMELOS. </b></p>
            <p class="lead" > <b><b class="green3">E as proteínas?</b><br>
            Carnes NÃO são únicas fontes de proteínas, todos os aminoácidos importantes para produzir proteínas no seu corpo podem ser obtidos de vegetais, o <a class="greendarktext" href="http://portalsaude.saude.gov.br/images/pdf/2014/novembro/05/Guia-Alimentar-para-a-pop-brasiliera-Miolo-PDF-Internet.pdf" target="_blank" rel=”noopener”>Ministério da Saúde do Brasil já reconheceu o vegetarianismo</a> como uma forma completa e saudável de se alimentar. Há somente um nutriente que não podemos encontrar abundantemente na dieta vegetariana: a vitamina B12, essa é produzida por bactérias e cianobactérias e pode ser suplementada na dieta vegetariana estrita (vegana), enquanto que na alimentação ovo-lacto-vegetariana existem ainda duas fontes ricas em vitamina B12, os ovos e o queijo.</b></p>
        </main>
    </div>

    <!-- Receita -->
    <div class="cor2 w-100 height-100 mx-auto flex-column" id="divReceita" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Receita de Quibe Vegetariano</h1>
            <div class="videoWrapper">
                <iframe width="560" height="349" src="https://www.youtube.com/embed/MMcathqewXU?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div> 
            <p class="lead">
                <a href="#divImpacto" class="btn btn-lg btn-secondary smoothScroll">Próximo</a>
            </p>
      </main>
    </div>

    <!-- Pagina 5 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divImpacto" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Impacto</h1>
            <p class="lead"><b><b class="green3">Dieta vegetariana:</b> se a população mundial deixasse de comer carne, 7,3 milhões de mortes por doenças relacionadas à alimentação seriam evitadas. A mudança também reduziria em 63% as emissões de gases poluentes na atmosfera e poderia economizar até US$ 1,06 trilhão por ano. </p>
            <p class="lead"><b class="green3">Dieta vegana (vegetariana estrita):</b> eliminar o consumo de qualquer produto de origem animal traria o maior impacto na saúde e no meio ambiente. Neste cenário, 8,1 milhões de vidas seriam poupadas e as emissões de CO2 na atmosfera seriam reduzidas em 70%. Além disso, a economia seria de até US$ 1,4 trilhão por ano.</b></p>
            <footer class=" container mastfoot">
                <div class="inner">
                    <p>Segundo <a class="greendarktext" href="http://www.pnas.org/content/early/2016/03/16/1523119113.full" target="_blank" rel=”noopener”>estudo</a> feito por pesquisadores da Universidade de Oxford, no Reino Unido e publicado na Proceedings of the National Academy of Sciences of the United States of America.</p>
                </div>
            </footer>
            <p class="lead">
              <a href="#divConclusao" class="btn btn-lg btn-secondary smoothScroll">Próximo</a>
            </p>
        </main>
    </div>

    <!-- Pagina 6 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divConclusao" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Conclusão</h1>
            <p class="lead"><b>Nesse pequeno guia esperamos que você tenha conhecido um pouco sobre essa dieta alimentar, que não inclui carne na alimentação <i class="greentext">(nem peixe! heheh)</i> e que pode não incluir outros produtos de origem animal <i class="bluetext">(ovos, leite, mel)</i>. A intenção é esclarecer sobre o assunto e se você quiser se aprofundar ou ter mais dicas sobre o assunto pode acessar alguns desses sites maneiros:</b></p></br>
            <p>
                <a class="greendarktext" href="https://www.sejavegano.com.br/" target="_blank" rel=”noopener”>Seja Vegano</a></br>
                <a class="greendarktext" href="https://www.svb.org.br/" target="_blank" rel=”noopener”>SVB Sociedade Vegetariana Brasileira</a></br>
                <a class="greendarktext" href="https://mfa.cachefly.net/mfa/pdfs/GVPC.pdf" target="_blank" rel=”noopener”>Guia Vegetariano para Começar</a></br>
                <a class="greendarktext" href="http://sociedadevegan.com/" target="_blank" rel=”noopener”>Sociedade Vegan</a></br>
                <a class="greendarktext" href="https://chubbyvegan.net/" target="_blank" rel=”noopener”>Chubby Vegan</a></br>
                <a class="greendarktext" href="http://presuntovegetariano.com.br/" target="_blank" rel=”noopener”>Presunto Vegetariano</a></br>
            </p>
            <p class="lead">
                <a href="#divAvaliacao" class="btn btn-lg btn-secondary smoothScroll">Fazer Avaliação</a>
            </p>
      </main>
    </div>

    <!-- Pagina 7 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divAvaliacao" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Avaliação</h1>
            <audio controls>
                <source src="media/orientacao_avaliacao.mp3" type="audio/mp3">
                Your browser does not support the audio element.
            </audio>
            <p class="lead"><i>(1/4)</i><b>Quais alimentos os vegetarianos podem comer?</b></p>
            <div class="row col-12 col-md-8" style="margin: auto;">
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP1" onclick="corrigir(1,1)" id="btnP1R1">Cereais, frutas, legumes e qualquer outro alimento que venha das plantas, além de algas e cogumelos.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP1" onclick="corrigir(1,2)" id="btnP1R2">Cereais, frutas, legumes e peixes.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP1" onclick="corrigir(1,3)" id="btnP1R3">Saladas e frutos do mar.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP1" onclick="corrigir(1,4)" id="btnP1R4">Cereais, frutas, legumes, carne bovina e suína.</button>
            </div>
            <p class="lead">
                <a href="#divQ2" class="btn btn-lg btn-secondary smoothScroll">Próxima</a>
            </p>
      </main>
    </div>

    <!--pergunta 2 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divQ2" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Avaliação</h1>
            <p class="lead"><i>(2/4)</i><b>Quais alimentos uma pessoa ovolactovegetariana NÃO consome?</b></p>
            <div class="row col-12 col-md-8" style="margin: auto;">
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP2" onclick="corrigir(2,1)" id="btnP2R1">Cereais, frutas, legumes e qualquer outro alimento que venha das plantas, além de algas e cogumelos.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP2" onclick="corrigir(2,2)" id="btnP2R2">Não consome carne (vermelha, branca, crustáceos, etc).</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP2" onclick="corrigir(2,3)" id="btnP2R3">Não consome nada de origem animal.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP2" onclick="corrigir(2,4)" id="btnP2R4">Não consome ovos e leite.</button>
            </div>
            <p class="lead">
                <a href="#divQ3" class="btn btn-lg btn-secondary smoothScroll">Próxima</a>
            </p>
        </main>
    </div>

    <!--pergunta 3 -->
    <div class="cor2 w-100 height-100 mx-auto flex-column margem" id="divQ3" style="display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Avaliação</h1>
            <p class="lead"><i>(3/4)</i><b>Segundo este material, o VEGANISMO é:</b></p>
            <div class="row col-12 col-md-8" style="margin: auto;">
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP3" onclick="corrigir(3,1)" id="btnP3R1">Uma dieta alimentar.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP3" onclick="corrigir(3,2)" id="btnP3R2">Uma religião.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP3" onclick="corrigir(3,3)" id="btnP3R3">Um estilo de vida que procura excluir ao máximo qualquer forma de exploração aos animais.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP3" onclick="corrigir(3,4)" id="btnP3R4">Uma dieta para emagrecer.</button>
            </div>
            <p class="lead">
                <a href="#divQ4" class="btn btn-lg btn-secondary smoothScroll">Próxima</a>
            </p>
        </main>
    </div>

    <!--pergunta 4 -->
    <div class="row-fluid cor2 w-100 height-100 mx-auto flex-column margem" id="divQ4" style="padding-bottom: 5rem; display: none;">
        <main role="main" class="container inner cover">
            <h1 class="green3" class="cover-heading">Avaliação</h1>
            <p class="lead"><i>(4/4)</i><b>Sobre PROTEÍNAS, é correto afirmar: (somente uma alternativa)</b></p>
            <div class="row col-12 col-md-8" style="margin: auto;">
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP4" onclick="corrigir(4,1)" id="btnP4R1">Vegetarianos sempre tem deficiência de proteínas.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP4" onclick="corrigir(4,2)" id="btnP4R2">Carnes NÃO são únicas fontes de proteínas.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP4" onclick="corrigir(4,3)" id="btnP4R3">Proteínas são vermes que dão em vegetarianos.</button>
                <button type="button" class="btn btn-secondary btn-lg btn-block btnP4" onclick="corrigir(4,4)" id="btnP4R4">Proteínas provêm somente de carne de boi.</button>
            </div>
        </main>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap-4.1.1/dist/js/bootstrap.js"></script>
    <script src="js/scrollSpy.js"></script>
    <script src="js/corretor.js"></script>
    <script src="js/bloqueador.js"></script>
    <script src="js/sweetalert2.all.js"></script>
</body>
</html>