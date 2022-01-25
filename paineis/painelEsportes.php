<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estiloGeral.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AceEsporte | Esportes</title>
</head>

<body>
    <div id="header">
        <div id="logo">
            <a href="../index.html"> <img src="../img/logoMenu.png"> </a>
        </div>
        <nav id="menu">
            <p> <a href="../perfis/escolhaPerfil.php"> Cadastro </a> </p>
            <p> <a href="../paineis/painelNoticias.php"> Notícias </a> </p>
            <p> <a href="../atletas.php"> Atletas </a> </p>
            <p> <a href="../patrocinadores.php"> Patrocinadores </a> </p>
            <p> <a href="../clubes.php"> Clubes </a> </p>
            <p> <a href="./painelEsportes.php"> Esportes </a> </p>
            <?php
                session_start();
                include_once "../cadastro/Banco.php";
                $tipoUsuario = $_SESSION['tipoUsuario'];

                if($tipoUsuario == 'atleta'){
                    echo '<p> <a href="../perfis/perfilAtleta.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'amador'){
                    echo '<p> <a href="../perfis/perfilAmador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'patrocinador'){
                    echo '<p> <a href="../perfis/perfilPatrocinador.php"> Meu Perfil </a> </p>';
                }else if($tipoUsuario == 'clube'){
                    echo '<p> <a href="../perfis/perfilClube.php"> Meu Perfil </a> </p>';
                }
            ?>
            <p> <a href="../index.html"> Sair </a> </p>
        </nav>
    </div>

    <div id="mainEsporte">
        <div class="titleEsporte">
            <h1>Esportes</h1>
        </div>
        <div class="l1">

            <div class="textEsporte">
                <h4>Futebol</h4>
                <p> É considerado o esporte coletivo mais popular do mundo. Ele surgiu na Inglaterra no século XIX e foi trazido ao Brasil por Charles Miller no ano de 1894. O primeiro gol do Brasil em Copas do Mundo foi marcado pelo jogador Preguinho contra
                    a Iugoslávia, em 1930. O futebol é jogado em um campo retangular, a partida tem duração de 90 minutos divididos em dois tempos de 45 minutos. Os jogadores são divididos em duas equipes de 11 jogadores e o objetivo é marcar o máximo
                    de gols. Ganha o time que fizer mais gols até o fim da partida.
                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/futebol.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/volei.png">
            </div>
            <div class="textEsporte">
                <h4>Vôlei</h4>
                <p> O vôlei surgiu por volta de 1895 nos EUA e o objetivo inicial do esporte era ter pouco contato entre os jogadores. Mas foi a partir de 1950 que o esporte ganhou fama e começou a ganhar espaço na maioria dos países, principalmente os asiáticos.
                    Com o passar dos anos ele foi se modificando, ganhando novas regras e chegando até o que conhecemos hoje, com a disputa entre duas equipes, cada uma tendo 6 jogadores de cada lado. Sendo praticado em uma quadra com formato retangular
                    e possui uma rede na linha central. É considerado um dos esportes mais populares do mundo, objetivo do esporte é marcar ponto sobre o time adversário. Para se fazer o ponto o jogador deve arremessar a bola a cima da rede e fazer com
                    que ela toque no chão.
                </p>
            </div>
        </div>
        <div class="l1">
            <div class="textEsporte">
                <h4>Basquete</h4>
                <p>É um esporte coletivo criado no ano de 1891 nos Estados Unidos pelo professor de educação física James Naismith. E no ano de 1896 o professor Augusto Shaw introduziu o jogo no Brasil. O basquete é praticado em uma quadra retangular com
                    um cesto a cada extremidade, o objetivo do jogo é inserir a bola no cesto que corresponde a sua equipe. As equipes são divididas em duas, com cinco jogadores cada e vence a equipe que marcar mais pontos

                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/basquete.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/handebol.png">
            </div>
            <div class="textEsporte">
                <h4>Handebol</h4>
                <p> O Handebol foi criado em 1919 pelo professor de educação física Karl Schelenz em Berlim. E chegou ao Brasil durante a década de 1930 pelas mãos dos imigrantes alemães. O esporte é praticado em quadra. São necessárias duas equipes de sete
                    jogadores cada para realizar o jogo, a partida é composta por dois tempos de trinta minutos. O jogador movimenta a bola com as mãos por meio de passes até chegar à área do gol adversário, sendo permitidos somente três passos com a
                    bola na mão, depois o jogador tem que passá-la ou arremessá-la.

                </p>
            </div>

        </div>
        <div class="l1">
            <div class="textEsporte">
                <h4>Atletismo</h4>
                <p> O atletismo é a pratica esportiva mais antiga e é um conjunto de esportes formado por três modalidades sendo elas corridas, lançamentos e saltos. O atletismo surgiu na Grécia Antiga em 776 a.C., e veio ao Brasil nas ultimas décadas do
                    século XIX. As provas de atletismo são realizadas em estádios, no campo, em montanhas e na rua. As provas oficiais são corridas ( rasas, com barreiras, com obstáculos), marcha atlética, revezamentos, saltos, arremesso e lançamentos,
                    combinada. Em cada uma dessas provas há um total de 20 modalidades diferentes. Tais modalidades se diferenciam, por exemplo, pelo tamanho dos percursos e equipamentos utilizados.
                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/atletismo.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/ginastica.png">
            </div>
            <div class="textEsporte">
                <h4>Ginástica</h4>
                <p> A ginástica foi criada na Grécia, por volta de 2600 a.C. E foram os imigrantes alemães recém-chegados ao Rio Grande do Sul, em meados do século XIX que introduziram a ginástica no Brasil. A ginástica é um esporte que envolve a prática
                    de uma série de movimentos que requer força, flexibilidade e coordenação motora. Ela engloba varias modalidades, sendo elas ginástica geral, ginástica rítmica, trampolim, ginástica aeróbica e ginástica acrobática.

                </p>
            </div>

        </div>
        <div class="l1">
            <div class="textEsporte">
                <h4>Natação</h4>
                <p> A natação é praticada desde antes de Cristo, revelado por pinturas rupestres. Como esporte, a natação aparece em competições desde meados do século XIX. A natação chegou ao Brasil somente em 1897, quando foi fundado no Rio de Janeiro a
                    União de Regatas Fluminense, o primeiro campeonato foi realizado em 1898. Os estilos de nado são crawl, costas, peito e borboleta. Tendo também as modalidades fundamentadas na natação sendo elas pólo aquático, nado sincronizado, saltos
                    ornamentais e mergulho.

                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/natacao.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/boxe.png">
            </div>
            <div class="textEsporte">
                <h4>Boxe</h4>
                <p> Boxe é um esporte de combate no qual os lutadores usam luvas acolchoadas e utilizam as mãos para atacar e defender. Há registros longínquos da existência do boxe já no ano 3.000 a.C., no Egito, mas tomou cara de esporte na Grécia Antiga
                    no século VII a.C. E a primeira luta realizada no Brasil foi no ano de 1913. Uma luta de boxe consiste em um número variável de rounds (geralmente de nove a doze), cada um com três minutos, separados por intervalos de um minuto. A
                    luta é supervisionada por um árbitro dentro do ringue que controla a conduta dos lutadores e preza pelas suas seguranças. A luta de boxe termina quando o tempo total se esgota ou quando um dos lutadores fica impossibilitado de continuar
                    o combate.

                </p>
            </div>

        </div>

        <div class="l1">
            <div class="textEsporte">
                <h4>Judô</h4>
                <p> O judô foi criado no Japão no ano de 1882 pelo mestre Jigoro Kano, o judô chegou ao Brasil pelos imigrantes japoneses no século XX. Esse esporte de defesa pessoal tem como objetivos melhorar a coordenação motora, a concentração, a autoconfiança,
                    além de fortalecer o físico, o espírito e a mente. São necessárias duas pessoas para realizar a luta, o principal objetivo do judô é levar seu adversário para o chão. O combate entre os dois judocas acontece no tatame. A luta tem duração
                    de cinco minutos para os homens e quatro minutos para mulheres, Durante esse período, o combate entre dois judocas deverá apresentar um vencedor, entretanto, se isso não acontecer, é adicionado mais três minutos ao combate, momento
                    chamado de Golden Score (pontuação de ouro).

                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/judo.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/golfe.png">
            </div>
            <div class="textEsporte">
                <h4>Golfe</h4>
                <p> É um esporte que foi criado na Escócia por um alemão chamado Kolbe no ano de 1400. Foi trazido ao Brasil no final do século XIX pelos imigrantes britânicos. Golfe é considerado um esporte de elite por muitas pessoas. O esporte é praticado
                    em campos de grama ou em parques apropriados. O objetivo do jogo é arremessar a bola com o auxilio de um taco de ferro ou de madeira e acertar a bola em uma serie de buracos cavados no local do campo, o vencedor do jogo é aquele que
                    acertar mais buracos com o menor número de tacadas. O esporte pode ser jogado individualmente ou em grupos de dois a quatro jogadores. Geralmente o bom jogador é considerado como aquele que gasta quatro tacadas para colocar a bola
                    em cada buraco.


                </p>
            </div>

        </div>
        <div class="l1">
            <div class="textEsporte">
                <h4>Tênis</h4>
                <p>Uma das versões sobre a origem do tênis é a de que ele tenha surgido de jogos praticados por egípcios e persas na Antiguidade. Inicialmente era jogado com a mão. A raquete passou a ser usada apenas no século XVI. O jogo é praticado em
                    uma quadra entre dois oponentes ou duas duplas de oponentes. Marca-se pontos quando a bola toca no solo de qualquer parte da quadra adversária. O tênis possui uma pontuação que o subdivide em games/jogos e sets/partidas. Um game é
                    um conjunto de pontos e um set é um conjunto de games.
                </p>
            </div>
            <div class="fotoEsporte">
                <img src="../img/tenis.png">
            </div>
        </div>
        <div class="l2">
            <div class="fotoEsporte">
                <img src="../img/tenisMesa.png">
            </div>
            <div class="textEsporte">
                <h4>Tênis de Mesa</h4>
                <p> Podendo ser chamado também de ping-pong, foi criado na Inglaterra no século XIX por James Gibb. Os iniciantes da prática do esporte eram turistas ingleses que, mais ou menos em 1905, começaram a implantar o tênis de mesa no Brasil. O tênis
                    de mesa é uma adaptação do tênis de quadra. O jogo consiste na disputa de pontos entre dois jogadores ou duas duplas que golpeiam a bola com a raquete sobre a mesa, sendo o objetivo impedir que o adversário consiga realizar a mesma
                    ação. O atleta vencedor é aquele que obtém mais êxitos dentro do número de sets em disputa. Os sets são disputados e vence o primeiro jogador que atingir a marca de onze pontos ou dois pontos de vantagem, no caso de empate em dez pontos.



                </p>
            </div>

        </div>
    </div>
</body>

</html>