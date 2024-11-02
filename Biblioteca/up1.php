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
    <header><h1>Atualizar dados</h1></header>
    <nav>
    <table class="tabnav">
    <tr>
    <td class="tdnav"><a href="cadusu.php"> Cadastrar usuário </a> </td>
    <td class="tdnav"><a href="conusu.php"> Consulta usuário</a> </td>
    <td class="tdnav"><a href="up1.php"> Atualizar dados do usuário</a> </td>
    <td class="tdnav"><a href="up1.php"> Apagar dados do usuário </a> </td>
    
    </tr>
    </table>
    </nav>
    <main>
        <form action="up1.php" method="POST">
        <table>
            <tr><td>Nome:</td><td><input type="text" name="nomeusu"></td></tr>
            <tr><td>Código do usuário:</td><td><input type="text" name="codusu"></td></tr>
            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Consultar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["nomeusu"])){
            $nomeusu = $_POST["nomeusu"];
        }
        else{
            $nomeusu = null;
        }
        if(isset($_POST["codusu"])){
            $codusu = $_POST["codusu"];
        }
        else{
            $codusu = null;
        }

       
        if($nomeusu != null OR $codusu != null){
            include_once("conecta.php");
            $sql = "SELECT  codusu, tipousu, nomeusu, endusu, docusu, statususu FROM usu WHERE  nomeusu = '$nomeusu' OR '$codusu'";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $codusu = $row["codusu"];
                    $nomeusu = $row["nomeusu"];
                    $endusu = $row["endusu"];
                    $docusu = $row["docusu"];
                    $statususu = $row["statususu"];
                   
                    
                }

                echo"
            <br><br><br>
            <form action='up2.php' method='POST'>
        <table>
            <tr><td>Código do usuário:</td><td>$codusu<input type='hidden' name='codusu' value='$codusu'></td></tr>
            <tr><td>Nome:</td><td><input type='text' name='nomeusu' value='$nomeusu'></td></tr>
            <tr><td>Endereço:</td><td><input type='text' name='endusu'value='$endusu'></td></tr>
            <tr><td>Documento:</td><td><input type='text' name='docusu' value='$docusu'></td></tr>
            <tr><td>Status:</td><td><input type='text' name='statususu' value='$statususu'></td></tr>
            <tr><td><input type='reset' value='Apagar'></td>
            <td><input type='submit' value='Atualizar'></td></tr>
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