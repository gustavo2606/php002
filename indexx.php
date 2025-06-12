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


        $conexao = mysqli_connect($servidor,$usuario,$senha,$bd);
        if(!$conexao){
            die("deu ruim" . mysqli_connect_error()); 
        }

        echo "deu bom" ; 
        ?>

        <div class="col-3">
            <img src="imagens-filmes/django.jpg" class="img-fluid">
            <h3>Django Livre</h3>
            <span>⭐10\10</span>
        </div>

        <div class="col-3">
            <img src="imagens-filmes/harry.png" class="img-fluid">
            <h3>Harry Potter</h3>
            <span>⭐10\10</span>
        </div>

        <div class="col-3">
            <img src="imagens-filmes/parcy.jpg" class="img-fluid">
            <h3>Parcy Jackson</h3>
            <span>⭐10\10</span>
        </div>

        <div class="col-3">
            <img src="imagens-filmes/piratas.jpg" class="img-fluid">
            <h3>Piratas do Cáribe</h3>
            <span>⭐10\10</span>
        </div>




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