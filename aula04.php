<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td{
            border: 1px solid black;
        }
        img{
            width: 100px;
        }
    </style>
</head>
<body>
    <?php
    echo "<h1>salada de fruta.</h1>";



    echo "<table><tr>";
    for($x=1; $x<=10; $x++){
        echo "<td><img src=' img/foto $x.jpg'></td>";
    }
    echo "</tr></table>";

    echo "<h1>tabela de 1 a 10 em PHP</h1>";
    for($x=1; $x<=10; $x++){
        echo "$x <br>";
    };





    ?>
</body>
</html>