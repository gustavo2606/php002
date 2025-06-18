<?php
include "cabecalho.php";
include "banner.php"
?>
<div class="container">
    <h2 class="display-5">Melhores avaliados</h2>

    <div class="row">
        <?php

        $servidor = 'localhost';
        $bd = 'bd_filmes';
        $usuario = 'root';
        $senha = '';
        $id = $_GET['id'] ?? 0;


        $conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error()); 
        }

        $sql = "select * from filmes";
        $resultado = mysqli_query($conexao, $sql);
 
        while ($linha = mysqli_fetch_assoc($resultado)) {
        ?>
            <div class="col-3 mb-5">
                <img src="<?= $linha['foto']; ?>" class="img-fluid img-formatada">
                <h3><?= $linha['titulo']; ?></h3>
                <span>⭐<?= $linha['avaliacao']; ?>/10</span>
                
            </a>

            </div>
        <?php
        }
 
        ?>

       





    </div>

    <div class="row">
        <div class="col-8 ">
            <img src="imagens-filmes/aquamenn.jpg" class="img-fluid">
        </div>
        <div class="col-4 align-content-center ">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit vero aut dolorem explicabo, maiores provident impedit, inventore dolorum magnam repellat error omnis voluptates exercitationem ullam quam nihil eum vel praesentium?</p>
            <a href="https://youtu.be/yJnzCBt5j1M?si=Y-010c4MlO-SNQYd" class="btn btn-success btn-lg">ASSISTA AO TRAILER</a>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-4 align-content-center">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit vero aut dolorem explicabo, maiores provident impedit, inventore dolorum magnam repellat error omnis voluptates exercitationem ullam quam nihil eum vel praesentium?</p>
            <a href="https://youtu.be/4AKkpnCKa2I?si=CM_c4iEA_uncTTaT" class="btn btn-success btn-lg">ASSISTA AO TRAILER</a>
        </div>
        <div class="col-8">
            <img src="imagens-filmes/hobit.jpg" class="img-fluid">
        </div>

    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning btn-lg mt-5 fs-5 fw-bold text-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Preciso de Ajuda? clique aqui!</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Entre em Contato através dos nossos canais de comunicação</p>
                    <p>E-mail: filme@filme.com.br <br> Whatsapp (119999-8888)<br><a
                            href="contato.php">Formulário de contato</a> </p>

                </div>
            </div>
        </div>
    </div>

    


</div>

</body>

</html>

<?php
include "radape.php";
?>