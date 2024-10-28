<?php include 'header.php' ?>

<div id="inicio" class="animationone">

    <div id="in1">
        <h1 class="meio">A Fascinante Jornada da Programação <br> Da Origem ao Futuro</h1>
        <h2 class="bird1">Explorando as Raízes e a Evolução da Ciência da Computação</h2>
        </h1>
        <p class="bird">A história da programação  é uma jornada rica e fascinante que nos transporta  desde os primeiros algoritmos matemáticos até as avançadas inteligências artificiais de hoje. Este site foi criado para  guiá-lo através dos marcos mais significativos dessa evolução,  destacando os pioneiros e as inovações que moldaram o mundo digital que conhecemos.

            No início, tivemos visionários como Ada Lovelace, que escreveu o primeiro algoritmo destinado a ser processado  por uma máquina, lançando as bases para tudo o que viria depois. Avançando para a década de 1940, encontramos  Alan Turing, cujas ideias sobre computação e inteligência artificial  abriram caminhos para desenvolvimentos futuros.

            À medida que avançamos através das décadas , vemos a programação evoluir de linguagens de baixo nível, como Assembly, para linguagens de alto nível como Python e JavaScript, que democratizaram a criação de software e possibilitaram a revolução digital. As décadas de 1960 e 1970 trouxeram a popularização dos computadores pessoais, impulsionando uma era de inovação sem precedentes com figuras como Bill Gates e Steve Jobs, que tornaram a computação acessível ao público em geral.</p>
    </div>
    <div id="in2">
    <div id="gameContainer">
        <div id="player"></div>
        <div id="obstacles"></div>
    </div>
    
    <button id="startButton" onclick="incrementClick()">Iniciar o Jogo</button>
    <div id="infoText"></div>
    
    </div>
    
    <div class="meio">
        <p class="bird">À medida que avançamos através das décadas, vemos a programação evoluir de linguagens de baixo nível, como Assembly, para linguagens de alto nível, como Python e JavaScript, que democratizaram a criação de software e possibilitaram a revolução digital. As décadas de 1960 e 1970 trouxeram a popularização dos computadores pessoais, impulsionando uma era de inovação sem precedentes com figuras como Bill Gates e Steve Jobs, que tornaram a computação acessível ao público em geral.

            Hoje, vivemos em um mundo onde a programação permeia todos os aspectos de nossas vidas. De algoritmos de busca que facilitam a navegação na internet a redes neurais que aprendem e tomam decisões, a programação é a espinha dorsal da tecnologia moderna. Programadores contemporâneos continuam a expandir os limites do possível, explorando novas fronteiras <br> como a computação quântica e a inteligência artificial avançada.
         
            Este site não apenas narra a evolução da programação, mas também celebra os indivíduos cujas contribuições foram fundamentais para o progresso tecnológico. Através de artigos detalhados, linhas do tempo interativas e uma seção dedicada à "Hall da Fama" dos programadores, você poderá explorar a rica tapeçaria da história da programação.

            Venha conosco nesta jornada e descubra como a programação não é apenas uma habilidade técnica, mas uma forma de arte que combina lógica, criatividade e a capacidade de resolver problemas complexos. Ao entender o passado, podemos apreciar melhor o presente e imaginar o futuro promissor da programação.</p>
    </div>
    <div id="in3"></div>
    <div id="geometryDashContainer">

        <div id="geometryDashGame">
            <div id="geometryDashPlayer"></div>
            <div id="geometryDashObstacles"></div>
        </div>
        <div id="geometryDashCounter">Obstáculos ultrapassados: 0</div>
        <button id="geometryDashStartButton">Iniciar Jogo</button>

        <div id="geometryDashInfoText" style="text-align: center; margin-top: 20px;"></div>

    </div>

</div>





<?php include 'halldafama.php' ?>
<?php include 'historia.php' ?>
<?php include 'sobrenós.php' ?>