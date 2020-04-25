<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>

<body>
    <h1>Loops e Funções</h1>
    <p>Loops - For</p>
    Crie um loop que exiba os numeros de 10 a 1utilizando a estrutura for.<br>
    <?php
    for ($i=1; $i <= 10; $i++) { 
        echo $i . "<br>";
    }
    ?>
    <hr>
    Crie um loop que exiba os numeros de 10 a 1utilizando a estrutura for.<br>
    <?php
    for ($i=10; $i >= 1; $i--) { 
        echo $i . "<br>";
    }
    ?>
    <hr>   
    Crie um loop que exiba apenas os numeros pares de 2 até 10 com a variavel i começando em 1 utilizando a estrutura for e uma condição if<br>
    <?php
    for ($i=1; $i <= 10; $i++) { 
        if ($i % 2 == 0) {       
        echo $i . "<br>";
        }
    }
    ?>
    <hr>
    Crie um loop que exiba apenas os numeros pares de 2 até 10 utilizando a estrutura for<br>
    <?php
    for ($i=2; $i <= 10; $i+=2) {       
        echo $i . "<br>";
    }
    ?>
    <hr>
    <p>Loops - While</p>
    Crie um loop que exiba apenas os numeros pares de 1 até 10 utilizando a estrutura for<br>
    <?php
    $i = 1;
    while ($i <= 10) {       
        echo $i . "<br>";
        $i++;
    }
    ?>
    <hr>
    Crie um loop que exiba os numeros de 10 a 1 utilizando a estrutura for.<br>
    <?php
    $i = 10;
    while ($i >= 1) {       
        echo $i . "<br>";
        $i--;
    }
    ?>
    <hr>
    <p>Loops - Do While</p>
    Crie um loop que exiba apenas os numeros de 1 até 10 utilizando do while<br>
    <?php
    $i = 1;
    do {
        echo $i . "<br>";
        $i++;        
    } while ($i <= 10);
    ?>
    <hr>
    Crie um loop que exiba os numeros de 10 a 1 utilizando do while.<br>
    <?php
    $i = 10;
    do {
        echo $i . "<br>";
        $i--;
    } while ($i >= 1);
    ?>
    <hr>
    <p>Loops - Percorrendo Arrays</p>
    <p>For - percorrendo arrays</p>
    <p>percorra o array de animais abaixo utilizando for</p>
    <?php
    $animais = ["Gato", "Cachorro", "Leão", "Girafa"];
    echo count($animais);
    for ($i=0; $i < count($animais); $i++) { 
        echo $animais[$i] . "<br>";
    }
    ?>
    <p>While - Percorrendo arrays</p>
    <p>Percorra o array de animais abaixo utilizando while</p>
    <?php
    $i = 0;
    while ($i < count($animais)) {
        echo $animais[$i] . "<br>";
        $i++;
    }
    ?>
    <hr>
    <p>Do While - Percorrendo arrays</p>
    <p>Percorra o array de animais abaixo utilizando do while</p>
    <?php
    $i =0;
    do {
        echo $animais[$i] . "<br>";
        $i++;
    } while ($i < count($animais));
    ?>
    <hr>
    <p>Foreach - Percorrendo arrays</p>
    <p>Percorra o array de animais abaixo utilizando foreach</p>
    <?php
    foreach ($animais as $key => $value) {
        echo "Posição: " . $key . " Índice: " . $value . "<br>";
    }
    ?>

</body>

</html>