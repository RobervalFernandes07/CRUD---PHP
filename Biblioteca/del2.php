<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar Dados do Usuário</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Apagar Dados do Usuário</h1></header>
    <nav>
        <table class="tabnav">
            <tr>
                <td class="tdnav"><a href="cadusu.php">Voltar ao Início</a></td>
            </tr>
        </table>
    </nav>
    <main>
        <form action="apagausu.php" method="POST">
            <table>
                <tr>
                    <td>Nome do Usuário:</td>
                    <td><input type="text" name="nomeusu" required></td>
                </tr>
                <tr>
                    <td>Código do Usuário:</td>
                    <td><input type="text" name="codusu" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Excluir Dados"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nomeusu = $_POST["nomeusu"] ?? null;
            $codusu = $_POST["codusu"] ?? null;

            if ($nomeusu || $codusu) {
                include_once("conecta.php");

                $sql = "DELETE FROM usu WHERE nomeusu = '$nomeusu' OR codusu = '$codusu'";
                if ($conn->query($sql) === TRUE) {
                    echo "<p>Excluído com sucesso!!!</p>";
                } else {
                    echo "<p>Erro na exclusão: " . $conn->error . "</p>";
                }
            } else {
                echo "<p>Por favor, preencha pelo menos um campo.</p>";
            }
        }
        ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>
