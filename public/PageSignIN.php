<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faça seu login Heroi!</title>
</head>
<body>
    <div class="formulario">
        <form action="/actions/Login.php" method="post">
            <h1>Faça seu login Heroi!</h1>

            <input type="text" name="email" placeholder="Escreva email do Heroi">
            <input type="text" name="password" placeholder="Escreva a senha secreta do Heroi">

            <button type="submit">Entrar no mundo</button>
        </form>
    </div>
</body>
</html>