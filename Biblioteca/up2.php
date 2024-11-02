<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Atualização de Dados do Usuário</h1></header>
    <nav>
        <table class="tabnav">
            <tr>
                <td class="tdnav"><a href="cadusu.php">Cadastrar Usuário</a></td>
                <td class="tdnav"><a href="conusu.php">Consultar Usuário</a></td>
                <td class="tdnav"><a href="up1.php">Atualizar Dados do Usuário</a></td>
                <td class="tdnav"><a href="delusu.php">Apagar Dados do Usuário</a></td>
            </tr>
        </table>
    </nav>
    <main>
        <form action="atualiza.php" method="POST">
            <table>
                <tr>
                    <td>Tipo de Usuário:</td>
                    <td><input type="text" name="tipousu" required></td>
                </tr>
                <tr>
                    <td>Nome do Usuário:</td>
                    <td><input type="text" name="nomeusu" required></td>
                </tr>
                <tr>
                    <td>Endereço:</td>
                    <td><input type="text" name="endusu"></td>
                </tr>
                <tr>
                    <td>Documento:</td>
                    <td><input type="text" name="docusu"></td>
                </tr>
                <tr>
                    <td>Status:</td>
                    <td><input type="text" name="statususu"></td>
                </tr>
                <tr>
                    <td>Código do Usuário:</td>
                    <td><input type="text" name="codusu" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Atualizar Dados"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tipousu = $_POST["tipousu"] ?? null;
            $nomeusu = $_POST["nomeusu"] ?? null;
            $endusu = $_POST["endusu"] ?? null;
            $docusu = $_POST["docusu"] ?? null;
            $statususu = $_POST["statususu"] ?? null;
            $codusu = $_POST["codusu"] ?? null;

            if ($nomeusu || $codusu) {
                include_once("conecta.php");
                $sql = "UPDATE usu SET 
                            tipousu='$tipousu', 
                            endusu='$endusu', 
                            docusu='$docusu', 
                            statususu='$statususu' 
                        WHERE nomeusu='$nomeusu' OR codusu='$codusu'";

                if ($conn->query($sql) === TRUE) {
                    echo "<p>Atualizado com sucesso!!!</p>";
                } else {
                    echo "<p>Erro na atualização: " . $conn->error . "</p>";
                }
            } else {
                echo "<p>Por favor, preencha pelo menos o Nome do Usuário ou o Código do Usuário.</p>";
            }
        }
        ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>
