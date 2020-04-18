<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01 - PHP</title>
</head>

<body>
    <?php
    // criando uma variavel em php
    $titulo = "Primeira Aula de PHP";
    ?>
    <h1>
        <?php
        // como printar uma variavel na tela com php
        echo $titulo;
        ?>
    </h1>
    <hr>
    <h1> Condicionais </h1>
    <p>IF / ELSE</p>
    <p>Crie uma função valide se uma pessoa pode votar ou não</p>
    <?php

    function podevotar($idadeEleitor)
    {
        if ($idadeEleitor >= 18 && $idadeEleitor <= 70) {
            return "Voto obrigatório";
        } else if ($idadeEleitor <= 15) {
            return "Não vota";
        } else {
            return "Voto facultativo";
        }
    }
    ?>
    R : Foi criado no código a função podevotar e foi informado o valor de 17, como resultado da função tivemos: <?php echo podevotar(17) ?>
    <hr>
    <p>SWITCH CASE</p>
    <p>Crie uma função que Valide se um numero é 0 e retorne que é igual a 0, se é 1 e retorne que é igual a 1, ou se é 2 e retorne que é igual a 2. Caso contrario retorne que o numero é maior que 2. Utilizando switch case.</p>
    <?php
    function validaNumero($i)
    {
        switch ($i) {
            case 0:
                return "$i igual 0";
                break;
            case 1:
                return "$i igual 1";
                break;
            case 2:
                return "$i igual 2";
                break;
            default:
                return "qualquer numero maior que 2";
                break;
        }
    }
    ?>
    R: foi criado no código a funçao validaNumero e foi informado como parâmetro o numero 2, como retorno da função tivemos <?php echo validaNumero(2); ?>
    <hr>

    <p>crie uma função que receba o genero de uma pessoa, onde ela poderá informar Masculino ou Feminino, se informar Masculino iremos retornar a mensagem Genero foi masculino, se informar Feminino, iremos retornar a mensagem Gênero informado foi feminino, caso contrario iremos retornar Outros. Utilizando Switch Case.</p>

    <?php

    function descobrirGenero($genero)
    {
        switch ($genero) {
            case "Masculino":
                return "Gênero informado foi $genero";
                break;
            case "Feminino":
                return "Gênero informado foi $genero";
                break;
            default:
                return "Gênero informado foi Outros";
                break;
        }
    }
    ?>
    R: <?php echo descobrirGenero("Masculino"); ?>
    <hr>
    <h1> Arrays</h1>
    <p>Array Simples</p>

    <?php
    $animais = ["Leão", "Girafa", "Cachorro", "Gato", 1, true];
    echo "<pre>";
    var_dump($animais);
    echo "</pre>";
    ?>

    <p>Array Associativo</p>

    <?php
    $usuario = [
        "nome" => "Luigi",
        "email" => "luigiprofeti@gmail.com",
        "senha" => "123456"
    ];

    echo "<pre>";
    var_dump($usuario);
    echo "</pre>";

    ?>

    <p>Array de Arrays</p>
    <?php
    $listaDeUsuarios = [
        "usuario1" => [
            "nome" => "Luigi",
            "email" => "luigiprofeti@gmail.com",
            "senha" => "123456"
        ],
        "usuario2" => [
            "nome" => "Luisa",
            "email" => "luisaprofeti@gmail.com",
            "senha" => "123456"
        ]
    ];

    echo "Nome do usuario 1 é: " . $listaDeUsuarios["usuario1"]["nome"] . " e o nome do usuario 2 é: " . $listaDeUsuarios["usuario2"]["nome"] ;

    ?>




</body>

</html>