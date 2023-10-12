<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz de Riscos</title>

    <link rel="stylesheet" href="./src/styles/globalStyle.css">
    <link rel="stylesheet" href="./src/styles/matriz-risco.css">
</head>

<body>
    <div class="container">
        <div class="layout">
            <?php include('./src/components/header.html'); ?>
            <link rel="stylesheet" href="./src/styles/header.css">

            <?php include('./src/components/back-button.html'); ?>

            <div class="big-title">
                <h3 class="main-title">MATRIZ DE RISCOS</h3>
            </div>
            <span class='subtitle green-text-mark'>Avalie e Priorize os Perigos no Ambiente de Trabalho.</span>
            <div class="horizontal-divider"></div>
            <div class="main-content">
                <div class="articles">
                    <div class="action-buttons">
                        <p class="align-left">UTILIZE NOSSA <strong style="color:var(--primary-color);">PLANILHA
                                MODELO</strong> PARA SEGUIR AS INSTRUÇÕES:
                        </p>
                        <a href="./src/downloads/MODELO TECSEG - AR, PLANO DE AÇÃO.xlsx" class="modelo-excel">
                            <img src="./src/images/excel_icon.png" alt="">
                            <span>Baixe Nosso Modelo</span>
                        </a>
                    </div>
                    <div class="article">
                        <dl class="default-text">
                            <dt>1° Passo</dt>
                            <dd>Identificação de Riscos: Comece identificando todos os possíveis perigos ou riscos no local de trabalho. Isso
                                pode incluir coisas como máquinas perigosas, produtos químicos, escorregões e quedas,
                                entre outros.</dd>
                                <div class="list-image">
                                    <img src="./src/images/tutorial/matriz1passo.png" alt="" srcset="">
                                </div>
                            <dt>2° Passo</dt>
                            <dd>Avaliação de Riscos: Avalie cada risco em termos de quão provável é que ocorra e quão sérias seriam as
                                consequências se ocorressem. Use uma escala simples, como baixa, média e alta, para
                                classificar tanto a probabilidade quanto o impacto.</dd>
                                <div class="list-image">
                                    <img src="./src/images/tutorial/matriz2passo.png" alt="" srcset="">
                                </div>
                            <dt>Priorização:</dt>
                            <dd>Com base na avaliação, priorize os riscos. Riscos com alta probabilidade e alto impacto
                                devem ser tratados primeiro.</dd>
                                <div class="list-image">
                                    <img src="./src/images/tutorial/matriz3passo.png" alt="" srcset="">
                                </div>
                        </dl>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>