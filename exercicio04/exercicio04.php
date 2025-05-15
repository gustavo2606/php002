<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "Você é maior de 18 anos.";
        } else {
            echo "Você é menor de 18 anos.";
        }
    }
    ?>