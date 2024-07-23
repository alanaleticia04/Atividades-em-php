<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
</head>
<body>
    <h1>Aprendendo PHP</h1>

    <?php
       // esse é um comentário de uma linha 
       # posso utlizar hashtag para comentário
       /**
        * aqui é um bloco de cementário 
        *posso escrever em mais de uma linha
        */
       echo "aqui aparece um texto na tela de usuário";

       //podemos colocar tags HTML dentro do PHP 
       echo "<h1>esse é um título</h1>";
       echo"<p>parágrafo do texto.</p>";
       
       //comandos de saída:
       //echo - imprime um string na tela  
       //print - imprime uma string na tela
       print "<p>texto dentro do print</p>";

       //variáveis em PHP 
       //sempre iniciam com $ seguido do nome da variável
       //não é necessário identificar o tipo do dado 
       //para criar uma variável basta atribuir um valor a ela.
       $nome = "Alana";
       $idade = 17;
       $altura = 1.52;
       echo "$nome tem $altura m e $idade anos de idade<br>";

       //aritmétrica básica 
       echo "operadores aritmética.<br>";
       echo "a = 10 e b=5<br>.";
       $a = 10;
       $b = 5;
       $c = $a + $b;
       echo "a soma de $a e $b é $c<br>";
       $c = $a - $b;
       echo "a subtração de $a e $b é $c<br>";
       $c = $a * $b;
       echo "a multiplicação de $a e $b é $c<br>";
       $c = $a / $b;
       echo "a divisão de $a e $b é $c<br>";
       $c = $a ** $b;
       echo "a potência de $a e $b é $c<br>";

     ?>
</body>
</html