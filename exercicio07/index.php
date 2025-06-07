<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Verificação de Idade</title>
</head>
<body>
    <?php
        $idade = 10;

        if ($idade >= 18) {
            echo "<p>Você é maior de idade.</p>";
        } else {
            echo "<p>Você é menor de idade.</p>";
        }
    ?>
</body>
</html>
