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
                    <td colspan="2" rowspan="4"><img src="<?php echo $clientes[$id]->getFoto(); ?>" /></td>
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

