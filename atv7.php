<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>Verificação de número - Par ou Impar</h1>
    <!--- Código em PHP --->
    <form action="" method="post">
    Digite um número: <input type="text" name="num"><br>
    <input type="submit">
</form>

    <?php

    $num = $_POST["num"];
    if($num == 0){
        echo "O número informado é NEUTRO!";
    }elseif($num < 0){
        echo "O número informado é NEGATIVO!!";
    }else{
        echo "O número informado é POSITIVO!";
    }
    ?>
</body>
</html>