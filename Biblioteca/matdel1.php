<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar material </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Apagar material</h1></header>
    <nav>
    <table class="tabnav">
        <tr>
            <td class="tdnav"><a href="cadmat.php"> Cadastrar Material </a> </td>
            <td class="tdnav"><a href="conmat.php"> Consultar Material</a> </td>
            <td class="tdnav"><a href="upmat1.php"> Atualizar Material</a> </td>
            <td class="tdnav"><a href="matdel1.php"> Apagar Material </a> </td>
    
    </tr>
    </table>
    
    </nav>
    <main>
        <form action="matdel1.php" method="POST">
        <table>
            <tr><td>Código do usuário:</td><td><input type="text" name="codmat"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["codmat"])){
            $codmat = $_POST["codmat"];
        }
        else{
            $codmat = null;
        }
        

       
        if($codmat != null ){
            include_once("conecta.php");
            $sql = "SELECT  codmat ,tipomat , titulomat, autormat, temamat, outromat, statusmat FROM material WHERE  codmat = '$codmat'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $codmat = $row["codmat"];
                    $tipomat = $row["tipomat"];
                    $titulomat = $row["titulomat"];
                    $autormat = $row["autormat"];
                    $temamat = $row["temamat"];
                    $outromat = $row["outromat"];
                    $statusmat = $row["statusmat"];
                   
                    
                }

                echo"
            <br><br><br>
            <form action='matdel2.php' method='POST'>
        <table>
        <tr><td>Código:</td><td>$codmat<input type='hidden' name='codmat' value='$codmat'></td></tr>
        <tr><td>Tipo:</td><td><input type='text' name='tipomat' value='$tipomat'></td></tr>
        <tr><td>Titulo:</td><td><input type='text' name='titulomat' value='$titulomat'></td></tr>
        <tr><td>Autor:</td><td><input type='text' name='autormat' value='$autormat'></td></tr>
        <tr><td>Tema:</td><td><input type='text' name='temamat'value='$temamat'></td></tr>
        <tr><td>Outro:</td><td><input type='text' name='outromat' value='$outromat'></td></tr>
        <tr><td>Status:</td><td><input type='text' name='statusmat' value='$statusmat'></td></tr>
        <tr><td><input type='reset' value='Apagar'></td>
        <td><input type='submit' value='Confirmar'></td></tr>
        </table>
        </form>
            ";
            }else{
                echo"<p>Nada encontrado! </p>";
            }

            
            
        }
    
       

    ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>