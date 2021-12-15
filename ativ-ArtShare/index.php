<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho Para ArtShare</title>
</head>
<body>
<form action="upload.php" enctype="multipart/form-data" method="post">
        <p>Seu nome: <input type="text" name = "seunome"></p>
        <p><input type="file" name="myfile"></p>
        <p>Sua Cidade:<input type="text" name="cidade_pess"></p>
        <p>Horário de Envio:<input type="time" name="horario"
       min="00:00" max="23:00" required></p>
        
        <p><button type="submit">Confirmar</button></p>
    </form>
</body>
</html>