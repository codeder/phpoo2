<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Exercício2 - PHPOO - Code Education</title>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>


        <?php
        require_once 'interface/iCliente.php';
        require_once 'class/Endereco.php';
        require_once 'class/Fisica.php';
        require_once 'class/Juridica.php';



        $clientes[0] = new Fisica(1, null, "Eder da Silva", "305.132.018.82", "Masculino");
        $clientes[0]->setClassificacao(5);
        $clientes[0]->setEndCobranca(new Endereco("Durvalino de Castro, 25", "Cruzeiro", "SP"));

        $clientes[1] = new Juridica(2, null, "Ednelson Prado ME", "Vincere Comunicação", "51.829.016/0001-42");
        $clientes[1]->setClassificacao(3);
        $clientes[1]->setEndCobranca(new Endereco("Mário das Flores, 38", "Taubaté", "SP"));


        $clientes[2] = new Juridica(3, null, "Helena Santos ME", "Essência do Vale", "13.393.490/0001-85");
        $clientes[2]->setClassificacao(1);
        $clientes[2]->setEndCobranca(new Endereco("Rua do Asfalto, 2000", "Cruzeiro", "SP"));

        $clientes[3] = new Fisica(4, null, "Angela Maria", "999.999.999.99", "Feminino");
        $clientes[3]->setClassificacao(5);
        $clientes[3]->setEndCobranca(new Endereco("Amador Costa e Souza, 31", "Rio de Janeiro", "RJ"));



        foreach ($clientes as $cliente) {
            if ($cliente->getTipo() == "Fisica") {
                echo "<p>";
                echo "ID: " . $cliente->getId() . "<br>";
                echo "Nome: " . $cliente->getNome() . "<br>";
                echo "Classificação: " . $cliente->getClassificacao() . "<br>";
                echo $cliente->getEndCobranca();
                echo "</p>";
            } else {
                echo "<p>";
                echo "ID: " . $cliente->getId() . "<br>";
                echo "Razão Social: " . $cliente->getRazaoSocial() . "<br>";
                echo "Classificação: " . $cliente->getClassificacao() . "<br>";
                echo $cliente->getEndCobranca();
                echo "</p>";
            }
        }
        
        ?>





    </body>
</html>

