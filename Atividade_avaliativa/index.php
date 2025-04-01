<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Avaliativa</title>
</head>
<body>
    
    <h1>Cadastro de Aparelhos Eletrônicos</h1>

    <form action="cadastro.php" method="post">

    <h2>Cadastro de Produto</h2>
    
    <p>
            <label for="nome">Nome do Aparelho:</label><br>
            <input type="text" name="nome" id="nome">
        </p>

        <p>
            <label for="valor">Consumo Máximo (em watts): </label><br>
            <input type="number" name="valor1" required min="1" max="1000">
        </p>

        <p>
            <label for="valor">Tempo de uso (em horas): </label><br>
            <input type="number" name="valor2" required min="1" max="24">
        </p>

        <p>
            <label for="valor">Dias de uso: </label><br>
            <input type="number" name="valor3" required min="1" max="365">
        </p>

        <p>
            <label for="valor">Valor do kilowatt-hora: </label><br>
            <input type="number" name="valor4" required min="1" max="50">
        </p>

        <button type="submit">Enviar</button> <button type="reset">Apagar</button>

    </form>

    <?php 
    
    ?>

</body>
</html>