<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Riscos</title>
    <link rel="stylesheet" href="./src/styles/riscos-ocupacionais.css">
    <link rel="stylesheet" href="./src/styles/globalStyle.css">
</head>

<body>
    <div class="container">
        <div class="layout">
            <?php include('./src/components/header.html'); ?>
            <link rel="stylesheet" href="./src/styles/header.css">
            <?php include('./src/components/back-button.html'); ?>
            
            <div class="banner">
                <div class="big-title">
                    <h2>RISCOS OCUPACIONAIS</h2>
                </div>
                <div class="subtitle">
                    <div class="red-dash"></div>
                    <img src="./src/images/warning_4201965.png" alt="">
                    <div class="red-dash"></div>
                </div>
            </div>

            <div class="introduction-panel">
                <div class="panel-img">
                    <img src="./src/images/8149473_3824251.jpg" alt="">
                </div>
                <div class="panel-info">
                    <p>A classificação dos riscos ocupacionais é uma maneira de entender e organizar
                         os diferentes tipos de perigos que podem estar presentes no local de trabalho.
                           Continue lendo para saber mais sobre os
                             principais tipos de riscos ocupacionais e como eles podem afetar a saúde e a segurança dos trabalhadores</p>
                </div>
            </div>

            <section class="cards-panel">
                <span>Clique nos Riscos abaixo para saber mais:</span>
                <div class="cards-container">
                    <a href="#fisico" class="card green">
                        <div class="card-img">
                            <img src="./src/images/risco-fisico.png" alt="">
                        </div>
                        <h2 class="card-title">FÍSICOS</h2>
                    </a>
                    <a href="#quimico" class="card red">
                        <div class="card-img">
                            <img src="./src/images/risco-quimico.png" alt="">
                        </div>
                        <h2 class="card-title">QUÍMICOS</h2>
                    </a>
                    <a href="#biologico" class="card brown">
                        <div class="card-img">
                            <img src="./src/images/risco-biologico.png" alt="">
                        </div>
                        <h2 class="card-title">BIOLÓGICOS</h2>
                    </a>
                    <a href="#ergonomico" class="card yellow">
                        <div class="card-img">
                            <img src="./src/images/risco-ergonomico.png" alt="">
                        </div>
                        <h2 class="card-title">ERGONÔMICO</h2>
                    </a>
                    <a href="#acidente" class="card blue">
                        <div class="card-img">
                            <img src="./src/images/risco-acidente.png" alt="">
                        </div>
                        <h2 class="card-title">DE ACIDENTE</h2>
                    </a>
                </div>
            </section>

            <section class="risco green">
                <div id="fisico" class="risco-title white-shadow">
                    <h2>RISCO FÍSICO</h2>
                </div>
                <div class="risco-content">
                    <div class="risco-img">
                        <img src="./src/images/exposicao-sol2.jpg" alt="">
                        <img src="./src/images/exposicao-som-2.jpg" alt="">
                        <img src="./src/images/exposicao-frio.jpg" alt="">
                        <img src="./src/images/exposicao-luz.jpg" alt="">
                    </div>
                    <div class="risco-text">
                        <!-- <h3>Risco Físico</h3> -->
                        <p>Pense em coisas que você pode ver ou sentir no ambiente de trabalho, como barulho muito alto, temperaturas extremas (calor ou frio), luz intensa ou falta de luz, e até mesmo coisas que vibram muito. Essas situações podem afetar o corpo ou os sentidos das pessoas.
                        </p>
                    </div>
                </div>
                

            </section>

            <section class="risco red">
                <div id="quimico" class="risco-title white-shadow">
                    <h2>RISCO QUÍMICO</h2>
                </div>
                <div class="risco-content">
                    <div class="risco-img">
                        <img src="./src/images/exposicao-quimico.jpg" alt="">
                        <img src="./src/images/exposicao-quimico2.png" alt="">
                        <img src="./src/images/exposicao-quimico3.jpg" alt="">
                        <img src="./src/images/exposicao-quimico4.jpg" alt="">
                    </div>
                    <div class="risco-text">
                        <!-- <h3>Risco Físico</h3> -->
                        <p>O risco químico no trabalho está relacionado a substâncias químicas que podem ser encontradas no ambiente de trabalho e que têm potencial de causar danos à saúde dos trabalhadores. Esses danos ocorrerão se você respirar vapores tóxicos, tocar substâncias corrosivas ou até mesmo engolir acidentalmente produtos químicos perigosos.
                        </p>
                    </div>
                </div>
                

            </section>

            <section class="risco brown">
                <div id='biologico' class="risco-title white-shadow">
                    <h2>RISCO BIOLÓGICO</h2>
                </div>
                <div class="risco-content">
                    <div class="risco-img">
                        <img src="./src/images/exposicao-biologico.jpg" alt="">
                        <img src="./src/images/exposicao-biologico2.jpg" alt="">
                        <img src="./src/images/exposicao-biologico3.jpg" alt="">
                        <img src="./src/images/exposicao-biologico4.jpg" alt="">
                    </div>
                    <div class="risco-text">
                        <!-- <h3>Risco Físico</h3> -->
                        <p>O risco biológico está relacionado a  microrganismos que podem causar doenças. Ele é chamado de "biológico" porque envolve seres vivos, como vírus e bactérias, que podem afetar a saúde dos trabalhadores. Esse risco ocorre em ambientes de trabalho onde há exposição a sangue, fluidos corporais, tecidos ou materiais biológicos que podem conter agentes infecciosos.
                        </p>
                    </div>
                </div>
                

            </section>

            <section class="risco yellow">
                <div id="ergonomico" class="risco-title white-shadow">
                    <h2>RISCO ERGONÔMICO</h2>
                </div>
                <div class="risco-content">
                    <div class="risco-img">
                        <img src="./src/images/exposicao-ergonomico.jpg" alt="">
                        <img src="./src/images/exposicao-ergonomico2.jpg" alt="">
                        <img src="./src/images/exposicao-ergonomico3.jpg" alt="">
                        <img src="./src/images/exposicao-ergonomico5.jpg" alt="">
                    </div>
                    <div class="risco-text">
                        <!-- <h3>Risco Físico</h3> -->
                        <p>Pense em sentar em uma cadeira desconfortável por muitas horas. Isso pode te deixar com dores nas costas, no pescoço e até te causar estresse, certo? Esse é um exemplo de risco ergonômico. Ele tem que ver como o trabalho é organizado, como você se posiciona e movimenta. Se seu ambiente de trabalho não for confortável e adequado, pode afetar sua saúde física e mental ao longo do tempo.
                        </p>
                    </div>
                </div>
                

            </section>

            <section class="risco blue">
                <div id="acidente" class="risco-title white-shadow">
                    <h2>RISCO DE ACIDENTE</h2>
                </div>
                <div class="risco-content">
                    <div class="risco-img">
                        <img src="./src/images/exposicao-sol2.jpg" alt="">
                        <img src="./src/images/exposicao-som-2.jpg" alt="">
                        <img src="./src/images/exposicao-frio.jpg" alt="">
                        <img src="./src/images/exposicao-luz.jpg" alt="">
                    </div>
                    <div class="risco-text">
                        <!-- <h3>Risco Físico</h3> -->
                        <p> Imagine uma situação em que você está trabalhando com ferramentas afiadas, mas não está usando equipamentos de proteção. Se você se machucar, isso é um exemplo de risco de acidente. Esse tipo de risco está relacionado a situações em que você pode se ferir de maneira súbita e imprevista, como quedas, cortes, batidas, entre outros.
                            Em resumo, esses tipos de riscos na Segurança do Trabalho são como "armadilhas" que podem acontecer no ambiente de trabalho e afetar a sua saúde e segurança.
                        </p>
                    </div>
                </div>
                

            </section>


        </div>
    </div>

</body>

</html>