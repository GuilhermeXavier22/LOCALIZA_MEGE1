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
    <title>Escolha seu carro</title>

    <style>
        img{
            width: 450px;
        }
    </style>
</head>

<?php 
    
    session_start();

    $_SESSION['DTR'] = $_POST['data1'];
    $_SESSION['LO'] = $_POST['local_retirada'];
    $_SESSION['DTD'] = $_POST['data2'];
    $_SESSION['LOD'] = $_POST['local_devolucao'];
    $_SESSION['H1'] = $_POST['time1'];
    $_SESSION['H2'] = $_POST['time2'];
    
    $preco1 = 100;
    $preco2 = 200;
    $preco3 = 250;
    $ar = false;

    $img = 1;
?>

<body>
    <div class="cabecalho">
        <h1 class="padding-top-20 padding-b-20 m-l-10"><i class="fas fa-road"></i> Localiza Mege</h1>
    </div>

    <div class="row">

        <div class="col-md-6 m-t-20">
            <div class="Main_carros">

                <div class="carros m-t-20">
                    <h3>Uno</h3>
                    
                    <img src="img/uno.png" alt="Uno Novinho" >
                    <form action="index_pessoa.php" method="POST">
                        
                        <input type="hidden" name="modelo_carro" value="Uno">
                        <input type="hidden" name="marca_carro" value="fiat">
                        <input type="hidden" name="cor_carro" value="Prata">
                        <input type="hidden" name="potencia" value=1.0>
                        <?php  $img = 1; ?>
                        <input type="hidden" name="img" value="<?php echo $img ?>"  >
                        <input type="hidden" name="ar_con" value="<?php echo $ar ?>">
                        <input type="hidden" name="preco" value="<?php echo $preco1 ?>">

                        <input type="submit" class="btn btn-success m-t-20" value="R$ 100">
                    </form>
                </div>

                <div class="carros m-t-20">
                    <h3>Eco Sporte</h3>
                    <img src="img/eco.png" alt="Eco Sporte" >
                    <form action="index_pessoa.php" method="POST">
                        
                        <input type="hidden" name="modelo_carro" value="Eco Sporte">
                        <input type="hidden" name="marca_carro" value="Ford">
                        <input type="hidden" name="cor_carro" value="vermelho" >
                        <input type="hidden" name="potencia" value=1.8>
                        <?php  $img = 2; ?>
                        <input type="hidden" name="img" value="<?php echo $img ?>"  >
                        <input type="hidden" name="ar_con" value="<?php echo $ar ?>">
                        <input type="hidden" name="preco" value="<?php echo $preco2 ?>">

                        <input type="submit" class="btn btn-success m-t-20" value="R$ 200">
                    </form>
                </div>

                <div class="carros m-t-20">
                    <h3>Renegade</h3>
                    <img src="img/RENE.png" alt="Renegade" >
                    <form action="index_pessoa.php" method="POST">
                        
                        <input type="hidden" name="modelo_carro" value="Renegade">
                        <input type="hidden" name="marca_carro" value="Jeep">
                        <input type="hidden" name="cor_carro" value="Prata" >
                        <input type="hidden" name="potencia" value=2.0>
                        <?php  $img = 3; ?>
                        <input type="hidden" name="img" value="<?php echo $img ?>"  >
                        <input type="hidden" name="ar_con" value="<?php echo $ar ?>">
                        <input type="hidden" name="preco" value="<?php echo $preco3 ?>">

                        <input type="submit" class="btn btn-success m-t-20" value="R$ 250">
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-6 m-t-20">
            
            <div class="box_1 " >

                <div class="box_2 m-b-20" >
                    <h2>Resumo da reserva</h2>
                </div>

                <div>
                    <h3>Retirada</h3>
                    <p>
                        <?php 
                        echo $_SESSION['DTR'].'<br>';
                        echo $_SESSION['LO'];
                        ?></p>
                </div>

                <hr>

                <div>
                    <h3>Devolução</h3>
                    <p><?php
                        echo $_SESSION['DTD'].'<br>';
                        echo $_SESSION['LOD'];
                    ?></p>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>