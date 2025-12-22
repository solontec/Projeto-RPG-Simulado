<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="formulario">
    <form action="/actions/Mission.php" method="post">
        <h1>Faça seu login Heroi!</h1>

        <input type="text" name="nameMission" placeholder="Describe name">
        <input type="text" name="descriptionMission" placeholder="describe">
        <input type="date" name="dateMission" placeholder="date">

        <label for="">Dificulte</label>
        <select name="dificulte" id="dificulte">
            <option value="easy">Easy</option>
            <option value="medium">Medium</option>
            <option value="hard">Hard</option>
            <option value="expert">Expert</option>

        </select>

        <button type="submit">Criar missão!</button>
    </form>
</div>
</body>
</html>