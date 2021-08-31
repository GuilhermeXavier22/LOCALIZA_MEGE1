<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Contrail+One&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <title>Concluido</title>
</head>

<?php

    session_start();

    require '../carros.php';
    require '../locacao.php';
    require '../pessoa.php';

    $nome     = $_POST['nome'];
    $email    = $_POST['email'];
    $cpf      = $_POST['cpf'];
    $telefone =$_POST['telefone'];

    $carro = new Carro($_SESSION['modelo_carro'],$_SESSION['marca_carro'],$_SESSION['cor'],$_SESSION['potencia'],$_SESSION['ar'],$_SESSION['preco']);

    $pessoa = new Pessoa($nome,$cpf,$email,$telefone);

    $locacao = new Locacao($_SESSION['LO'],$_SESSION['DTR'],$_SESSION['H1'],$_SESSION['LOD'],$_SESSION['DTD'],$_SESSION['H2'],$carro,$pessoa);

?>

<body>

    <div class="cabecalho">
        <h1 class="padding-top-20 padding-b-20 m-l-10"><i class="fas fa-road"></i><a href="index.php">Localiza Mege</a></h1>
    </div>

    <div class="row">

        <div class="col-md-6 m-t-20">

            <div class="img_redimensionada">

                <?php 
                
                switch($_SESSION['img']){
                    case 1:echo '<img src="img/uno.png" alt="Uno">';
                        break;

                    case 2:echo '<img src="img/eco.png" alt="Gol">';
                        break;

                    case 3:echo '<img src="img/RENE.png" alt="Fusca">';
                        break;
                }

                ?>

            </div>
            
        </div>

        <div class="col-md-6 m-t-20">

            <div class="box_1" >

                <div class="box_2 m-b-20">
                    <h2>Reserva Concluído</h2>
                </div>

                <h3 class="green">Retirada</h3>
                <hr>
                <?php  echo $locacao -> show_LocacaoR() ?>
                <br>

                <h3 class="green">Devolução</h3>
                <hr>
                <?php echo $locacao -> show_LocacaoD() ?>
                
                <h3 class="green">Locatário</h3>
                <hr>
                <?php echo $locacao-> show_Locatario() ?>

                <h3 class="green">Veículo</h3>
                <hr>
                <?php echo $locacao -> show_Carro() ?>

                <h3 class="green">Diárias</h3>
                <hr>
                <?php $locacao -> show_aluguel() ?>

                <div class="total m-t-10">
                    <d>Valor total previsto</d>
                    <br>
                    <?php $locacao -> preco_aluguel() ?>
                </div>
                
            </div>

        </div>
        
    </div>
    
    <br>
    <br><br>
    
</body>
</html>