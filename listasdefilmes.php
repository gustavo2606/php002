<?php
include "cabecalho.php";
?>
 
<style>
.lista-filmes {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 30px;
    padding: 30px;
}
 
.card-filme {
    width: 300px;
    height: 480px;
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 10px;
    padding: 15px;
    box-sizing: border-box;
    background-color: #f9f9f9;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
 
.card-filme img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 5px;
}
 
.card-filme h3 {
    font-size: 20px;
    margin: 12px 0 8px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}
 
.card-filme span {
    font-size: 16px;
    color: #555;
}
 
.card-filme a {
    text-decoration: none;
}
 
.card-filme button {
    background-color: #007bff;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 16px;
    margin-top: 10px;
    transition: 0.3s;
}
 
.card-filme button:hover {
    background-color: #0056b3;
}
</style>
 
<h2>Todos os filmes</h2>
<div class="lista-filmes">
 
    <?php
    $servidor = 'localhost';
    $bd = 'bd_filmes';
    $usuario = 'root';
    $senha = '';
 
    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd);
    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
 
    $sql = "SELECT * FROM filmes";
    $resultado = mysqli_query($conexao, $sql);
 
    while ($linha = mysqli_fetch_assoc($resultado)) {
    ?>
        <div class="card-filme">
            <img src="<?= $linha['foto'] ?>" class="img-fluid img-formatada" alt="Capa do filme">
            <h3><?= $linha['titulo'] ?></h3>
            <span>⭐<?= $linha['avaliacao'] ?>/10</span>
            <a href="umfilme.php?id=<?= $linha['id'] ?>">
                <button>Ver trailer</button>
            </a>
        </div>
    <?php
    }
    ?>
 
</div>
 
<?php include "rodape.php"; ?>
 
 