
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/PageSignUp.css">
    <title>Faça seu cadastro Herói</title>
</head>
<body>
<div class="formulario">

<form action="/actions/Cadastro.php" method="post">
    <label for="">Digite o nome do seu Herói</label>
    <input type="text" name="name">

    <label for="">Digite o email do seu Herói</label>
    <input type="text" name="email">

    <label for="">Digite o código do seu Herói</label>
    <input type="text" name="password">

    <button type="submit">Cadastrar</button>
</form>
</div>
</body>
</html>
