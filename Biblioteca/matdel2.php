<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apagar dados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header><h1>Confirmar dados apagados</h1></header>
    <nav>
    
    <table class="tabnav">
    <tr>
    <td class="tdnav"><a href="cadusu.php"> Voltar ao início</a> </td>
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


       
        if($codmat != null){
            include_once("conecta.php");
            $sql = "DELETE FROM material WHERE codmat = '$codmat'";
           if($conn->query($sql) === TRUE){
               echo"Excluido com sucesso!!!";
           }
            else{
                echo"<p>Erro na exclusão". $conn->error." </p>";
            }
        }

       

    ?>
    </main>
    <footer><h1></h1></footer>
</body>
</html>