<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContato.css">
    <title>TDAH</title>
</head>

<body>

    <?php 
    require_once "./headerView.php";
    ?>

    <main>
        <section>

            <h2>Contato</h2>
            <form action="https://api.staticforms.xyz/submit" method="post" autocomplete="off">
                <label>Nome</label>
                <input type="text" name="name" placeholder="Digite seu nome" autocomplete="off" required>
                <label>Email</label>
                <input type="email" name="email" placeholder="Digite seu email" autocomplete="off" required>
                <label>Mensagem</label>
                <textarea name="message" cols="30" rows="10" placeholder="Digite sua mensagem..." required></textarea>
                <button type="submit">Enviar</button>

                <input type="hidden" name="accessKey" value="042be0d3-84fa-4ae8-aaed-2434cda72cac">
                <input type="hidden" name="redirectTo" value="http://127.0.0.1:5501/obrigado.html">
            </form>

        </section>
    </main>
    <script src="script.js"></script>
</body>

</html>