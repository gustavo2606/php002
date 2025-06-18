<?php include "cabecalho.php"; ?>
<div class="container">
 
    <?php
    /*Conexão com o BD*/
    $servidor = "localhost";
    $bd = "bd_filmes";
    $usuario = "root";
    $senha = "";
    $id = $_GET['id'] ?? 0;
 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
    if (!$conexao) {
        die("Não conectado" . mysqli_connect_error());
    }
 
   
    $sql = "SELECT * FROM filmes WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);
   
 
    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
       
        <h2><?= $linha['titulo']; ?></h2>
        <img src="<?= $linha['foto']; ?>">
        <p>⭐ <?= $linha['avaliacao']; ?>/10</p>
        <p><strong>Categoria:</strong><?= $linha['categoria']; ?></p>
        <p><strong>História:</strong><?= $linha['historia']; ?></p>
    <?php
    }
    ?>
</div>
<?php include "rodape.php"; ?>