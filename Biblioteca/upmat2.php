<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de material</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Consultar atualização</h1></header>
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
       
    <?php
        if(isset($_POST["codmat"])){
            $codmat = $_POST["codmat"];
        }
        else{
            $codmat = null;
        }

        if(isset($_POST["tipomat"])){
            $tipomat = $_POST["tipomat"];
        }
        else{
            $tipomat = null;
        }

        if(isset($_POST["titulomat"])){
            $titulomat = $_POST["titulomat"];
        }
        else{
            $titulomat = null;
        }
        if(isset($_POST["autormat"])){
            $autormat = $_POST["autormat"];
        }
        else{
            $autormat = null;
        }

        if(isset($_POST["temamat"])){
            $temamat = $_POST["temamat"];
        }
        else{
            $temamat = null;
        }

        if(isset($_POST["outromat"])){
            $outromat = $_POST["outromat"];
        }
        else{
            $outromat = null;
        }
        if(isset($_POST["statusmat"])){
            $statusmat = $_POST["statusmat"];
        }
        else{
            $statusmat = null;
        }
       
        if($codmat != null ){
            include_once("conecta.php");
            $sql = "UPDATE material SET codmat='$codmat', tipomat='$tipomat', titulomat='$titulomat', autormat='$autormat',temamat='$temamat', outromat='$outromat' , statusmat='$statusmat' WHERE codmat= '$codmat'";
           if($conn->query($sql) === TRUE){
               echo"Atualizado com sucesso!!!";
           }
            else{
                echo"<p>Erro na atualização". $conn->error." </p>";
            }
        }

       
       

    ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>