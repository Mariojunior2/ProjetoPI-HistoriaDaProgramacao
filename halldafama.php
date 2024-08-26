<?php
$audioFilePath1 = 'audios/Charles_babbage2.mp3';
$audioFilePath2 = 'audios/Claude_shannon2.mp3';
$audioFilePath3 = 'audios/Herman_hollerith2.mp3';
$audioFilePath4 = 'audios/John_atanasoff2.mp3';
$audioFilePath5 = 'audios/Thomas_flowers2.mp3';
$audioFilePath6 = 'audios/Ada_lovelace2.mp3';
$audioFilePath7 = 'audios/Alan_turing2.mp3';
$audioFilePath8 = 'audios/Donald_knuth2.mp3';
$audioFilePath9 = 'audios/Grace_hopper2.mp3';
$audioFilePath10 = 'audios/Linus_torvalds2.mp3';
$audioFilePath11 = 'audios/Tim_lee2.mp3';

?>
<div id="halldafama" class="animationtwo">
        <h2>Hall da Fama</h2>
        <h3 class="le">
            A programação teve diversos nomes importantes em sua história, que tal vc conhecer algumas dessas pessoas, basta você clicar na foto de cada um. 
        </h3>
        <div class="galeria">
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/charles_babbage_1.jpg" alt="Charles Babbage">
                <div class="info">
                    <h3>Charles Babbage - Pai dos computadores</h3>

                    <h4>Charles Babbage foi um cientista, matemático, filósofo, engenheiro mecânico e inventor inglês
                        que originou o conceito de um computador programável junto à Condessa de Lovelace, Augusta Ada
                        King.</h4>

                    <h4>Charles Babbage foi responsável pela criação das primeiras máquinas para automatizar cálculos
                        matemáticos e reduzir erros humanos. Também foi criador do primeiro computador programável do
                        mundo</h4>

                    <h4>Essa máquina, inventada por Babbage, funcionava com base nas instruções de cartões perfurados e
                        era movida a vapor. O projeto ainda possuía uma unidade central de processamento e memória
                        expansível separados um do outro, característica que persiste nos computadores modernos.</h4>
                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath1; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/claude_shannon_1.jpg" alt="Claude Shannon">
                <div class="info">
                    <h3>Claude Shannon - Pai da teoria da informação</h3>

                    <h4>Claude Elwood Shannon foi um matemático, engenheiro eletrônico e criptógrafo estadunidense,
                        conhecido como "o pai da teoria da informação". De 1932 a 1936, estudou matemática e engenharia
                        elétrica na Universidade de Michigan.</h4>

                    <h4>Foi graças às suas constatações fazendo uso do sistema binário, deixando os circuitos mais
                        simples e baratos, que Shannon provou a possibilidade de construir um computador totalmente
                        eletrônico.</h4>

                    <h4>A partir da descoberta da unidade básica de informação, Shannon apresentou ao mundo os bits que
                        conhecemos hoje. A sigla, que significa binary digit (dígito binário), corresponde justamente à
                        menor unidade de informação, e pode ser 0 ou 1</h4>
                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath2; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/herman_hollerith_1.jpg" alt="Herman Hollerith">
                <div class="info">
                    <h2>Herman Hollerith - Criador dos cartões perfurados</h2>

                    <h3>Herman Hollerith foi um empresário norte-americano e o principal impulsionador do leitor de
                        cartões perfurados, principal forma de entrada de informação nos computadores da época. Foi
                        também um dos fundadores da IBM, precursor do processamento de dados, e construiu o primeiro
                        computador mecânico.</h3>

                    <h3>A máquina de Hollerith foi utilizada para auxiliar no censo de 1890, reduzindo o tempo de
                        processamento de dados de sete anos, do censo anterior, para apenas dois anos e meio. Ela foi
                        também pioneira ao utilizar a eletricidade na separação, contagem e tabulação dos cartões. como
                        International Business Machines, ou IBM.</h3>
                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath3; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/john_vicent_atanasoff_1.jpg" alt="John Vicent Atanasoff">
                <div class="info">
                    <h3>John Vicent Atanasoff - Co-desenvolvedor do primeiro computador digital</h3>

                    <h4>John Vincent Atanasoff foi um matemático estadunidense de origem búlgara. John Atanasoff junto
                        com o seu aluno Clifford Berry foram os verdadeiros pais dos computadores modernos. Atanasoff
                        trabalhou no projeto de um computador eletrônico e, em 1939, obteve uma verba de US$ 650 para
                        construí-lo.</h4>

                    <h4>Em 14 de agosto de 1940, John Atanasoff, físico e professor da Universidade Estadual de
                        Iowa/EUA, concluía o documento com a especificação do seu projeto do computador Atanasoff-Berry
                        (ABC), tendo como objetivo a solução de problemas matemáticos do tipo “sistemas de equações
                        lineares”, sendo capaz de resolver sistemas com até 29 equações.</h4>

                    <h4>Pesando 315 Kg e ocupando o espaço equivalente ao de uma mesa de escritório, foi construído nos
                        porões da universidade utilizando 280 válvulas eletrônicas e 1,6Km de fios para as conexões
                        elétricas.</h4>
                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath4; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Thomas_Flowers_1.png" alt="Thomas Flowers">
                <div class="info">
                    <h3>Thomas Flowers - Desenvolveu o primeiro computador programável</h3>
                    <h4>Thomas Harold Flowers MBE era um engenheiro inglês do British General Post Office. Durante a
                        Segunda Guerra Mundial, Flowers projetou e construiu o Colossus, o primeiro computador
                        eletrônico programável do mundo, para ajudar a decifrar mensagens alemãs criptografadas.</h4>
                    <h4>O código envolvia uma rede complexa de rotores e caminhos elétricos, tornando-o altamente difícil de decifrar sem o conhecimento das definições e configurações específicas.</h4>

                        <h4>A construção do Colossus enfrentou inúmeros obstáculos e contratempos. O projeto exigiu avanços
                        tecnológicos inovadores e esforços de engenharia sem precedentes.</h4>

                        <h4>A máquina tinha mais de dois metros de altura e consistia em milhares de componentes
                        eletrônicos, incluindo tubos de vácuo como interruptores eletrônicos.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath5; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Ada_lovelace1.jpg" alt="Ada Lovelace">
                <div class="info">
                    <h3>Ada Lovelace</h3>
                    <h4>A cientista e matemática Ada Lovelace, nascida em 10 de dezembro de 1815, em Londres, Inglaterra, foi uma pioneira no campo da computação. No século XIX, ela reconheceu a importância dos computadores no futuro, não apenas como máquinas de calcular, mas como dispositivos capazes de resolver problemas matemáticos através da programação.</h4>
                    <h4>Ada Lovelace é atualmente conhecida como a "mãe da programação" devido às suas contribuições visionárias. Ada foi responsável por escrever o que veio a ser conhecido como o primeiro algoritmo de computador da história, projetado para ser processado por uma máquina.</h4>

                        <h4>Seu trabalho com Charles Babbage no projeto da Máquina Analítica foi fundamental, pois ela compreendeu e articulou o potencial das máquinas computacionais de uma maneira que ninguém havia feito antes. </h4>

                        <h4>Suas anotações e algoritmos lançaram as bases para o desenvolvimento da programação e da informática moderna, antecipando muitos conceitos que se tornariam essenciais no campo da computação.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath6; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>

            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Alan_turing1.jpg" alt="Alan Turing">
                <div class="info">
                    <h3>Alan Turing</h3>
                    <h4>Alan Mathison Turing foi um matemático, cientista da computação, lógico, criptoanalista, filósofo e biólogo teórico britânico. Nascido em 23 de junho de 1912, Turing é amplamente reconhecido como um dos pais da ciência da computação teórica.</h4>
                    <h4>Seu maior legado é a invenção da máquina de Turing, um modelo teórico que pode implementar todos os aspectos lógicos e matemáticos de um computador. </h4>

                        <h4>Este modelo é essencialmente um protótipo de um computador de uso geral, formalizando os conceitos de algoritmo e computação.</h4>

                        <h4>Turing foi fundamental para o desenvolvimento da ciência da computação teórica, uma área que se concentra nos aspectos mais abstratos e matemáticos da computação, e seus princípios continuam a influenciar o campo hoje.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath7; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>

            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Donald_knuth1.png" alt="Donald Knuth">
                <div class="info">
                    <h3>Donald Knuth</h3>
                    <h4>Donald Ervin Knuth é um renomado cientista da computação e professor emérito da Universidade de Stanford, autor do livro "The Art of Computer Programming," uma das principais referências na ciência da computação.</h4>
                    <h4>Nascido em 10 de janeiro de 1938, Knuth é considerado o pai da área de Análise de Algoritmos, fazendo significativas contribuições a diversos ramos da teoria da computação.</h4>

                        <h4>Knuth criou o sistema tipográfico TEX e o sistema de criação de fontes METAFONT, além de ser pioneiro do conceito de programação literária. </h4>

                        <h4>Ele também desenvolveu o conceito de números surreais. Seu trabalho é fundamental para o desenvolvimento e a compreensão de algoritmos e teoria da computação.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath8; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>

            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Grace_hopper1.jpg" alt="Grace Hopper">
                <div class="info">
                    <h3>Grace Murray Hopper</h3>
                    <h4>Grace Murray Hopper foi uma almirante e analista de sistemas da Marinha dos Estados Unidos, com uma carreira destacada nas décadas de 1940 e 1950. Nascida em 9 de dezembro de 1906, em Nova Iorque, Nova York, EUA, e falecida em 1 de janeiro de 1992, no Condado de Arlington, Virgínia, EUA, Hopper foi uma das pioneiras no campo da programação de computadores.</h4>
                    <h4>Ela foi uma das primeiras programadoras do computador Harvard Mark I em 1944 e criou a linguagem de programação de alto nível Flow-Matic, que serviu de base para a criação do COBOL. Além disso, Hopper desenvolveu a validação de software e o compilador para o COBOL como parte do programa de uniformização desse padrão para toda a Marinha dos Estados Unidos</h4>

                        <h4>Nos anos de 1970, ela defendeu a substituição dos grandes sistemas centralizados por redes de pequenos computadores distribuídos, antecipando a direção futura da computação.</h4>

                        <h4>A contribuição de Grace Hopper para a informática e a programação foi imensurável, influenciando o desenvolvimento de linguagens de programação e sistemas de computação modernos.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath9; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>

            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Linus_torvalds1.jpg" alt="Linus Torvalds">
                <div class="info">
                    <h3>Linus Benedict Torvalds</h3>
                    <h4>Linus Benedict Torvalds é um renomado engenheiro de software, nascido em 28 de dezembro de 1969, em Helsinque, Finlândia. Ele se naturalizou estado-unidense em 2010 e é amplamente conhecido como o criador do núcleo Linux.</h4>
                    <h4>Torvalds foi, por muito tempo, o desenvolvedor mais importante desse núcleo, que é a base de diversos sistemas operacionais importantes, incluindo Linux, Android e Chrome OS.</h4>

                        <h4>O nome Linus tornou-se sinônimo de inovação no mundo da computação, enquanto o nome Unix remete a um sistema operacional de grande porte cuja história está ligada ao Multics, projetado na década de 1960.</h4>

                        <h4>A trajetória de Torvalds e sua criação, o Linux, revolucionaram o desenvolvimento de software livre e aberto, impactando profundamente a tecnologia e a forma como utilizamos sistemas operacionais hoje em dia.</h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath10; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            <div class="item" onclick="showModal(this.querySelector('img'), this.querySelector('.info'));">
                <img src="assets/images/hall_da_fama/Tim_lee1.jpg" alt="Tim Lee">
                <div class="info">
                    <h3>Timothy John Berners-Lee </h3>
                    <h4>Sir Timothy John Berners-Lee KBE, OM, FRS é um físico britânico, cientista da computação e professor do MIT. Nascido em 8 de junho de 1955, em Londres, Reino Unido, é amplamente reconhecido como o criador da World Wide Web.</h4>
                    <h4>Ele fez a primeira proposta para a criação da WWW em 12 de março de 1989, revolucionando a forma como o mundo acessa e compartilha informações.</h4>

                        <h4>Sua contribuição para a tecnologia e a comunicação global tem sido monumental, moldando a sociedade moderna e facilitando a interconexão de pessoas e informações em uma escala sem precedentes.</h4>

                        <h4></h4>

                        <audio controls id="modal-audio">

                            <source src="<?php echo $audioFilePath11; ?>" type="audio/mpeg">
                                Seu navegador não suporta o elemento do áudio.
                        </audio>
                </div>
            </div>
            
        </div>

    <div id="modal" class="modal roboto">
        <span class="close" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <img id="modal-img" src="">
            <div id="modal-info" class="modal-info"></div>           
        </div>
    </div>
</div>

