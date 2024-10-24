<script>
    // Eras.php

    function typeWriter(element, text, idx = 0, speed = 100, chunkSize = 1, callback) {
        if (idx < text.length) {
            const nextChunk = text.slice(idx, idx + chunkSize);
            element.textContent += nextChunk;

            setTimeout(function() {
                typeWriter(element, text, idx + chunkSize, speed, chunkSize, callback);
            }, speed);
        } else if (callback) {
            callback();
        }
    }

    function changeContent(era) {
        const contentElement = document.getElementById('content');
        const buttons = document.querySelectorAll('.buttons button');
        buttons.forEach(button => button.disabled = true);

        contentElement.textContent = '';

        let eraText = '';
        switch (era) {
            case 'introduction':
                eraText = 'As diferentes eras da programação destacam o avanço tecnológico e a evolução das linguagens que moldaram o cenário da computação moderna. Explore cada década para entender as inovações e os desafios que os programadores enfrentaram.';
                break;
            case '1940s':
                eraText = 'A década de 1940 foi um período revolucionário para a computação. Em 1941, Konrad Zuse completou o Z3, o primeiro computador eletromecânico programável. Durante a Segunda Guerra Mundial, Alan Turing e sua equipe desenvolveram a máquina Bombe para decifrar códigos nazistas.';
                break;
            case '1950s':
                eraText = 'Nos anos 1950, as primeiras linguagens de programação foram desenvolvidas para facilitar a comunicação com os computadores. Em 1957, a IBM lançou o Fortran, uma linguagem projetada para cálculos científicos e de engenharia.';
                break;
            case '1960s':
                eraText = 'A década de 1960 marcou o início da programação como uma disciplina mais formalizada, com desenvolvimentos significativos como ALGOL 60, COBOL, e BASIC, que ajudaram a moldar o futuro da computação.';
                break;
            case '1970s':
                eraText = 'A década de 1970 foi um período crucial na história da programação de computadores, marcado por avanços significativos em linguagens de programação, sistemas operacionais e tecnologias de computação.';
                break;
            case '1980s':
                eraText = 'Os anos 80 foram marcados pela explosão do uso de computadores pessoais e pelo desenvolvimento de linguagens como C++ e SQL, além do advento de GUIs que tornaram os computadores mais acessíveis.';
                break;
            case '1990s':
                eraText = 'A década de 1990 testemunhou a ascensão da internet e a popularização de linguagens de programação web como HTML, JavaScript e PHP, que transformaram a forma como interagimos com a informação.';
                break;
            case '2000s':
                eraText = 'Nos anos 2000, a programação viu o surgimento de linguagens como C#, Java e Python, que ampliaram as possibilidades de desenvolvimento de software e a criação de aplicativos robustos e escaláveis.';
                break;
            case '2010s':
                eraText = 'Na década de 2010, a programação continuou a evoluir rapidamente, impulsionada por avanços em tecnologia da informação, novas linguagens de programação, paradigmas de desenvolvimento e mudanças na forma como as pessoas interagem com a tecnologia.';
                break;
            case '2020s':
                eraText = 'Na década de 2020, no caso a era atual, não temos muitas informações específicas, porém aqui mostraremos algumas tendências até o momento: A utilização e implementação da inteligência artificial, o foco da segurança cibernética, o aumento da migração de aplicativos para ambientes de nuvem e o desenvolvimento de arquiteturas de microsserviços escaláveis e resilientes.';
                break;

            default:
                eraText = 'Selecione uma era específica para saber mais sobre os desenvolvimentos e as linguagens de programação de cada década.';
        }

        typeWriter(contentElement, eraText, 0, 50, 1, function() {
            buttons.forEach(button => button.disabled = false);
        });
    }

    // linha do tempo.php

    function toggleContent(element) {
        const hiddenText = element.querySelector(".hidden");
        if (element.classList.contains("expanded")) {
            hiddenText.style.display = "none";
            element.classList.remove("expanded");
        } else {
            hiddenText.style.display = "block";
            element.classList.add("expanded");
        }
    }

    // inicio.php

    document.addEventListener("DOMContentLoaded", function() {
        const startButton = document.getElementById("startButton");
        const player = document.getElementById("player");
        const gameContainer = document.getElementById("gameContainer");
        const infoText = document.getElementById("infoText");
        const obstaclesContainer = document.getElementById("obstacles");

        let playerY = 150;
        let playerVelocity = 0;
        let gravity = 0.6;
        let lift = -10;
        let obstacles = [];
        let frame = 0;
        let gameSpeed = 5.5;
        let gameOver = false;
        let score = 0;
        let passedObstacles = 0;

        let texts = [
            "A programação começou com Ada Lovelace.",


            "A programação começou com Ada Lovelace.",
            "Alan Turing é considerado o pai da ciência da computação.",
            "O primeiro computador eletrônico foi o ENIAC.",
            "A linguagem de programação C foi criada por Dennis Ritchie.",
            "O Python foi lançado por Guido van Rossum em 1991.",
            "Você consegue.",
            "Eu confio em você.",
            "Você é lindo",
            "Bora só mais um pouco",
            "Bora",
            "Eu não coloquei esse texto para te desconcentrar",
            "Eu não aguento mais escrever -__-",
            "Cara você tá indo longe",
            "Seria uma pena se você perdesse aqui",
            "Tá você ganhou pode parar agora",
            "Já deu né",
            "Lhe Declaro o melhor",
            "A linguagem Java foi criada por James Gosling.",
            "Grace Hopper desenvolveu o primeiro compilador.",
            "O COBOL foi desenvolvido por Grace Hopper.",
            "John von Neumann contribuiu para a arquitetura dos computadores.",
            "O Unix foi criado por Ken Thompson e Dennis Ritchie.",
            "A linguagem Ruby foi criada por Yukihiro Matsumoto.",
            "O primeiro microprocessador foi o Intel 4004.",
            "Linus Torvalds é o criador do Linux.",
            "O World Wide Web foi inventado por Tim Berners-Lee.",
            "A linguagem Perl foi criada por Larry Wall.",
            "O C++ foi desenvolvido por Bjarne Stroustrup.",
            "Você está indo muito bem!",
            "Continue assim!",
            "Você é incrível!",
            "Estou impressionado com você.",
            "Não desista agora!",
            "Cada passo é uma vitória.",
            "Sua dedicação é inspiradora.",
            "Você está quase lá!",
            "Mantenha o foco.",
            "Cada esforço vale a pena.",
            "Você é mais forte do que pensa.",
        ];

        startButton.addEventListener("click", startGame);

        function startGame() {
            startButton.style.display = "none";
            gameOver = false;
            playerY = 150;
            playerVelocity = 0;
            obstacles = [];
            frame = 0;
            score = 0;
            passedObstacles = 0;
            infoText.textContent = "";
            obstaclesContainer.innerHTML = "";
            player.style.top = playerY + "px";
            player.className = "player";
            update();
        }

        document.addEventListener("keydown", function(e) {
            if (e.key === " ") {
                playerVelocity = lift;
            }
        });

        class Obstacle {
            constructor() {
                this.gapHeight = 150; // Altura do espaço para passar
                this.minMargin = 50; // Margem mínima entre os obstáculos
                this.topHeight = Math.random() * (gameContainer.clientHeight - this.gapHeight - this.minMargin);
                this.bottomHeight = gameContainer.clientHeight - this.topHeight - this.gapHeight;
                this.x = gameContainer.clientWidth;
                this.width = 20;
                this.passed = false;

                this.topElement = document.createElement("div");
                this.topElement.classList.add("obstacle");
                this.topElement.style.height = this.topHeight + "px";
                this.topElement.style.width = this.width + "px";
                this.topElement.style.position = "absolute";
                this.topElement.style.backgroundColor = "yellow";
                this.topElement.style.left = this.x + "px";
                this.topElement.style.top = "0px";
                obstaclesContainer.appendChild(this.topElement);

                this.bottomElement = document.createElement("div");
                this.bottomElement.classList.add("obstacle");
                this.bottomElement.style.height = this.bottomHeight + "px";
                this.bottomElement.style.width = this.width + "px";
                this.bottomElement.style.position = "absolute";
                this.bottomElement.style.backgroundColor = "yellow";
                this.bottomElement.style.left = this.x + "px";
                this.bottomElement.style.bottom = "0px";
                obstaclesContainer.appendChild(this.bottomElement);
            }

            update() {
                this.x -= gameSpeed;
                this.topElement.style.left = this.x + "px";
                this.bottomElement.style.left = this.x + "px";

                if (!this.passed && this.x + this.width < player.getBoundingClientRect().left) {
                    this.passed = true;
                    passedObstacles++;
                    score++;
                    displayInfo();
                }
            }

            remove() {
                this.topElement.remove();
                this.bottomElement.remove();
            }
        }

        function update() {
            if (!gameOver) {
                playerVelocity += gravity;
                playerY += playerVelocity;
                player.style.top = playerY + "px";

                if (playerY + player.offsetHeight > gameContainer.clientHeight || playerY < 0) {
                    gameOver = true;
                    endGame();
                    return;
                }

                if (frame % 75 === 0) {
                    obstacles.push(new Obstacle());
                }

                obstacles.forEach((obstacle, index) => {
                    obstacle.update();

                    if (collision(player, obstacle)) {
                        gameOver = true;
                        endGame();
                        return;
                    }

                    if (obstacle.x + obstacle.width < 0) {
                        obstacle.remove();
                        obstacles.splice(index, 1);
                    }
                });

                frame++;
                requestAnimationFrame(update);
            }
        }

        function collision(player, obstacle) {
            const playerRect = player.getBoundingClientRect();
            const topRect = obstacle.topElement.getBoundingClientRect();
            const bottomRect = obstacle.bottomElement.getBoundingClientRect();

            return (
                (playerRect.left < topRect.left + topRect.width &&
                    playerRect.left + playerRect.width > topRect.left &&
                    playerRect.top < topRect.top + topRect.height) ||
                (playerRect.left < bottomRect.left + bottomRect.width &&
                    playerRect.left + playerRect.width > bottomRect.left &&
                    playerRect.top + playerRect.height > bottomRect.top)
            );
        }

        function endGame() {
            infoText.textContent = `Game Over! Obstáculos ultrapassados: ${passedObstacles}`;
            startButton.style.display = "block";
            startButton.textContent = "Jogar Novamente";
        }

        function displayInfo() {
            if (score > 0 && score <= texts.length) {
                infoText.textContent = texts[score - 1];
            } else {
                infoText.textContent = "";
            }
        }
    });

    // inicio parte 2.php
    (function() {
        document.addEventListener("DOMContentLoaded", function() {
            const geometryDashStartButton = document.getElementById("geometryDashStartButton");
            const geometryDashPlayer = document.getElementById("geometryDashPlayer");
            const geometryDashGame = document.getElementById("geometryDashGame");
            const geometryDashInfoText = document.getElementById("geometryDashInfoText");
            const geometryDashObstacles = document.getElementById("geometryDashObstacles");
            const geometryDashCounter = document.getElementById("geometryDashCounter");

            let playerY = geometryDashPlayer.offsetTop;
            let playerVelocity = 0;
            let gravity = 3.7;
            let jumpStrength = -25;
            let gameSpeed = 8;
            let obstacles = [];
            let gameOver = false;
            let frame = 0;
            let rotation = 0;
            let obstacleCount = 0;

            geometryDashStartButton.addEventListener("click", startGeometryDashGame);

            function startGeometryDashGame() {
                gameOver = false;
                playerY = geometryDashPlayer.offsetTop;
                playerVelocity = 0;
                obstacles = [];
                frame = 0;
                rotation = 0;
                obstacleCount = 0;
                geometryDashInfoText.textContent = "";
                geometryDashObstacles.innerHTML = "";
                geometryDashPlayer.style.top = playerY + "px";
                geometryDashPlayer.style.transform = "rotate(0deg)";
                geometryDashCounter.textContent = "Obstáculos ultrapassados: 0";
                geometryDashStartButton.style.display = "none";
                requestAnimationFrame(updateGeometryDashGame);
            }

            document.addEventListener("keydown", function(e) {
                if (e.key === " ") {
                    e.preventDefault();
                    playerVelocity = jumpStrength;
                    rotation += 360;
                    geometryDashPlayer.style.transform = `rotate(${rotation}deg)`;
                }

                if (e.key === "Enter") {
                    e.preventDefault();
                }
            });

            function updateGeometryDashGame() {
                if (!gameOver) {
                    playerVelocity += gravity;
                    playerY += playerVelocity;
                    if (playerY > geometryDashGame.offsetHeight - geometryDashPlayer.offsetHeight) {
                        playerY = geometryDashGame.offsetHeight - geometryDashPlayer.offsetHeight;
                        playerVelocity = 0;
                    }
                    geometryDashPlayer.style.top = playerY + "px";

                    if (frame % 60 === 0) {
                        createObstacle();
                    }

                    obstacles.forEach((obstacle, index) => {
                        obstacle.x -= gameSpeed;
                        obstacle.element.style.left = obstacle.x + "px";

                        if (obstacle.x + obstacle.width < 0) {
                            obstacle.element.remove();
                            obstacles.splice(index, 1);
                            obstacleCount++;
                            geometryDashCounter.textContent = "Obstáculos ultrapassados: " + obstacleCount;
                        }

                        if (collision(geometryDashPlayer, obstacle.element)) {
                            gameOver = true;
                            endGeometryDashGame();
                        }
                    });

                    frame++;
                    requestAnimationFrame(updateGeometryDashGame);
                }
            }

            function createObstacle() {
                const obstacle = document.createElement("div");
                obstacle.classList.add("obstacle");
                obstacle.style.left = geometryDashGame.offsetWidth + "px";
                obstacle.style.height = (Math.random() * 20 + 10) + "px";
                geometryDashObstacles.appendChild(obstacle);
                obstacles.push({
                    element: obstacle,
                    x: geometryDashGame.offsetWidth,
                    width: obstacle.offsetWidth
                });
            }

            function collision(player, obstacle) {
                const playerRect = player.getBoundingClientRect();
                const obstacleRect = obstacle.getBoundingClientRect();
                return (
                    playerRect.left < obstacleRect.left + obstacleRect.width &&
                    playerRect.left + playerRect.width > obstacleRect.left &&
                    playerRect.top < obstacleRect.top + obstacleRect.height &&
                    playerRect.top + playerRect.height > obstacleRect.top
                );
            }

            function endGeometryDashGame() {
                geometryDashInfoText.textContent = "Game Over";
                geometryDashStartButton.style.display = "block";
                geometryDashStartButton.textContent = "Jogar Novamente";
            }
        });
    })();

    // Sobrenos.php 

    document.addEventListener("DOMContentLoaded", function() {
        displayInitialMessage();
    });

    function displayInitialMessage() {
        const chatLog = document.getElementById('chat-log');
        const message = document.createElement('div');
        message.className = 'chat-message';
        message.textContent = "Bem-vindo ao Chat do Projeto PI! Pergunte sobre Mario, Henrique, Inacio, Pedro e Gustavo.";
        chatLog.appendChild(message);
    }

    function sendChat() {
        const input = document.getElementById('chat-input').value.trim();
        const chatLog = document.getElementById('chat-log');
        let response = generateResponse(input.toLowerCase());
        const message = document.createElement('div');
        message.className = 'chat-message';
        message.textContent = response;
        chatLog.appendChild(message);
        document.getElementById('chat-input').value = '';
        chatLog.scrollTop = chatLog.scrollHeight;
    }

    function generateResponse(input) {
        if (input.includes("mário") || input.includes("mario")) {
            return "Mario gosta de doces, adora programação, É de boa, Gosta de Armários.";
        } else if (input.includes("henrique")) {
            return "Henrique é um grande fã de futebol e basquete. Nascido em 16 de Setembro de 2008, atualmente Henrique tem 15 anos. Uma de suas paixões é o Vasco, clube no qual ele torce. Aos 15 anos, Henrique está cursando o primeiro ano do ensino Médio de informática. ";
        } else if (input.includes("inácio") || input.includes("inacio")) {
            return "Inacio gosta de programação, ouve rap de anime, joga com amigos e adora fofocas.";
        } else if (input.includes("pedro")) {
            return "Pedro come bem, usa muito o Instagram durante a aula e gosta muito do grupo de PI, vai no show do livinho.";
        } else if (input.includes("gustavo")) {
            return "Meu nome É Gustavo Rossetti, eu gosto muito de esportes e gosto de jogar fifa.";
        } else {
            return "Não conheço esse nome. Tente novamente escrevendo o nome de algum membro (Mario, Henrique, Inacio, Pedro).";
        }
    }

    // HLDAFAMA

    function handleClick(item) {
        var todasInfos = document.querySelectorAll('.galeria .info');
        todasInfos.forEach(function(info) {
            if (info !== item.querySelector('.info')) {
                info.style.visibility = 'hidden';
                info.style.opacity = '0';
            }
        });

        var todasImagens = document.querySelectorAll('.galeria img');
        todasImagens.forEach(function(imagem) {
            if (imagem !== item.querySelector('img')) {
                imagem.style.transform = "scale(1)";
            }
        });

        var info = item.querySelector('.info');
        var img = item.querySelector('img');
        if (info.style.visibility === 'visible') {
            info.style.visibility = 'hidden';
            info.style.opacity = '0';
            img.style.transform = "scale(1)";
        } else {
            info.style.visibility = 'visible';
            info.style.opacity = '1';
            img.style.transform = "scale(2)";
        }
    }

    function showModal(img, info) {
        var modal = document.getElementById('modal');
        var modalImg = document.getElementById('modal-img');
        var modalInfo = document.getElementById('modal-info');
        var modalAudio = document.getElementById('modal-audio');

        modal.style.display = 'block';
        modalImg.src = img.src;
        modalInfo.innerHTML = info.innerHTML;

        /* var audioSrc = '/audios/' + img.alt.replace(/ /g, '_').toLowerCase() + '.mp3';
         modalAudio.src = audioSrc;
         modalAudio.load();
         modalAudio.play(); */
    }

    function closeModal() {
        var modal = document.getElementById('modal');
        modal.style.display = 'none';
        var modalAudio = document.getElementById('modal-audio');
        modalAudio.pause();
        modalAudio.currentTime = 0;
    }


    window.addEventListener('load', function() {
        document.body.classList.add('loading');

        setTimeout(() => {
            document.getElementById('loading').style.opacity = '0';
            setTimeout(() => {
                document.getElementById('loading').style.display = 'none';
                document.body.classList.remove('loading');
            }, 2000);

            let imagens = document.querySelectorAll('.galeria img');
            let tempo = 0;
            imagens.forEach(img => {
                setTimeout(() => {
                    img.style.display = 'block';
                    img.classList.add('fadeIn');
                }, tempo += 500);
            });
        }, 2000);
    });


    // ANIMACAO
    /*
    document.addEventListener('DOMContentLoaded', () => {
        const characterDialogueElement = document.getElementById('character-dialogue');
        const characterElement = document.getElementById('character');

        const dialogues = [
            "Você sabia? FORTRAN foi a primeira linguagem de programação de alto nível, criada em 1957.",
            "Nos anos 1950, COBOL foi desenvolvida para negócios e administração.",
            "Python, uma das linguagens mais populares hoje, foi criada por Guido van Rossum e lançada em 1991.",
            "Java, famosa por sua portabilidade, foi lançada em 1995 por James Gosling na Sun Microsystems.",
            "A linguagem C, desenvolvida nos anos 1970 por Dennis Ritchie, é uma das mais influentes.",
            "JavaScript, criada por Brendan Eich em 1995, é usada para desenvolvimento web.",
            "Ruby, conhecida por sua simplicidade e produtividade, foi criada em 1995 por Yukihiro Matsumoto.",
            "PHP, uma linguagem popular para desenvolvimento web, foi criada por Rasmus Lerdorf em 1994.",
            "SQL, a linguagem padrão para gerenciamento de banco de dados, foi desenvolvida pela IBM nos anos 1970.",
            "Pascal, uma linguagem de programação criada por Niklaus Wirth, foi lançada em 1970.",
            "Ada, uma linguagem criada para uso em sistemas críticos, foi desenvolvida em 1980.",
            "Perl, uma linguagem conhecida por sua capacidade de processamento de texto, foi criada por Larry Wall em 1987.",
            "Swift, uma linguagem moderna para desenvolvimento iOS, foi lançada pela Apple em 2014.",
            "Go, uma linguagem criada pelo Google, foi lançada em 2009 para simplificar a programação de sistemas.",
            "Rust, uma linguagem focada em segurança e desempenho, foi lançada pela Mozilla em 2010.",
            "Kotlin, uma linguagem desenvolvida pela JetBrains, tornou-se popular para desenvolvimento Android após 2011.",
            "TypeScript, uma linguagem desenvolvida pela Microsoft, adiciona tipagem estática ao JavaScript.",
            "Scala, uma linguagem que combina programação funcional e orientada a objetos, foi criada em 2003.",
            "Haskell, uma linguagem puramente funcional, foi nomeada em homenagem ao matemático Haskell Curry.",
            "Lua, uma linguagem leve e embutida, foi desenvolvida no Brasil em 1993.",
            "Groovy, uma linguagem dinâmica para a JVM, foi criada em 2003.",
            "Elixir, uma linguagem funcional para a BEAM VM, foi criada em 2011.",
            "F#, uma linguagem funcional para .NET, foi criada pela Microsoft em 2005.",
            "Dart, uma linguagem desenvolvida pelo Google, é usada para desenvolvimento web e mobile.",
            "R, uma linguagem usada principalmente para estatísticas e análise de dados, foi criada nos anos 1990.",
            "MATLAB, uma linguagem para cálculos matemáticos, foi desenvolvida na década de 1980.",
            "Scheme, uma variante do Lisp, foi criada nos anos 1970.",
            "Erlang, uma linguagem para sistemas concorrentes, foi desenvolvida pela Ericsson nos anos 1980.",
            "Smalltalk, uma linguagem orientada a objetos, influenciou muitas linguagens modernas.",
            "C++, uma extensão da linguagem C, foi criada por Bjarne Stroustrup nos anos 1980.",
            "Objective-C, uma linguagem para desenvolvimento Apple, foi criada nos anos 1980.",
            "Prolog, uma linguagem lógica, é usada principalmente em inteligência artificial.",
            "ML, uma linguagem funcional, influenciou muitas outras linguagens modernas.",
            "OCaml, uma linguagem da família ML, é conhecida por seu poderoso sistema de tipos.",
            "Julia, uma linguagem para computação numérica, foi lançada em 2012.",
            "CoffeeScript, uma linguagem que compila para JavaScript, foi criada em 2009.",
            "VHDL, uma linguagem para descrição de hardware, foi criada nos anos 1980.",
            "Verilog, outra linguagem para descrição de hardware, foi criada nos anos 1980.",
            "BASIC, uma linguagem simples para iniciantes, foi criada nos anos 1960.",
            "Logo, uma linguagem educacional famosa por sua tartaruga gráfica, foi criada nos anos 1960.",
            "ALGOL, uma linguagem pioneira, influenciou muitas linguagens subsequentes.",
            "APL, uma linguagem conhecida por sua notação matemática, foi criada nos anos 1960.",
            "SNOBOL, uma linguagem para manipulação de strings, foi criada nos anos 1960.",
            "Simula, uma linguagem que introduziu a orientação a objetos, foi criada nos anos 1960.",
            "Forth, uma linguagem para sistemas embutidos, foi criada nos anos 1970.",
            "AWK, uma linguagem para processamento de texto, foi criada nos anos 1970.",
            "B, uma linguagem predecessora do C, foi criada nos anos 1960.",
            "BCPL, uma linguagem de sistema, influenciou o desenvolvimento do C.",
            "PL/I, uma linguagem de uso geral, foi criada nos anos 1960.",
            "Dylan, uma linguagem que combina programação funcional e orientada a objetos, foi criada nos anos 1990.",
            "Io, uma linguagem prototípica, foi criada nos anos 2000.",
            "Tcl, uma linguagem de script, foi criada nos anos 1980.",
            "REXX, uma linguagem de script para sistemas IBM, foi criada nos anos 1970.",
            "J, uma linguagem derivada do APL, foi criada nos anos 1990.",
            "Icon, uma linguagem para manipulação de strings, foi criada nos anos 1970.",
            "CLIPS, uma linguagem de sistema especialista, foi criada nos anos 1980.",
            "Lisp, uma das mais antigas linguagens de programação, foi criada nos anos 1950.",
            "Scratch, uma linguagem educacional para crianças, foi criada nos anos 2000.",
            "Alice, uma linguagem de programação educacional, foi criada nos anos 1990.",
            "Eiffel, uma linguagem orientada a objetos, foi criada nos anos 1980.",
            "Mercury, uma linguagem lógica funcional, foi criada nos anos 1990.",
            "Nim, uma linguagem moderna e eficiente, foi criada nos anos 2000.",
            "Crystal, uma linguagem similar ao Ruby, foi criada nos anos 2010.",
            "PureScript, uma linguagem funcional que compila para JavaScript, foi criada nos anos 2010.",
            "Rebol, uma linguagem para comunicação de dados, foi criada nos anos 1990.",
            "Red, uma linguagem de propósito geral, foi criada nos anos 2010.",
            "Xojo, uma linguagem para desenvolvimento multiplataforma, foi criada nos anos 1990.",
            "Pike, uma linguagem de script, foi criada nos anos 1990.",
            "NATURAL, uma linguagem de quarta geração, foi criada nos anos 1970.",
            "SPARK, uma linguagem derivada do Ada, foi criada para sistemas de alta integridade.",
            "Ring, uma linguagem moderna, foi criada nos anos 2010.",
            "IoT BASIC, uma linguagem para a Internet das Coisas, foi criada nos anos 2000.",
            "K, uma linguagem para análise de dados, foi criada nos anos 1990.",
            "Q, uma linguagem de consulta, foi criada nos anos 2000.",
            "Processing, uma linguagem para arte visual, foi criada nos anos 2000.",
            "V, uma linguagem simples e rápida, foi criada nos anos 2010.",
            "Monkey, uma linguagem para desenvolvimento de jogos, foi criada nos anos 2010.",
            "Gravity, uma linguagem embutida, foi criada nos anos 2010.",
            "Pawn, uma linguagem de script, foi criada nos anos 1990.",
            "Fantom, uma linguagem multiplataforma, foi criada nos anos 2000.",
            "Vale, uma linguagem para sistemas concorrentes, foi criada nos anos 2010.",
            "Elm, uma linguagem funcional para front-end, foi criada nos anos 2010.",
            "Vala, uma linguagem para GNOME, foi criada nos anos 2000.",
            "Factor, uma linguagem concatenativa, foi criada nos anos 2000.",
            "Neko, uma linguagem de script, foi criada nos anos 2000.",
            "Squirrel, uma linguagem embutida, foi criada nos anos 2000.",
            "Haxe, uma linguagem multiplataforma, foi criada nos anos 2000.",
            "SML, uma linguagem funcional, foi criada nos anos 1970.",
            "Modula-2, uma linguagem de sistema, foi criada nos anos 1970.",
            "Oberon, uma linguagem de sistema, foi criada nos anos 1980.",
            "Zig, uma linguagem para sistemas, foi criada nos anos 2010.",
            "Forth, uma linguagem stack-based, foi criada nos anos 1970.",
            "Nimrod, uma linguagem de sistema, foi criada nos anos 2000.",
            "Wolfram, uma linguagem para matemática, foi criada nos anos 1980.",
            "GDScript, uma linguagem para Godot, foi criada nos anos 2010.",
            "AngelScript, uma linguagem de script, foi criada nos anos 2000.",
            "GLSL, uma linguagem para shaders, foi criada nos anos 2000."
        ];

        function getRandomInt(min, max) {
            return Math.floor(Math.random() * (max - min)) + min;
        }

        function getRandomPosition() {
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const characterWidth = characterElement.offsetWidth;
            const characterHeight = characterElement.offsetHeight;
            const randomLeft = getRandomInt(0, windowWidth - characterWidth);
            const randomTop = getRandomInt(0, windowHeight - characterHeight);
            return { left: randomLeft, top: randomTop };
        }

        function showRandomDialogue() {
            const randomDialogue = dialogues[getRandomInt(0, dialogues.length)];
            characterDialogueElement.textContent = randomDialogue;

            const randomSize = getRandomInt(150, 300);
            characterElement.style.width = `${randomSize}px`;
            characterElement.style.height = 'auto';

            const randomPosition = getRandomPosition();
            characterElement.style.left = `${randomPosition.left}px`;
            characterElement.style.top = `${randomPosition.top}px`;

            if (Math.random() > 0.5) {
                characterElement.classList.add('red');
            } else {
                characterElement.classList.remove('red');
            }

            characterElement.classList.remove('hidden');
            characterElement.style.display = 'block';

            // Esconde o personagem após um tempo
            setTimeout(() => {
                characterElement.classList.add('hidden');
                characterElement.style.display = 'none';
            }, 5000); 
        }

        function startRandomAppearances() {
            setInterval(() => {
                showRandomDialogue();
            }, getRandomInt(10000, 30000)); 
        }

        startRandomAppearances();
    });
    */

    // script do button tema branco para escuro


    document.addEventListener('DOMContentLoaded', () => {
        const toggleButton = document.getElementById('theme-toggle');
        const body = document.body;


        if (localStorage.getItem('theme') === 'light') {
            body.classList.add('light-theme');
        } else {
            body.classList.add('dark-theme');
        }

        toggleButton.addEventListener('click', () => {
            if (body.classList.contains('light-theme')) {
                body.classList.replace('light-theme', 'dark-theme');
            } else {
                body.classList.replace('dark-theme', 'light-theme');

            }
        });
    });

    // TUTORIAL 

    const steps = [{
            content: "Bem-vindo ao tutorial de Assembly! Assembly é uma linguagem de baixo nível usada para programação de microprocessadores. Vamos começar com um comando simples.(CASO NECESSÁRIO USE O AJUDA, E NÃO ESQUEÇA DE DAR SPACE)",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("MOV AX, 1"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 1")) {
                    result = "AX = 1";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'MOV AX, 1' para mover o valor 1 para o registrador AX."
        },
        {
            content: "Agora vamos adicionar outro comando: ADD AX, 2. Isso adiciona 2 ao valor em AX.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("ADD AX, 2"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 1")) {
                    result = "AX = 1";
                }
                if (code.includes("ADD AX, 2")) {
                    result += "\nAX += 2 -> AX = 3";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'ADD AX, 2' para adicionar 2 ao valor em AX."
        },
        {
            content: "Finalmente, movemos o valor de AX para BX: MOV BX, AX.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("MOV BX, AX"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 1")) {
                    result = "AX = 1";
                }
                if (code.includes("ADD AX, 2")) {
                    result += "\nAX += 2 -> AX = 3";
                }
                if (code.includes("MOV BX, AX")) {
                    result += "\nBX = AX -> BX = 3";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'MOV BX, AX' para mover o valor de AX para BX."
        },
        {
            content: "Agora, vamos aprender a subtrair: SUB AX, 1. Isso subtrai 1 do valor em AX.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("SUB AX, 1"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 3")) {
                    result = "AX = 3";
                }
                if (code.includes("SUB AX, 1")) {
                    result += "\nAX -= 1 -> AX = 2";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'SUB AX, 1' para subtrair 1 do valor em AX."
        },
        {
            content: "Vamos aprender a multiplicar: MUL AX, 2. Isso multiplica o valor em AX por 2.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("MUL AX, 2"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 2")) {
                    result = "AX = 2";
                }
                if (code.includes("MUL AX, 2")) {
                    result += "\nAX *= 2 -> AX = 4";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'MUL AX, 2' para multiplicar o valor em AX por 2."
        },
        {
            content: "Vamos aprender a dividir: DIV AX, 2. Isso divide o valor em AX por 2.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("DIV AX, 2"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 4")) {
                    result = "AX = 4";
                }
                if (code.includes("DIV AX, 2")) {
                    result += "\nAX /= 2 -> AX = 2";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'DIV AX, 2' para dividir o valor em AX por 2."
        },
        {
            content: "Vamos aprender a mover entre diferentes registradores: MOV CX, AX. Isso move o valor de AX para CX.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("MOV CX, AX"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 2")) {
                    result = "AX = 2";
                }
                if (code.includes("MOV CX, AX")) {
                    result += "\nCX = AX -> CX = 2";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'MOV CX, AX' para mover o valor de AX para CX."
        },
        {
            content: "Finalmente, vamos aprender a usar um novo registrador: MOV DX, 5. Isso move o valor 5 para o registrador DX.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("MOV DX, 5"),
            effect: (code) => {
                let result = "DX = 5";
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'MOV DX, 5' para mover o valor 5 para o registrador DX."
        },
        {
            content: "Vamos aprender a incrementar: INC AX. Isso incrementa o valor em AX em 1.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("INC AX"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 2")) {
                    result = "AX = 2";
                }
                if (code.includes("INC AX")) {
                    result += "\nAX += 1 -> AX = 3";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'INC AX' para incrementar o valor em AX em 1."
        },
        {
            content: "Vamos aprender a decrementar: DEC AX. Isso decrementa o valor em AX em 1.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("DEC AX"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 3")) {
                    result = "AX = 3";
                }
                if (code.includes("DEC AX")) {
                    result += "\nAX -= 1 -> AX = 2";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'DEC AX' para decrementar o valor em AX em 1."
        },
        {
            content: "Vamos aprender a usar a instrução de comparação: CMP AX, 1. Isso compara o valor em AX com 1.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("CMP AX, 1"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 2")) {
                    result = "AX = 2";
                }
                if (code.includes("CMP AX, 1")) {
                    result += "\nCompara AX com 1";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'CMP AX, 1' para comparar o valor em AX com 1."
        },
        {
            content: "Vamos aprender a pular para uma instrução específica: JMP START. Isso pula para a instrução marcada com LABEL.",
            code: "; Digite seu código Assembly aqui",
            validate: (code) => code.includes("JMP START"),
            effect: (code) => {
                let result = "";
                if (code.includes("MOV AX, 0")) {
                    result = "AX = 0";
                }
                if (code.includes("JMP START")) {
                    result += "\nPula para START";
                }
                if (code.includes("ADD AX, 1")) {
                    result += "\nAX += 1 -> AX = 1";
                }
                return result || "Nenhum efeito detectado.";
            },
            help: "Use o comando 'JMP START' para pular para a instrução marcada com LABEL."
        }
    ];

    let currentStep = 0;

    const editor = ace.edit("assembly-editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/assembly_x86");
    editor.session.setTabSize(1);
    editor.setValue(steps[currentStep].code);

    function showStep() {
        const tutorialStep = document.getElementById('tutorial-step');
        tutorialStep.innerHTML = `<p>${steps[currentStep].content}</p>`;
        editor.setValue(steps[currentStep].code, -1);
        document.getElementById('output').innerHTML = '';
    }

    function runCode() {
        const code = editor.getValue();
        const output = document.getElementById('output');
        if (steps[currentStep].validate(code)) {
            output.innerHTML = `<pre>${steps[currentStep].effect(code)}</pre>`;
        } else {
            output.innerHTML = `<pre>Código incorreto. Por favor, tente novamente.</pre>`;
        }
    }



    function showHelp() {
        const output = document.getElementById('output');
        output.innerHTML = `<pre>${steps[currentStep].help}</pre>`;
    }


    editor.commands.addCommand({
        name: "ReplacSpace",
        bindKey: {
            win: "Space",
            mac: "Space"
        },
        exec: function(editor) {
            editor.insert("\t");
        }
    });

    document.getElementById('next-step').addEventListener('click', () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep();
        }
    });

    document.getElementById('run-code').addEventListener('click', runCode);
    document.getElementById('help-button').addEventListener('click', showHelp);

    showStep();

    // COMPUTADOR INTERATIVO

    document.addEventListener('DOMContentLoaded', () => {
        const parts = document.querySelectorAll('.part');
        const infoBox = document.getElementById('info-box');

        parts.forEach(part => {
            part.addEventListener('click', () => {
                const info = part.getAttribute('data-info');
                infoBox.textContent = info;
                infoBox.style.display = 'block';
            });
        });

        document.addEventListener('click', (event) => {
            if (!event.target.classList.contains('part')) {
                infoBox.style.display = 'none';
            }
        });
    });

    // TOOLTIP COM HOVER




    // PARTE DO PEDRO


    // CARROSEL

    let currentIndex = 0;

    function moveCarousel(step) {
        const carousel = document.querySelector('.carousel');
        const items = document.querySelectorAll('.carousel-item');
        currentIndex = (currentIndex + step + items.length) % items.length;
        const offset = -currentIndex * 100;
        carousel.style.transform = `translateX(${offset}%)`;
    }

    // Menu 

    $(document).ready(function () {
            var timeout;

            $(".Fechar").mouseover(function () {
                clearTimeout(timeout);
                $(".Abrir").css("max-height", "0"); 
                $(this).children(".Abrir").css("max-height", "500px"); 
            }).mouseleave(function () {
                var submenu = $(this).children(".Abrir");
                timeout = setTimeout(function() {
                    submenu.css("max-height", "0"); 
                }, 500); 
            });
        });

</script>