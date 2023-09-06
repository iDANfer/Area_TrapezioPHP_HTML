<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado do Cálculo</title>
</head>

<body>
    <h1>Resultado do Cálculo</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base_maior = floatval($_POST["base_maior"]);
        $base_menor = floatval($_POST["base_menor"]);
        $altura = floatval($_POST["altura"]);

        // Calcula a área do trapézio
        $area = (($base_maior + $base_menor) / 2) * $altura;

        echo "A área do trapézio é: " . number_format($area, 2, ',', '.') . " ao quadrado.";
    } else {
        echo "Ocorreu um erro ao processar o formulário.";
    }
    ?>
</body>

</html>