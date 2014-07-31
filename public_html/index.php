<?php
require_once 'interface/iCliente.php';
require_once 'class/Endereco.php';
require_once 'class/Foto.php';
require_once 'class/Fisica.php';
require_once 'class/Juridica.php';
?>
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
        $clientes[0] = new Fisica(1, null, "Eder da Silva", "305.132.018.82", "Masculino");
        $clientes[0]->setFoto("http://placehold.it/130x130");
        $clientes[0]->setClassificacao(5);
        $clientes[0]->setEnd(new Endereco("Durvalino de Castro, 25", "Cruzeiro", "SP"));
        $clientes[0]->setEndCobranca(new Endereco("Rua Amador Costa e Souza, 31", "Cruzeiro", "SP"));

        $clientes[1] = new Juridica(2, null, "Ednelson Prado ME", "Vincere Comunicação", "51.829.016/0001-42");
        $clientes[1]->setFoto("http://placehold.it/130x130");
        $clientes[1]->setClassificacao(3);
        $clientes[1]->setEnd(new Endereco("Rua Livre das Flores, 58", "Lavrinhas", "SP"));
        $clientes[1]->setEndCobranca(new Endereco("Mário das Flores, 38", "Taubaté", "SP"));

        $clientes[2] = new Fisica(3, null, "Angela Maria de Abreu Oliveira", "888.888.888.88", "Feminino");
        $clientes[2]->setFoto("http://placehold.it/130x130");
        $clientes[2]->setClassificacao(5);
        $clientes[2]->setEnd(new Endereco("Maurelino Vicentino Souza, 200", "Rio de Janeiro", "RJ"));
        $clientes[2]->setEndCobranca(new Endereco("Valfredo Tomas Nóbrega, 71", "Rio de Janeiro", "RJ"));

        $clientes[3] = new Juridica(4, null, "Solange Gomes ME", "Padaria São Carlos", "96.458.963/0001-25");
        $clientes[3]->setFoto("http://placehold.it/130x130");
        $clientes[3]->setClassificacao(3);
        $clientes[3]->setEnd(new Endereco("Rua Juazeiro do Norte, 85", "Passa Quatro", "MG"));
        
        $clientes[4] = new Fisica(5, null, "Florentina de Jesus", "999.999.999.99", "Feminino");
        $clientes[4]->setFoto("http://placehold.it/130x130");
        $clientes[4]->setClassificacao(5);
        $clientes[4]->setEnd(new Endereco("Rua dos Conjolos Sumaré, 1000", "Baependí", "MG"));
        
        $clientes[5] = new Fisica(6, null, "Luana Alves", "777.777.777.77", "Feminino");
        $clientes[5]->setFoto("http://placehold.it/130x130");
        $clientes[5]->setClassificacao(5);
        $clientes[5]->setEnd(new Endereco("Rua Crispim Gonçalves", "Lavrinhas", "SP"));
        
        $clientes[6] = new Juridica(7, null, "Luciana Mendes ME", "Software & CIA Ltda", "56.689.015/0001-66");
        $clientes[6]->setFoto("http://placehold.it/130x130");
        $clientes[6]->setClassificacao(3);
        $clientes[6]->setEnd(new Endereco("Rua Zezé Valadão, 71", "Aparecida", "SP"));
        $clientes[6]->setEndCobranca(new Endereco("Vila do Chaves, 71", "Tangamandápio", "SP"));
        
        $clientes[7] = new Juridica(8, null, "Wesley Willians ME", "Code Education", "85.789.963/0001-63");
        $clientes[7]->setFoto("http://placehold.it/130x130");
        $clientes[7]->setClassificacao(3);
        $clientes[7]->setEnd(new Endereco("Rua Tancredo Neves, 96", "São Paulo", "SP"));
        $clientes[7]->setEndCobranca(new Endereco("Avenida Maria do Bairro, 80", "São Paulo", "SP"));
        
        $clientes[8] = new Fisica(9, null, "Tiririca de Jesus", "589.874.569.56", "Masculino");
        $clientes[8]->setFoto("http://placehold.it/130x130");
        $clientes[8]->setClassificacao(5);
        $clientes[8]->setEnd(new Endereco("Rua Margarida Oculta, 080", "Cabo Frio", "RJ"));
        
        $clientes[9] = new Fisica(10, null, "Joaquim Alves", "456.874.563.85", "Masculino");
        $clientes[9]->setFoto("http://placehold.it/130x130");
        $clientes[9]->setClassificacao(5);
        $clientes[9]->setEnd(new Endereco("Rua José Crispim Gonçalves", "Lavrinhas", "SP"));        
        
        ?>

        <?php
        if (!isset($_GET['id'])):
            ?>

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>                                        
                        <th>Foto</th>
                        <th>Nome / Razão Social</th>
                        <th>Tipo</th>
                        <th>Classificação</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($clientes as $cliente) {

                        echo "<tr>";
                        echo "<td>" . $cliente->getId() . "</td>";
                        echo "<td><img src=\"" . $cliente->getFoto() . "\"/></td>";
                        if ($cliente->getTipo() == "Fisica"):
                            echo "<td>" . $cliente->getNome() . "</td>";
                        else:
                            echo "<td>" . $cliente->getRazaoSocial() . "</td>";
                        endif;
                        echo "<td>" . $cliente->getTipo() . "</td>";
                        echo "<td>" . $cliente->getClassificacao() . "</td>";
                        echo '<td><a href="?id=' . $cliente->getId() . '">Editar</a></td>';
                        echo "</tr>";
                    }
                    ?>


                </tbody>
            </table>

            <?php
        else:
            $id = $_GET['id'] - 1;
            ?>

            <table border="1" width="100%">
                <tr>
                    <td colspan="2" rowspan="5"><img src="<?php echo $clientes[$id]->getFoto(); ?>" /></td>
                    <td>Código:</td>
                    <td><?php echo $clientes[$id]->getId(); ?></td>
                </tr>
                <tr>
                    <td>Nome / Razão Social:</td>
                    <?php if ($clientes[$id]->getTipo() == "Fisica"): ?>
                        <td><?php echo $clientes[$id]->getNome(); ?></td>
                    <?php else: ?>
                        <td><?php echo $clientes[$id]->getRazaoSocial(); ?></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>CPF/CNPJ:</td>
                    <?php if ($clientes[$id]->getTipo() == "Fisica"): ?>
                        <td><?php echo $clientes[$id]->getCpf(); ?></td>
                    <?php else: ?>
                        <td><?php echo $clientes[$id]->getCnpj(); ?></td>
                    <?php endif; ?>
                </tr>
                <tr>
                    <td>Classificação</td>
                    <td><?php echo $clientes[$id]->getClassificacao(); ?></td>
                </tr>
                <tr>
                    <td>Tipo:</td>
                    <td><?php echo $clientes[$id]->getTipo(); ?></td>
                </tr>
                <tr>
                    <td colspan="4">Descrição</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                            laboris nisi ut aliquip ex ea commodo consequat. 
                        </p>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">Endereço padrão:</td>
                </tr>
                <tr>
                    <td colspan="4"><?php echo $clientes[$id]->getEnd(); ?></td>
                </tr>
                <?php if ($clientes[$id]->getEndCobranca()): ?>
                    <tr>
                        <td colspan="4">Endereço de cobrança:</td>
                    </tr>
                    <tr>
                        <td colspan="4"><?php echo $clientes[$id]->getEndCobranca(); ?></td>
                    </tr>
                <?php endif; ?>
            </table>

        <?php endif; ?>

    </body>
</html>

