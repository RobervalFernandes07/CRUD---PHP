<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Consulta </h1></header>
    <nav>
    <table class="tabnav">
    <tr>
    <td class="tdnav"><a href="cadusu.php"> Cadastro </a> </td>
    </tr>
    </table>
    </nav>
    <main>
        <form action="consulta.php" method="POST">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nome"></td></tr>
            <tr><td>Código do usuário:</td><td><input type="text" name="codusu"></td></tr>
            
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["codusu"])){
            $codusu = $_POST["codusu"];
        }
        else{
            $codusu = null;
        }

        if($nome != null AND $codusu == null){
            include_once("conecta.php");
            $sql = "SELECT codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE  nomeusu = '$nome'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"<p>Código do usuário: ".$row["codusu"]."
                    <br>Tipo: ".$row["tipousu"]." 
                    <br>Nome: ".$row["nomeusu"]."
                    <br>Endereço: ".$row["endusu"]."  
                    <br>Documento: ".$row["docusu"]." 
                    <br>Status: ".$row["statususu"]." 
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }
            
        }

        if($codusu != null AND $nome == null){
            include_once("conecta.php");
            $sql = "SELECT  codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE codusu = '$codusu'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"<p>Código do usuário: ".$row["codusu"]."
                    <br>Tipo: ".$row["tipousu"]." 
                    <br>Nome: ".$row["nomeusu"]."
                    <br>Endereço: ".$row["endusu"]."  
                    <br>Documento: ".$row["docusu"]." 
                    <br>Status: ".$row["statususu"]." 
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }
            
        }
        if($nome != null AND $codusu != null){
            include_once("conecta.php");
            $sql = "SELECT codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE  nomeusu = '$nome'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo"<p>Código do usuário: ".$row["codusu"]."
                    <br>Tipo: ".$row["tipousu"]." 
                    <br>Nome: ".$row["nomeusu"]."
                    <br>Endereço: ".$row["endusu"]."  
                    <br>Documento: ".$row["docusu"]." 
                    <br>Status: ".$row["statususu"]." 
                    </p>";
                }
            }else{
                echo"<p>Nada encontrado! </p>";
            }
            
        }

    ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>