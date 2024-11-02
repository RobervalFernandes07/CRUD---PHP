<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta de Material</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Consulta de Material</h1></header>
    <nav>
        <table class="tabnav">
            <tr>
                <td class="tdnav"><a href="cadmat.php">Cadastrar Material</a></td>
                <td class="tdnav"><a href="conmat.php">Consultar Material</a></td>
                <td class="tdnav"><a href="upmat1.php">Atualizar Material</a></td>
                <td class="tdnav"><a href="matdel1.php">Apagar Material</a></td>
            </tr>
        </table>
    </nav>
    <main>
        <form action="conmat.php" method="POST">
            <table>
                <tr>
                    <td>Tipo:</td>
                    <td>
                        <select id="tipomat" name="tipomat">
                            <option value="li">Livro</option>
                            <option value="rev">Revista</option>
                            <option value="out">Outro</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Título:</td>
                    <td><input type="text" name="titulomat"></td>
                </tr>
                <tr>
                    <td>Autor:</td>
                    <td><input type="text" name="autormat"></td>
                </tr>
                <tr>
                    <td><input type="reset" value="Apagar"></td>
                    <td><input type="submit" value="Consultar"></td>
                </tr>
            </table>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tipomat = $_POST["tipomat"] ?? null;
            $titulomat = $_POST["titulomat"] ?? null;
            $autormat = $_POST["autormat"] ?? null;

            if ($tipomat || $titulomat || $autormat) {
                include_once("conecta.php");

                $sql = "SELECT tipomat, titulomat, autormat, temamat, outromat, statusmat 
                        FROM material 
                        WHERE tipomat = '$tipomat' OR titulomat = '$titulomat' OR autormat = '$autormat'";

                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<p>Tipo: {$row['tipomat']}
                              <br>Título: {$row['titulomat']}
                              <br>Autor: {$row['autormat']}
                              <br>Tema: {$row['temamat']}
                              <br>Outro: {$row['outromat']}
                              <br>Status: {$row['statusmat']}
                              </p>";
                    }
                } else {
                    echo "<p>Nada encontrado!</p>";
                }
            }
        }
        ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>
