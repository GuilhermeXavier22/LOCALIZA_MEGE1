<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <pre>
    <?php    

        require 'carros.php';
        require 'pessoa.php';
        require 'locacao.php';

        $carro1 = new Carro('mustang','ford','preto',3.0,'true','500');

        $locador = new Pessoa('Guilherme','4758389874','guilherme@gmail.com','998276323');

        $locacao = new Locacao('Imperatriz','2021/08/18','14:00','Imperatriz','2021/08/19','14:00',$carro1,$locador);

        //$locacao -> preco_aluguel();
        //$locacao -> apresentar();
        
   ?>
    </pre>

</body>
</html>