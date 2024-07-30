<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARES</title>
    <link rel="shortcut icon" href="ARES_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_tablet.css">
</head>
<body>
    <div id="info">
        <img src="ARES.jpg" alt="img" id="img">
        <img src="ARES_nome.png" alt="img" class="plus" id="bcvnome">
        <img src="ARES_logo.png" alt="img" class="plus" id="bcvlogo">
        <div id="textos">
            <h3>
                Nome <input type="text" name="" id="username">
                Ipsum dolor sit amet consectetur adipisicing elit. Dolorem nam laborum molestiae, perferendis beatae
                <select name="s1" id="is1">
                    <?php
                    // Configuração do banco de dados
                    $servername = "localhost";
                    $username = "root"; // Substitua pelo seu nome de usuário do MySQL
                    $password = ""; // Substitua pela sua senha do MySQL (ou deixe em branco se não houver senha)
                    $dbname = "teste_js";

                    // Criar conexão
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Checar conexão
                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    // Consulta SQL
                    $sql = "SELECT nome FROM info_pessoal";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhum nome encontrado</option>";
                    }

                    // Fechar conexão
                    $conn->close();
                    ?>
                </select>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium sapiente facere cumque ?
                <select name="s2" id="is2">
                    <?php
                    // Reabrir a conexão para o segundo select
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    $sql = "SELECT nome FROM info_pessoal";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhum nome encontrado</option>";
                    }

                    $conn->close();
                    ?>
                </select>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus consequatur ratione tempore quam error sed illum consequuntur! Quia beatae aliquam
                <select name="s3" id="is3">
                    <?php
                    // Reabrir a conexão para o terceiro select
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Conexão falhou: " . $conn->connect_error);
                    }

                    $sql = "SELECT nome FROM info_pessoal";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "'>" . htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8') . "</option>";
                        }
                    } else {
                        echo "<option value=''>Nenhum nome encontrado</option>";
                    }

                    $conn->close();
                    ?>
                </select>
            </h3>
        </div>
        <input type="button" value="Gerar PDF" id="pdf">
    </div>
</body>
</html>
