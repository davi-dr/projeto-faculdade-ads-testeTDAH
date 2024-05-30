<?php
// Iniciar a sessão
// session_start();

require_once "./conexao.php";


// Verificar se o usuário está logado
if (isset($_SESSION["id"])) {
    // Se o usuário estiver logado, exibe o nome dele
    echo '<form action="logout.php" method="post">';
    echo '<button type="submit">$_SESSION["nome"]</button>';
    echo '</form>';
    // Se o usuário estiver logado, exibir o botão "Sair"
    //echo '<form action="logout.php" method="post">';
    //echo '<button type="submit">Sair</button>';
    //echo '</form>';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TDAH</title>
</head>

<body>

    <?php
    require_once "./headerView.php";
    ?>


    <main>

        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Transtorno de Déficit de Atenção e Hiperatividade (TDAH)</h4>
                <h1 class="text-h1">TDAH em Adultos</h1>
                <p>O TDAH é comumente associado a crianças, mas também afeta uma parcela relevante dos adultos. A identificação de TDAH em adultos pode ser um desafio, já que os sintomas podem ser interpretadas como características da personalidade, manifestações da ansiedade ou de outras condições. Além disso, muitos adultos aprenderam a compensar suas dificuldades ao longo dos anos, o que torna mais difícil reconhecer o transtorno.
                </p>
                <!-- <button type="submit" class="home-btn">Teste</button> -->

                <button type="submit" class="home-btn" onclick="verificarLogin()">Teste</button>

                <!-- <a href="./testeView.php" class="home-btn">Teste</a> -->
            </div>

        </section>

        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Transtorno de Déficit de Atenção e Hiperatividade (TDAH)</h4>
                <h1 class="text-h1">SINTOMAS</h1>
                <p><b>Desatenção:</b> se distrai facilmente, comete erros por descuido, parece não escutar quando alguém lhe dirige a palavra, frequentemente tem dificuldade de finalizar atividades, reluta em se envolver em tarefas que exijam esforço mental prolongado, tem dificuldades em organização, esquece objetos e compromissos.</p>

                <p><b>Hiperatividade/impulsividade:</b> fala demais, remexe ou batuca as mãos ou pés, tem dificuldade de permanecer sentado por longos períodos, responde sem ouvir toda a pergunta, intromete-se, toma decisões importantes sem pensar nas consequências futuras.</p>
                <!-- <a href="#" class="home-btn">Order yours</a> -->
            </div>

        </section>

        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Transtorno de Déficit de Atenção e Hiperatividade (TDAH)</h4>
                <h1 class="text-h1">FATOS IMPORTANTES</h1>
                <ul>
                    <li>Não há uma única causa de TDAH, mas sabe-se que há uma combinação de fatores genéticos e ambientais.</li>
                    <li>A prevalência de TDAH é de 5% em crianças e adolescentes e de 2,5% em adultos.</li>
                    <li>Há uma grande heterogeneidade na apresentação dos sintomas em cada indivíduo com TDAH.</li>
                    <li>Os sintomas de desatenção podem ser predominantes, assim como os de hiperatividade/impulsividade, ou ambos podem estar presentes.</li>
                    <li>O TDAH pode aparecer em diferentes níveis de gravidade (leve, moderada, grave).</li>
                    <li>Muito frequentemente outros transtornos psiquiátricos estão presentes.</li>
                </ul>
            </div>
        </section>

        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Transtorno de Déficit de Atenção e Hiperatividade (TDAH)</h4>
                <h1 class="text-h1">PREJUÍZOS</h1>
                <ul>
                    <li>Menores índices de sucesso acadêmico.</li>
                    <li>Dificuldade na gestão do tempo e na organização das atividades.</li>
                    <li>Falta de motivação para estudar.</li>
                    <li>Tendencia a procrastinação.</li>
                    <li>Dificuldade nos relacionamentos interpessoais.</li>
                    <li>Problema de autoestima.</li>
                    <li>Maior risco de abuso de álcool, tabaco o outras substancias.</li>
                    <li>Maior risco de acidentes automobilísticos.</li>
                    <li>Maior risco de gravidez não planejada e de doenças sexualmente transmissíveis.</li>

                </ul>
            </div>
        </section>

        <section class="home">
            <div class="home-text">
                <h4 class="text-h4">Transtorno de Déficit de Atenção e Hiperatividade (TDAH)</h4>
                <h1 class="text-h1">TRATAMENTO</h1>
                <p>O tratamento ideal para o TDAH combina abordagens psicoterapêuticas e medicamentosas. A Terapia Cognitivo-Comportamental (TCC) é frequentemente utilizada para auxiliar os pacientes a desenvolverem habilidades de gerenciamento de tempo, organização e comunicação. Além disso, os psicoestimulantes, como Metilfenidato e Lisdexanfetamina, são comumente prescritos e demonstram rápida eficácia na melhora dos sintomas.</p>
                <!-- <a href="#" class="home-btn">Order yours</a> -->
            </div>

        </section>
    </main>

    <script src="script.js"></script>


    <script>
        // Verificar se a variável de sessão login_success está definida
        <?php if (isset($_SESSION["login_success"])) : ?>
            // Exibir alerta de "Login com sucesso"
            alert("Login com sucesso!");
            // Limpar a variável de sessão após exibir o alerta
            <?php unset($_SESSION["login_success"]); ?>
        <?php endif; ?>
    </script>


    <script>
        function verificarLogin() {

            var isLogged = true;

            if (isLogged) {
                // Se o usuário estiver logado, redirecione-o para a página de teste
                window.location.href = "./testeView.php";
            } else {
                // Se o usuário não estiver logado, exiba uma mensagem de aviso
                alert("Você precisa estar logado para fazer o teste.");
            }
        }
    </script>

</body>

</html>