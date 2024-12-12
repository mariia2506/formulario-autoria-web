<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=arrow_drop_down" />
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/server.css">
    <link rel="stylesheet" href="../css/dev.css">
    <title>Formulário de Cadastro - Musculação & Nutrição</title>
</head>
<body>
    <header>
        <h1>Cadastro - Musculação & Nutrição</h1>

        <nav>
            <a href="../index.html">Início</a>
            <a href="../dev.html">Desenvolvedores</a>
            <a href="../server/server.php">Formulário</a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="form-image">
                <img src="../img/undraw_fitness_data_4p2u.svg" alt="Imagem de musculação">
            </div>
            <div class="form">
                <h1>Dados Cadastrais</h1>
                <br>
                <?php

                $name = $_POST['name'];
                $email = $_POST['email'];
                $numero = $_POST['numero'];
                $data = $_POST['data'];
                $password = $_POST['password'];
                $perfil = $_POST['perfil'];
                $color = $_POST['color'];
                $ident = $_POST['ident'];
                $treino = $_POST['treino'];
                $objetivo = $_POST['objetivo'];
                $alimentacao = $_POST['alimentacao'];
                $suplemento = $_POST['suplemento'];
                $suplemento_tipo = $_POST['suplemento_tipo'];

                ?>
                <div class="resposta">
                    <h2>Nome: </h2>
                    <?php echo $name; ?>
                    <br>

                    <h2>Email: </h2>
                    <?php echo $email; ?>
                    <br>

                    <h2>Número: </h2>
                    <?php echo $numero; ?>
                    <br>

                    <h2>Data de Nascimento: </h2>
                    <?php echo $data; ?>
                    <br>

                    <h2>Senha: </h2>
                    <?php echo $password; ?>
                    <br>

                    <h2>Foto de Perfil: </h2>
                    <?php echo $perfil; ?>
                    <br>

                    <h2>Cor Favorita: </h2>
                    <?php echo $color; ?>
                    <br>

                    <h2>Identificação: </h2>
                    <?php echo $ident; ?>
                    <br>

                    <h2>Frequência de Treino (vezes por semana): </h2>
                    <?php echo $treino; ?>
                    <br>

                    <h2>Objetivo Principal: </h2>
                    <?php echo $objetivo; ?>
                    <br>

                    <h2>Como você descreve sua alimentação? </h2>
                    <?php echo $alimentacao; ?>
                    <br>

                    <h2>Suplementos Utilizados: </h2>
                    <?php 
                    if ($suplemento == "sim") {
                        echo "Sim, Suplementos: " . $suplemento_tipo;
                    } else {
                        echo "Não utiliza suplementos";
                    }
                    ?>
                    <br>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="titulo-footer">
            <h3>IFRN Campus Santa Cruz - Trabalho de Autoria Web</h3> <span class="material-symbols-outlined"> arrow_drop_down </span>
        </div>
        <h3>Prof. Marcelo Figueiredo Barbosa Júnior</h3>
        <div class="desenvolvedores">
            <h2>Devs</h2> <span class="material-symbols-outlined"> arrow_drop_down </span>
        </div>
        <h3>Maria Rita Palma de Araújo</h3>
        <h3>Ana Caroline Lima de Medeiros</h3>
    </footer>
</body>
</html>

