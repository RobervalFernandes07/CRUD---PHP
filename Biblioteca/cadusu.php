<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Biblioteca</h1></header>
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
        <form action="biblioteca.php" method="POST">
        <table>
        Tipo:
        <select id="tipo" name="tipousu">
            <option value="prof">Professor</option>
            <option value="alu">Aluno</option>
            <option value="func">Funcionario</option>
        </select>
            <tr><td>Nome:</td><td><input type="text" name="nome"></td></tr>
            <tr><td>Endereço:</td><td><input type="text" name="ende"></td></tr>
            <tr><td>Documento:</td><td><input type="text" name="doc"></td></tr>
            
            <tr><td>
            Status:
            <select id="status" name="statususu">
            <option value="0">0</option>
            </select>
            </td></tr>

            <tr><td><input type="reset" value="Apagar"></td>
            <td><input type="submit" value="Cadastar"></td></tr>
        </table>
        </form>
    <?php
        if(isset($_POST["tipousu"])){
            $tipousu = $_POST["tipousu"];
        }
        else{
            $tipousu = null;
        }
        if(isset($_POST["nome"])){
            $nome = $_POST["nome"];
        }
        else{
            $nome = null;
        }

        if(isset($_POST["ende"])){
            $ende = $_POST["ende"];
        }
        else{
            $ende = null;
        }

        if(isset($_POST["doc"])){
            $doc = $_POST["doc"];
        }
        else{
            $doc = null;
        }
        if(isset($_POST["statususu"])){
            $statususu = $_POST["statususu"];
        }
        else{
            $statususu = null;
        }

        if($tipousu != null and $nome != null and $ende != null and $doc != null){
                include_once("conecta.php");
                $sql = "INSERT INTO usu (codusu, tipousu, nomeusu, endusu, docusu, statususu) VALUES ('', '$tipousu','$nome', '$ende', '$doc', '$statususu')";
                if($conn->query($sql) === TRUE){
                    echo"<p>Cadastrado con sucesso!</p>"; 
                }
                else{
                    echo"Erro:".$sql."<br>".$conn->error;
                }
            }

    ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>