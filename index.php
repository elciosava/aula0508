<?php
include 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h2>Foxtron</h2>

        <nav>
            <ul>
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#cadastrar">Cadastrar</a></li>
                <li><a href="#listar">Listar</a></li>
            </ul>
        </nav>
    </header>

    <section id="inicio">

    </section>

    <section id="cadastrar">
        <div class="formulario">
            <form action="cadastrar_usuario.php" method="post" class="formu">
                <label for="nome_usuario">Nome:</label>
                <input type="text" name="nome_usuario" id="nome_usuario">

                <label for="email_usuario">Email:</label>
                <input type="email" name="email_usuario" id="email_usuario">

                <label for="senha_usuario">Senha:</label>
                <input type="password" name="senha_usuario" id="senha_usuario">

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </section>

    <section id="listar">
        <div class="listar">
            <?php
            $limite = 10;

            //pagina atual 
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;

            if ($pagina < 1) {
                $pagina = 1;
            }

            $offset = ($pagina - 1) * $limite;

            //total de registros
            $sql_total = "SELECT COUNT(*) as total FROM usuarios";
            $stmt_total = $conexao->prepare($sql_total);
            $stmt_total->execute();

            $total_registros = $stmt_total->fetchColumn();
            $total_paginas = ceil($total_registros / $limite);

            //busca apenas os registros da pagina atual
            $sql_busca = "SELECT * FROM usuarios LIMIT :limite OFFSET :offset";

            $stmt_busca = $conexao->prepare($sql_busca);
            $stmt_busca->bindValue(':limite', $limite, PDO::PARAM_INT);
            $stmt_busca->bindValue(':offset', $offset, PDO::PARAM_INT);
            $stmt_busca->execute();

            ?>
            <table>
                <thead>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Senha</th>
                    <th colspan="2">Ações</th>
                </thead>
                <?php

                while ($usuarios = $stmt_busca->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>{$usuarios['nome_usuario']}</td>";
                    echo "<td>{$usuarios['email_usuario']}</td>";
                    echo "<td>{$usuarios['senha_usuario']}</td>";

                    echo "<td>
                                        <form action = 'excluir_cadastro.php' method='get'>
                                        <input type='hidden' name='id_usuario' value='{$usuarios['id_usuario']}'>
                                        <button type='submit'>Excluir</button>
                                        </form>
                        </td>
                        <td>
                                        <form action = 'editar_cadastro.php' method='get'>
                                        <input type='hidden' name='id_usuario' value='{$usuarios['id_usuario']}'>
                                        <button type='submit'>Editar</button>
                                        </form>";
                    echo "</td>";

                    echo "</tr>";
                    echo "</tbody>";
                }
                ?>
            </table>

            <div class="paginacao">
                <?php if($pagina > 1): ?>
                    <a href="?pagina=<?= $pagina - 1 ?>#listar">Anterior</a>
                <?php endif; ?>

                <?php 
                    for($i = 1; $i <= $total_paginas; $i++){
                        if($i == $pagina){
                            echo "<strong>$i</strong>";
                        }else{
                            echo "<a href='?pagina=$i#listar'>$i</a>";
                        }
                    }
                ?>

                <?php if($pagina < $total_paginas): ?>
                    <a href="?pagina=<?= $pagina + 1 ?>#listar">Próximo</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
</body>

</html>