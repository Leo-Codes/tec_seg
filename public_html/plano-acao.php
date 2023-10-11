<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>plano de Ação</title>

    <link rel="stylesheet" href="./src/styles/globalStyle.css">
    <link rel="stylesheet" href="./src/styles/plano-acao.css">
</head>

<body>
    <div class="container">
        <div class="layout">
            <?php include('./src/components/header.html'); ?>
            <link rel="stylesheet" href="./src/styles/header.css">
            <?php include('./src/components/back-button.html'); ?>

            <div class="big-title">
                <h2 class="main-title">PLANO DE AÇÃO</h2>
            </div>
            <span class='subtitle green-text-mark'>METODOLOGIA: 5W + 2H</span>
            <div class="horizontal-divider"></div>
            <div class="main-content">
                <div class="articles">
                    <div class="article">
                        <!-- <img src="./src/images/passo-a-passo2-removebg-preview.png" alt=""> -->
                        <p class="align-left default-text grey-border">O plano de ação utilizando o método <strong>"5W e 2H"</strong> é uma
                            ferramenta simples e eficaz que ajuda a organizar as ações a serem tomadas em uma análise de
                            riscos.
                            Os "5W" representam as perguntas em inglês que começam com a letra "W": What <strong>(O
                                que)</strong>, Why <strong>(Por que)</strong>, Who <strong>(Quem)</strong>, Where
                            <strong>(Onde)</strong> e When <strong>(Quando)</strong>, enquanto os "2H" representam How
                            <strong>(Como)</strong> e How Much <strong>(Quanto)</strong>.
                        </p>
                        <dl class="article-text">
                            <dt>What (O que) :</dt>
                            <dd>Esta pergunta se refere à ação específica que precisa ser realizada para mitigar ou eliminar um risco. É uma descrição clara do que precisa ser feito. 
                                Por exemplo, “Implementar procedimentos de segurança para o uso de equipamentos elétricos”.</dd>
                            <div class="list-image">
                                <!-- <img src="./src/images/passo1.png" alt="" srcset=""> -->
                            </div>
                            <dt>Why (Por que):</dt>
                            <dd>Aqui, você deve explicar por que a ação é necessária. Qual é o motivo para realizar essa ação? 
                                Por exemplo, "Para reduzir o risco de choque elétrico e garantir a segurança dos trabalhadores."</dd>
                            <div class="list-image">
                                <!-- <img src="./src/svg/passo2.svg" alt="" srcset=""> -->
                            </div>
                            <dt> Who (Quem):</dt>
                            <dd>Indica quem será responsável pela execução da ação. É importante designar uma pessoa ou equipe específica para garantir que a tarefa seja realizada. 
                                Por exemplo, "O departamento de Segurança do Trabalho será responsável pela implementação dos procedimentos."</dd>
                            <div class="list-image">
                                <!-- <img src="./src/svg/passo3.svg" alt="" srcset=""> -->
                            </div>
                            <dt>Where (Onde):</dt>
                            <dd> Especifique o local onde a ação será realizada. Pode estar numa área específica da empresa ou em todas as instalações. 
                                Por exemplo, "A implementação dos procedimentos será em todas as áreas onde os equipamentos elétricos são utilizados."</dd>
                            <div class="list-image">
                                <!-- <img src="./src/images/passo4alt.png" alt="" srcset=""> -->
                            </div>
                            <div class="horizontal-divider"></div>
                            <dt>How (Como) :</dt>
                            <dd>Explique como a ação será realizada, incluindo os passos e métodos necessários. Isso fornece orientações detalhadas sobre como executar uma tarefa. 
                                Por exemplo, "Os procedimentos serão desenvolvidos com a colaboração dos funcionários, revisados ​​por especialistas em segurança elétrica e depois de incorporados ao treinamento."</dd>
                            <div class="list-image">
                                <!-- <img src="./src/images/passo4alt.png" alt="" srcset=""> -->
                            </div>
                            <dt>How Much (Quanto) :</dt>
                            <dd> Indique os recursos necessários para concluir a ação, como orçamento, mão de obra e materiais. 
                                Por exemplo, "Será alocado um orçamento de R$ 10.000 para a implementação dos procedimentos e aquisição de equipamentos de segurança."</dd>
                            <div class="list-image">
                                <!-- <img src="./src/images/passo4alt.png" alt="" srcset=""> -->
                            </div>
                        </dl>
                        
                    </div>
                </div>
                <table cellspacing="8px">
                    <thead>
                        <tr>
                            <th>SITUAÇÃO</th>
                            <th>WHAT (O QUE)</th>
                            <th>WHY (PORQUE)</th>
                            <th>WHO (QUEM)</th>
                            <th>WHERE (ONDE)</th>
                            <th>WHEN (QUANDO)</th>
                            <th>HOW (COMO)</th>
                            <th>HOW MUCH (QUANTO $)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="primary-column">Buracos nas lajes em um canteiro de obras de um edifício</td>
                            <td>Preenchimento dos buracos nas lajes</td>
                            <td>Para evitar acidentes e quedas de trabalhadores e equipamentos.</td>
                            <td>Uma equipe de construção, especialmente os pedreiros e operadores de equipamentos pesados.</td>
                            <td>Em todas as áreas do canteiro de obras onde existem buracos nas lajes.</td>
                            <td>O preenchimento deve ser realizado imediatamente após a identificação dos buracos.</td>
                            <td>Os buracos serão preenchidos com concreto fresco e reforçados com graus de segurança temporárias.</td>
                            <td>Será alocado um orçamento adicional de emergência para cobrir os custos do material e da mão de obra necessária.</td>
                        </tr>
                        <tr>
                            <td class="primary-column">Trabalho sendo realizado em um andaime sem sinalização</td>
                            <td>Instalação de sinalização adequada no andaime.</td>
                            <td>Para alertar os trabalhadores e outras pessoas sobre o perigo e promover a segurança no local de trabalho.</td>
                            <td>A equipe responsável pela segurança do trabalho e os trabalhadores que utilizam o andaime.</td>
                            <td>Em todos os andaimes utilizados no canteiro de obras.</td>
                            <td>A sinalização deve ser instalada antes que qualquer trabalho seja realizado no andaime.</td>
                            <td>Serão estabelecidos sinais de advertência e cones de segurança nas áreas próximas ao andaime, alertando para a proibição de acesso não autorizado.</td>
                            <td>O custo da sinalização estará incluído no orçamento de segurança do trabalho da obra.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</body>

</html>