<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Contrail+One&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css">
    <title>Dados</title>
</head>

<?php 

    session_start();

    $_SESSION['preco'] = $_POST['preco'];
    $_SESSION['modelo_carro'] = $_POST['modelo_carro'];
    $_SESSION['marca_carro'] = $_POST['marca_carro'];
    $_SESSION['cor'] = $_POST['cor_carro'];
    $_SESSION['potencia'] = $_POST['potencia'];
    $_SESSION['ar'] = $_POST['ar_con'];
    $_SESSION['img'] =  $_POST['img'];

?>

<body>
    <div class="cabecalho">
        <h1 class="padding-top-20 padding-b-20 m-l-10"><i class="fas fa-road"></i>Localiza Mege</h1>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-6 m-t-20">

                <form action="classe.php" method="POST">

                    <div class="row">

                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">NOME</label>
                            <input type="text" class="form-control" name="nome" id="inputName" placeholder="Digite seu nome completo...">
                        </div>

                        <div class="col-md-6">
                            <label for="inputAddress" class="form-label">E-MAIL</label>
                            <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Digite seu e-mail...">
                        </div>

                        <div class="col-md-4">
                            <label for="inputAddress" class="form-label">CPF</label>
                            <input type="text" class="form-control" name="cpf" id="inputEmail" placeholder="Digite seu cpf...">
                        </div>

                        <div class="col-md-4">
                            <label for="inputAddress" class="form-label">TELEFONE</label>
                            <input type="text" class="form-control" name="telefone" id="inputEmail" placeholder="Digite seu telefone...">
                        </div>

                        


                    </div>

                    <input type="submit" class="btn btn-success c-lemon m-t-20" value="Confirmar">

                </form>

            </div>
            <div class="col-md-6 m-t-20"> 

                <div class="box_1" >

                    <div class="box_2 m-b-20" >
                        <h2>Resumo da reserva</h2>
                    </div>

                    <div>
                        <h3>Retirada</h3>
                        <p><?php 
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

                    <hr>

                    <div>
                        <h3>Veículo</h3>
                        <?php 
                            echo 'Modelo: '.$_SESSION['modelo_carro'].'<br>';
                            echo 'Diária: '.$_SESSION['preco']; 
                        ?>
                    </div>

                </div>
            </div>
            

        </div>
        

    </div>


</body>
</html>