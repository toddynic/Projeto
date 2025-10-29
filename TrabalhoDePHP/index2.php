<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação de Agendamento</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #E0FFFF;
            color: #003333;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #20B2AA;
            color: white;
            padding: 20px;
            font-size: 28px;
            font-weight: bold;
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }

        .resposta {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 40px auto;
            background-color: white;
            padding: 30px 50px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            width: 400px;
        }

        h2 {
            color: #008B8B;
        }

        p {
            font-size: 16px;
            margin: 5px 0;
        }

        button {
            margin-top: 20px;
            background-color: #20B2AA;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #008B8B;
        }
    </style>
</head>
<body>
    
<header>Médico do Aparelho</header>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $tel = $_POST['tel'];
        $aparelho = $_POST['aparelho'];
        $data = $_POST['data'];
        $descr = $_POST['descr'];

        echo "<div class='resposta'>";
        echo "<h2>Agendamento Concluído</h2>";
        echo "<p><strong>Nome do cliente:</strong> $nome</p>";
        echo "<p><strong>Telefone para contato:</strong> $tel</p>";
        echo "<p><strong>Tipo de aparelho:</strong> $aparelho</p>";
        echo "<p><strong>Data preferida:</strong> $data</p>";
        echo "<p><strong>Descrição do problema:</strong> $descr</p>";
        echo "<button onclick='voltar()'>Voltar</button>";
        echo "</div>";
    }
?>

<script>
    function voltar() {
        window.location.href = "index.php";
    }
</script>

</body>
</html>
