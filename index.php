<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resgate do Conteudo</title>
</head>

<body>
    <?php #phpinfo();?>
    <h2>Formulario HTML</h2>

    <form action="recebedados.php" method="POST">
        <label for="fname">Primeiro Nome:</label><br>
        <input type="text" id="fname" name="fname" value="Jhonatan"><br>
        <label for="lname">Ultimo Nome:</label><br>
        <input type="text" id="lname" name="lname" value="Lucena"><br><br>
        <label for="Sexo">Sexo</label>
        <select name="Sexo" id="Sexo">
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select> <br>
        <input type="submit" value="Enviar">
    </form>
    <a href="recebedados.php?fname=Jhonatan&Sexo=Masculino">Enviando o nome</a>
</body>

</html>