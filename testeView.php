<?php
require_once "./conexao.php";
require_once "./usuario.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="styleTestando.css">
    <title>TDAH</title>
</head>

<body>

    <?php
    require_once "./headerView.php";
    ?>

    <main>
<?php 
$id = isset($_POST["id"]) ? $_POST["id"] : null;
$verify = $_SERVER["REQUEST_METHOD"] == "POST";

// Verifica se o formulário foi enviado
if ($verify) {
    if (isset($_SESSION["id"])) {
    if (isset($_POST["pergunta1"])) {
        // Obtém o valor do input
        $resposta_pergunta1 = $_POST["pergunta1"];
    }
    if (isset($_POST["pergunta2"])) {
        $resposta_pergunta2 = $_POST["pergunta2"];
    }
    if (isset($_POST["pergunta3"])) {
        $resposta_pergunta3 = $_POST["pergunta3"];
    }
    if (isset($_POST["pergunta4"])) {
        $resposta_pergunta4 = $_POST["pergunta4"];
    }
    if (isset($_POST["pergunta5"])) {
        $resposta_pergunta5 = $_POST["pergunta5"];
    }
    if (isset($_POST["pergunta6"])) {
        $resposta_pergunta6 = $_POST["pergunta6"];
    }
    if (isset($_POST["pergunta7"])) {
        $resposta_pergunta7 = $_POST["pergunta7"];
    }
    if (isset($_POST["pergunta8"])) {
        $resposta_pergunta8 = $_POST["pergunta8"];
    }
    if (isset($_POST["pergunta9"])) {
        $resposta_pergunta9 = $_POST["pergunta9"];
    }
    if (isset($_POST["pergunta10"])) {
        $resposta_pergunta10 = $_POST["pergunta10"];
    }
    if (isset($_POST["pergunta11"])) {
        $resposta_pergunta11 = $_POST["pergunta11"];
    }
    if (isset($_POST["pergunta12"])) {
        $resposta_pergunta12 = $_POST["pergunta12"];
    }
    if (isset($_POST["pergunta13"])) {
        $resposta_pergunta13 = $_POST["pergunta13"];
    }
    if (isset($_POST["pergunta14"])) {
        $resposta_pergunta14 = $_POST["pergunta14"];
    }
    if (isset($_POST["pergunta15"])) {
        $resposta_pergunta15 = $_POST["pergunta15"];
    }
    if (isset($_POST["pergunta16"])) {
        $resposta_pergunta16 = $_POST["pergunta16"];
    }
    if (isset($_POST["pergunta17"])) {
        $resposta_pergunta17 = $_POST["pergunta17"];
    }
    if (isset($_POST["pergunta18"])) {
        $resposta_pergunta18 = $_POST["pergunta18"];
    }
    
    $calcularPontuacao = calcularPontuacao($resposta_pergunta1, $resposta_pergunta2, $resposta_pergunta3, $resposta_pergunta4, $resposta_pergunta5, $resposta_pergunta6);
} else {
    echo "<script>alert('Faça login para realizar o teste');</script>";
}
}

?>
        <section>
            <h2>Teste online para avaliar, em adultos ou jovens maiores de 16 anos, sintomas de déficit de atenção e
                hiperatividade (TDAH), por meio da <a href="asrs-18-tdah-adultos.pdf" target="_blank">Escala
                    ASRS-18.</a></h2>

            <p>Este teste<b> Não substitui</b> consulta com psicólogo(a), psiquiatra ou outro especialista. Este recurso
                pode ser utilizado como uma triagem inicial, um ponto de partida para chegar a um possível diagnóstico.
            </p>

            <p>Marque o item que corresponde a como você se sentiu e se comportou nos últimos <strong>seis
                    meses.</strong></p>

            <p><b>Parte A</b>: As seis perguntas da PARTE A são um
                indicativo maior do transtorno e, portanto, consideradas as mais importantes do
                exame.</p>

            <form class="form-test" method="POST">
            <p>1. Com que frequência você comete erros por descuido ou falta de atenção quando tem de trabalhar num projeto chato ou difícil?</p>
            <div>
                <input type="radio" name="pergunta1" id="p1_nunca" value="nunca" required>
                <label for="p1_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta1" id="p1_raramente" value="raramente" required>
                <label for="p1_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta1" id="p1_as_vezes" value="as vezes" required>
                <label for="p1_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta1" id="p1_frequentemente" value="frequentemente" required>
                <label for="p1_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta1" id="p1_muito_frequentemente" value="muito frequentemente" required>
                <label for="p1_muito_frequentemente">Muito frequentemente</label>
            </div>
        </section>

        <section>
                <p>2. Com que frequência você tem dificuldade para manter a atenção quando está fazendo algo chato ou
                    repetitivo ?</p>
            <div>
                <input type="radio" name="pergunta2" id="p2_nunca" value="nunca" required>
                <label for="p2_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta2" id="p2_raramente" value="raramente" required>
                <label for="p2_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta2" id="p2_as_vezes" value="as vezes" required>
                <label for="p2_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta2" id="p2_frequentemente" value="frequentemente" required>
                <label for="p2_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta2" id="p2_muito_frequentemente" value="muito frequentemente" required>
                <label for="p2_muito_frequentemente">Muito frequentemente</label>
            </div>

        </section>

        <section>

            <p>3. Com que frequência você tem dificuldade para se concentrar no que as pessoas dizem, mesmo quando
                elas estão falando diretamente com você ?</p>
            <div>
                <input type="radio" name="pergunta3" id="p3_nunca" value="nunca" required>
                <label for="p3_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta3" id="p3_raramente" value="raramente" required>
                <label for="p3_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta3" id="p3_as_vezes" value="as vezes" required>
                <label for="p3_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta3" id="p3_frequentemente" value="frequentemente" required>
                <label for="p3_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta3" id="p3_muito_frequentemente" value="muito frequentemente" required>
                <label for="p3_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>4. Com que frequência você deixa um projeto pela metade depois de já ter feito as partes mais
                difíceis, desafiadoras ou interessantes ?</p>
            <div>
                <input type="radio" name="pergunta4" id="p4_nunca" value="nunca" required>
                <label for="p4_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta4" id="p4_raramente" value="raramente" required>
                <label for="p4_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta4" id="p4_as_vezes" value="as vezes" required>
                <label for="p4_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta4" id="p4_frequentemente" value="frequentemente" required>
                <label for="p4_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta4" id="p4_muito_frequentemente" value="muito frequentemente" required>
                <label for="p4_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>5. Com que frequência você tem dificuldade para fazer um trabalho que exija organização?</p>
            <div>
                <input type="radio" name="pergunta5" id="p5_nunca" value="nunca" required>
                <label for="p5_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta5" id="p5_raramente" value="raramente" required>
                <label for="p5_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta5" id="p5_as_vezes" value="as vezes" required>
                <label for="p5_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta5" id="p5_frequentemente" value="frequentemente" required>
                <label for="p5_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta5" id="p5_muito_frequentemente" value="muito frequentemente" required>
                <label for="p5_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>6. Quando você precisa fazer algo que exige muita concentração, com que frequência você evita ou adia
                o início ?</p>
            <div>
                <input type="radio" name="pergunta6" id="p6_nunca" value="nunca" required>
                <label for="p6_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta6" id="p6_raramente" value="raramente" required>
                <label for="p6_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta6" id="p6_as_vezes" value="as vezes" required>
                <label for="p6_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta6" id="p6_frequentemente" value="frequentemente" required>
                <label for="p6_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta6" id="p6_muito_frequentemente" value="muito frequentemente" required>
                <label for="p6_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p><b>A Parte B</b> as próximas perguntas fornecem informações mais minuciosas para auxiliar o
                diagnóstico de
                sintomas do paciente. Não existe pontuação mínima na parte B.</p>

            <p>7. Com que frequência você coloca as coisas fora do lugar ou tem dificuldade de encontrar as coisas
                em casa ou no trabalho ?</p>
            <div>
                <input type="radio" name="pergunta7" id="p7_nunca" value="nunca" required>
                <label for="p7_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta7" id="p7_raramente" value="raramente" required>
                <label for="p7_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta7" id="p7_as_vezes" value="as vezes" required>
                <label for="p7_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta7" id="p7_frequentemente" value="frequentemente" required>
                <label for="p7_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta7" id="p7_muito_frequentemente" value="muito frequentemente" required>
                <label for="p7_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>8. Com que frequência você se distrai com pensamentos irrelevantes ou se distrai com atividades e
                barulhos à sua volta ?</p>
            <div>
                <input type="radio" name="pergunta8" id="p8_nunca" value="nunca" required>
                <label for="p8_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta8" id="p8_raramente" value="raramente" required>
                <label for="p8_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta8" id="p8_as_vezes" value="as vezes" required>
                <label for="p8_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta8" id="p8_frequentemente" value="frequentemente" required>
                <label for="p8_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta8" id="p8_muito_frequentemente" value="muito frequentemente" required>
                <label for="p8_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>9. Com que frequência você tem dificuldade para lembrar de compromissos ou obrigações?</p>
            <div>
                <input type="radio" name="pergunta9" id="p9_nunca" value="nunca" required>
                <label for="p9_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta9" id="p9_raramente" value="raramente" required>
                <label for="p9_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta9" id="p9_as_vezes" value="as vezes" required>
                <label for="p9_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta9" id="p9_frequentemente" value="frequentemente" required>
                <label for="p9_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta9" id="p9_muito_frequentemente" value="muito frequentemente" required>
                <label for="p9_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>10. Com que frequência você fica se mexendo na cadeira ou balançando as mãos ou os pés quando precisa
                ficar sentado(a) por muito tempo ?</p>
            <div>
                <input type="radio" name="pergunta10" id="p10_nunca" value="nunca" required>
                <label for="p10_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta10" id="p10_raramente" value="raramente" required>
                <label for="p10_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta10" id="p10_as_vezes" value="as vezes" required>
                <label for="p10_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta10" id="p10_frequentemente" value="frequentemente" required>
                <label for="p10_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta10" id="p10_muito_frequentemente" value="muito frequentemente" required>
                <label for="p10_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>11. Com que frequência você se levanta da cadeira em reuniões ou em outras situações onde deveria
                ficar sentado(a) ?</p>
            <div>
                <input type="radio" name="pergunta11" id="p11_nunca" value="nunca" required>
                <label for="p11_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta11" id="p11_raramente" value="raramente" required>
                <label for="p11_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta11" id="p11_as_vezes" value="as vezes" required>
                <label for="p11_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta11" id="p11_frequentemente" value="frequentemente" required>
                <label for="p11_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta11" id="p11_muito_frequentemente" value="muito frequentemente" required>
                <label for="p11_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>12. Com que frequência você se sente inquieto(a), agitado(a) ou impaciente ?</p>
            <div>
                <input type="radio" name="pergunta12" id="p12_nunca" value="nunca" required>
                <label for="p12_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta12" id="p12_raramente" value="raramente" required>
                <label for="p12_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta12" id="p12_as_vezes" value="as vezes" required>
                <label for="p12_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta12" id="p12_frequentemente" value="frequentemente" required>
                <label for="p12_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta12" id="p12_muito_frequentemente" value="muito frequentemente" required>
                <label for="p12_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>13. Com que frequência você tem dificuldade para sossegar e relaxar quando tem tempo livre para você
                ?</p>
            <div>
                <input type="radio" name="pergunta13" id="p13_nunca" value="nunca" required>
                <label for="p13_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta13" id="p13_raramente" value="raramente" required>
                <label for="p13_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta13" id="p13_as_vezes" value="as vezes" required>
                <label for="p13_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta13" id="p13_frequentemente" value="frequentemente" required>
                <label for="p13_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta13" id="p13_muito_frequentemente" value="muito frequentemente" required>
                <label for="p13_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>14. Com que frequência você se sente ativo(a) demais, precisando estar ocupado(a) com algo, como se
                estivesse “com um motor ligado” ?</p>
            <div>
                <input type="radio" name="pergunta14" id="p14_nunca" value="nunca" required>
                <label for="p14_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta14" id="p14_raramente" value="raramente" required>
                <label for="p14_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta14" id="p14_as_vezes" value="as vezes" required>
                <label for="p14_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta14" id="p14_frequentemente" value="frequentemente" required>
                <label for="p14_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta14" id="p14_muito_frequentemente" value="muito frequentemente" required>
                <label for="p14_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>15. Com que frequência você se pega falando demais ou muito alto em situações sociais ?</p>
            <div>
                <input type="radio" name="pergunta15" id="p15_nunca" value="nunca" required>
                <label for="p15_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta15" id="p15_raramente" value="raramente" required>
                <label for="p15_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta15" id="p15_as_vezes" value="as vezes" required>
                <label for="p15_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta15" id="p15_frequentemente" value="frequentemente" required>
                <label for="p15_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta15" id="p15_muito_frequentemente" value="muito frequentemente" required>
                <label for="p15_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>16. Com que frequência você se pega terminando as frases das pessoas antes delas, ou respondendo
                mesmo antes delas perguntarem ?</p>
            <div>
                <input type="radio" name="pergunta16" id="p16_nunca" value="nunca" required>
                <label for="p16_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta16" id="p16_raramente" value="raramente" required>
                <label for="p16_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta16" id="p16_as_vezes" value="as vezes" required>
                <label for="p16_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta16" id="p16_frequentemente" value="frequentemente" required>
                <label for="p16_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta16" id="p16_muito_frequentemente" value="muito frequentemente" required>
                <label for="p16_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>17. Com que frequência você tem dificuldade para esperar nas situações onde cada um tem a sua vez ?
            </p>
            <div>
                <input type="radio" name="pergunta17" id="p17_nunca" value="nunca" required>
                <label for="p17_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta17" id="p17_raramente" value="raramente" required>
                <label for="p17_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta17" id="p17_as_vezes" value="as vezes" required>
                <label for="p17_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta17" id="p17_frequentemente" value="frequentemente" required>
                <label for="p17_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta17" id="p17_muito_frequentemente" value="muito frequentemente" required>
                <label for="p17_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>18. Com que frequência você interrompe os outros quando eles estão ocupados, ou se intromete na
                conversa de outras pessoas ?</p>
            <div>
                <input type="radio" name="pergunta18" id="p18_nunca" value="nunca" required>
                <label for="p18_nunca">Nunca</label>
            </div>
            <div>
                <input type="radio" name="pergunta18" id="p18_raramente" value="raramente" required>
                <label for="p18_raramente">Raramente</label>
            </div>
            <div>
                <input type="radio" name="pergunta18" id="p18_as_vezes" value="as vezes" required>
                <label for="p18_as_vezes">Às vezes</label>
            </div>
            <div>
                <input type="radio" name="pergunta18" id="p18_frequentemente" value="frequentemente" required>
                <label for="p18_frequentemente">Frequentemente</label>
            </div>
            <div>
                <input type="radio" name="pergunta18" id="p18_muito_frequentemente" value="muito frequentemente" required>
                <label for="p18_muito_frequentemente">Muito frequentemente</label>
            </div>

            <p>
                <input type="submit" class="bnt-resul" value="Clique aqui para ver os resultados">
            </p>

            </form>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>