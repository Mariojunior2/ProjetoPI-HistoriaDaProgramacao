/*
document.addEventListener("DOMContentLoaded", function () {
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

    document.addEventListener("keydown", function (e) {
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
}); */





// JOGO DO QUADRADO 


/* (function () {
    document.addEventListener("DOMContentLoaded", function () {
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

        document.addEventListener("keydown", function (e) {
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
            obstacles.push({ element: obstacle, x: geometryDashGame.offsetWidth, width: obstacle.offsetWidth });
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
})(); */







