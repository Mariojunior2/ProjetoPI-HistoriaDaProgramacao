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