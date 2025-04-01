<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 03 - Cliente Cadastrado</title>
</head>
<body>
    
    <p>
        <a href="index.php">Voltar à Home</a>
    </p>

    <h1>Formulário recebido</h1>

    <?php 
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $dados = $_POST;


        if (!empty($dados['nome']) &&
            !empty($dados['valor1']) &&
            !empty($dados['valor2']) &&
            !empty($dados['valor3']) &&
            !empty($dados['valor4']) ) 
            
            {

                echo "Nome do Produto: " . $dados['nome'] . "<br>";
                echo "Consumo Máximo: " . $dados['valor1'] . "<br>";
                echo "Tempo de uso: " . $dados['valor2'] . "<br>";
                echo "Dias de uso: " . $dados['valor3'] . "<br>";
                echo "Valor kw/h: " . $dados['valor4'] . "<br>";

        } else {

            echo "<h3>Preencha todos os campos no form da Home</h3>";

        }

    } 
    else 
    {
        echo "<h3>ATENÇÃO: Nenhum dado de cliente foi enviado!</h3>";
    }

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $valor3 = $_POST['valor3'];
    $valor4 = $_POST['valor4'];

    /* Consumo diário do aparelho
    Primeiro, calcular o valor de x: consumo máximo em watts/1000;
    Por fim, calcular: x * número de horas que o aparelho é ligado por dia
     */

    $consumoDia = ($valor1 / 1000) * $valor2;

    echo "<h3>Consumo Diário do Aparelho: $consumoDia</h3>"; 

    /*Consumo mensal do aparelho
    Consumo diário do aparelho * número de dias que o aparelho ficará ligado no mês */

    $consumoMen = $consumoDia * $valor3;

    echo "<h3>Consumo Mensal do Aparelho: $consumoMen</h3>";

    /*Consumo do aparelho em R$
    Consumo mensal do aparelho * valor do kilowatt-hora */

    $consumoReais = $consumoMen * $valor4;

    echo "<h3>Consumo do Aparelho em Reais: R$ $consumoReais</h3><br>";

    if($consumoReais <= 5) {
        echo "<h2>Consumo Baixo!</h2>";
    }

    else if($consumoReais >= 6 && $consumoReais <= 10) {
        echo "<h2>Consumo Moderado!</h2>";
    }

    else {
        echo "<h2>Consumo Elevado!</h2>";
    }
    ?>

</body>
</html>