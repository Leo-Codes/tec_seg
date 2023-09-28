<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecSeg</title>

    <link rel="stylesheet" href="./src/styles/dashboard.css">
    <link rel="stylesheet" href="./src/styles/globalStyle.css">
</head>
<body>
    <div class="container">
        <div class="layout">
            <?php include('./src/components/header.html'); ?>
            <link rel="stylesheet" href="./src/styles/header.css">

            <div class="cards-container">
                <a href='riscos-perigos.php' class="card">
                    <div class="card-img">
                        <img src="./src/images/riscoxperigo.png" alt="">
                    </div>
                    <div class="card-description">
                        <div class="card-title">
                            <span>Riscos e Perigos</span>
                        </div>
                        <p>Veja as principais Diferenças entre Risco e Perigo.</p>
                    </div>
                </a>
                <a href='riscos-ocupacionais.php' class="card">
                    <div class="card-img">
                        <img src="./src/images/riscos-ocupacionais.jpg" alt="">
                    </div>
                    <div class="card-description">
                        <div class="card-title">
                            <span>Riscos Ocupacionais</span>
                        </div>
                        <p>Descubra os tipos de Riscos Ocupacionais e como são classificados.</p>
                    </div>
                </a>
                <a href='matriz-risco.php' class="card">
                    <div class="card-img">
                        <img src="./src/images/matriz-risco.jpg" alt="">
                    </div>
                    <div class="card-description">
                        <div class="card-title">
                            <span>Matriz de Riscos</span>
                        </div>
                        <p>Aprenda como funcionam as Matrizes de Riscos.</p>
                    </div>

                </a>
                <a href='passo-a-passo.php' class="card">
                    <div class="card-img">
                        <img src="./src/images/passo-a-passo2-removebg-preview.png" alt="">
                    </div>
                    <div class="card-description">
                        <div class="card-title">
                            <span>Passo a Passo</span>
                        </div>
                        <p>Um guia para Análises de Riscos</p>
                    </div>
                </a>
                <a href='medidas-prevencao.php' class="card">
                    <div class="card-img">
                        <img src="./src/svg/medidas-prevencao.svg" alt="">
                    </div>
                    <div class="card-description">
                        <div class="card-title">
                            <span>Medidas de Prevenção</span>
                        </div>
                        <p>Praticas e Normas para tornar o ambiente de trabalho mais seguro.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>