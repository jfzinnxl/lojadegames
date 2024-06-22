<section id="main">
    <h2 class="text-center" style="color:#006ba8;" >Seja Bem Vindo</h2>
    <div class="card-flex">
    <?php 
    $dadosApi = file_get_contents("http://localhost/joao/api/game.php");
    $dadosApi = json_decode($dadosApi);

    foreach ($dadosApi as $dados){
        ?>

        <div class="card-block" style="box-shadow: 0 0 10px black;">
            <img src="<?php echo $dados-> banner?>" width="100%" style="border-radius:20px 20px 0 0 ; margin-bottom: 7px; " alt="">
            <p class="nome"><?php echo $dados-> nome?></p>
            <div class="descricao">
                <p>
                <?php echo $dados-> descricao?>
                </p>
                <div class="btn-center">
                <a href="<?php echo $dados-> jogar?>" class="btn btn-primary " style="border-radius:20px  ;">Jogue Agora</a>
                </div>
            </div>
        </div>

        <?php
    }
    ?>

    </div>
</section>

