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
            <form action="cadastrar_usuario.php" method="post">
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

    </section>
</body>
</html>