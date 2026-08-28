<?php

\\\&#x20;   $nome = $\\\\\\\_POST\\\\\\\['nome\\\\\\\_vendedor'];

\\\&#x20;   $salario = $\\\\\\\_POST\\\\\\\['salario\\\\\\\_fixo'];

\\\&#x20;   $vendas = $\\\\\\\_POST\\\\\\\['vendas'];

\\\&#x20;   $comissao = $vendas \\\\\\\* 0.15;

\\\&#x20;   $salario\\\\\\\_final = $salario + $comissao +$vendas;




<!DOCTYPE html>

<html lang="pt-BR">

<head>

\&#x20;   <meta charset="UTF-8">

\&#x20;   <title>calculo salário</title>

</head>

<body>

\&#x20;   <p>


&#x20;   </p>

&#x20;   <p>

    </p>
    <p>
    total de vendas:R$ <?php echo number\\\\\\\_format($vendas, 2, ',', '.'); ?>
    </p>
    <p>
    comissão:R$ <?php echo number\\\\\\\_format($comissao, 2, ',', '.'); ?>
</p>
<h2>
    total a recber:R$ <?php echo number\\\\\\\_format($salario\\\\\\\_final, 2, ',', '.'); ?>
</h2>
    <?php
    if ($vendas > 10000) {
        echo "<p>Parabéns! Meta de vendas atingida!</p>";
    }
    ?>
    <a href="index.php"> Calcular novamente </a>

</body>

</html>
