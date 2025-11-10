<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novembro</title>

    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form div {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }


        .butao {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin: 10px;
        }

    </style>

</head>
<body>
    
    <form action="index.php" method="post">
        
        <div class="Tabela">
            
            <div>
                <label>Nome</label>
                <input type="text" name="Nome" required>
            </div>

            <div>
                <label>CPF</label>
                <input type="text" name="cpf" minlength="11" maxlength="11" required>
            </div>

            <div>
                <label>Idade</label>
                <input type="number" name="idade" required>
            </div>

            <div>
                <label>Data</label>
                <input type="date" name="Data" required>
            </div>

        </div>

        <div class="butao">
            <input type="submit" name="cadastrar" value="Cadastrar">
            <input type="submit" name="enviar" value="Entrar">
        </div>
    
    </form>

    <?php
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $nome = $_POST["Nome"];
            $cpf = $_POST["cpf"];
            $data = $_POST["Data"];
            $idade = $_POST["idade"];
        
            $conn = new mysqli("localhost","root","aluno","sistema","3307");

            if ($conn->connect_error) {
                die("error de conexão:". $conn->connect_error);
            }

            if (isset($_POST["cadastrar"])) {

                $sql = "INSERT INTO cadastro (nome, cpf, data_envio, idade) VALUES ('$nome', '$cpf', '$data', '$idade')";

                if($conn->query($sql) === TRUE) {
                    echo "deu bom";
                }
            }

            if (isset($_POST["enviar"])) {

                $sql = "INSERT INTO cadastro (nome, cpf, data_envio, idade) VALUES ('$nome', '$cpf', '$data', '$idade')";

                if($conn->query($sql) === TRUE) {
                    echo "deu bom";
                }

            }

            $conn->close();
        }
    
        
    
    ?>

</body>
</html>