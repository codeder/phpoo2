<?php
require_once 'interface/iCliente.php';
require_once 'class/Endereco.php';
require_once 'class/DescricaoFoto.php';
require_once 'class/Fisica.php';
require_once 'class/Juridica.php';
require_once 'data/clientes.php';
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
        if (!isset($_GET['id'])):
            ?>

            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>                                        
                        <th>Foto</th>
                        <th>Nome / Razão Social</th>
                        <th>Tipo</th>
                        <th>Andamento do projeto</th>
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
                        echo "<td>" . $cliente->getPercentual() . "</td>";
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
                    <td>Andamento do projeto</td>
                    <td><?php echo $clientes[$id]->getPercentual(); ?></td>
                </tr>
                <tr>
                    <td>Tipo:</td>
                    <td><?php echo $clientes[$id]->getTipo(); ?></td>
                </tr>
                <tr>
                    <td colspan="4">Descrição do Projeto</td>
                </tr>
                <tr>
                    <td colspan="4">
                        <p><?php echo $clientes[$id]->getDescricao(); ?></p>
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

