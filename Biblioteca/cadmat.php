<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro</title>    
</head>
<body>
    <header><h1>Cadastro de Material</h1></header>
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
        <form action="cadmat.php" method="POST">
        <table>
        Tipo:
        <select id="tipomat" name="tipomat">
            <option value="Livro">Livro</option>
            <option value="Revista">Revista</option>
            <option value="Outro">Outro</option>
        </select>
            <tr><td>Titulo:</td><td><input type="text" name="titulomat"></td></tr>
            <tr><td>Autor:</td><td><input type="text" name="autormat"></td></tr>
            <tr><td>Tema:</td><td><input type="text" name="temamat"></td></tr>
            <tr><td>Outro:</td><td><input type="text" name="outromat"></td></tr>
            
            <tr><td>
            Status:
            <select id="statusmat" name="statusmat">
            <option value="Selecione">Selecione</option>
            <option value="Livre">Livre</option>
            <option value="Emprestado">Emprestado</option>
            <option value="Retido">Retido</option>

            </select>
            </td></tr>

            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Cadastrar"></td></tr>
        </table>
        </form>
    <?php
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
        //Erro está aqui .
        if($tipomat != null and $titulomat != null and $autormat != null and $temamat != null and $statusmat != null){
                include_once("conecta.php");
                $sql = "INSERT INTO material (codmat, tipomat, titulomat, autormat, temamat, outromat, statusmat) VALUES ('', '$tipomat','$titulomat','$autormat', '$temamat', '$outromat', '$statusmat')";
                if($conn->query($sql) === TRUE){
                    echo"<p>Cadastrado com sucesso!</p>"; 
                }
                else{
                    echo"Erro:".$sql."<br>".$conn->error;
                }
            }

    ?>
    </main>
    <footer><h1></h1></footer>
</html>