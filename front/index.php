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
    <title>Localiza Mege</title>
</head>
<body class="body1">
    <div class="container container2">

        <div class="cabecalho">
            <h1 class="padding-top-20 padding-b-20 m-l-10"><i class="fas fa-road"></i> Localiza Mege</h1>
        </div>

        <div class="Main padding-b-20 padding-top-20">

            <form action="index_carro.php" method="POST" class="row">

                <div class="form-floating col-md-5 m-l-10">
                    <select class="form-select" name="local_retirada"  id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Escolha o local de retirada</option>
                        <option value="Imperatriz">Imperatriz</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Goiania">Goiânia</option>
                    </select>
                    <label for="floatingSelect">Local de Retirada</label>
                </div>

                <div class="col-md-3">
                    <input type="date" name="data1" id="data" required>
                </div>

                <div class="col-md-1">
                    <input type="time" name="time1" id="time" min="09:00" max="18:00" required>
                </div>

                <div class="col-md-2">
                    <p><i class="fas fa-dollar-sign"></i> Economize com a Localiza Mege</p>
                </div>

                <div class="form-floating col-md-5 m-l-10">
                    <select class="form-select" name="local_devolucao"  id="floatingSelect" aria-label="Floating label select example">
                        <option selected>Escolha o local de devolução</option>
                        <option value="Imperatriz">Imperatriz</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Goiania">Goiânia</option>
                    </select>
                    <label for="floatingSelect">Local de Devolução</label>
                </div>

                <div class="col-md-3">
                    <input type="date" name="data2" id="data" required >
                </div>

                <div class="col-md-1">
                    <input type="time" name="time2" id="time" min="09:00" max="18:00" required>
                </div>

                <div class="col-md-2 text-c m-t-10 dimensoes">
                    <button type="submit" class="btn btn-success c-lemon">Continuar</button>
                </div>
                
            </form>

        </div>

    </div>
    <div class="conteudo"></div>

    <div>

    </div>
    
</body>
</html>