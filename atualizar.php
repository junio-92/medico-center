<?php

    try{
        $ca = new PDO ("mysql:host=localhost;dbname=clinica;","root","programadorhabilitado199200");
    }catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
    
    if(isset($_POST['id'])){
        $id = addslashes($_POST['id']);
        $nome = htmlspecialchars($_POST['nome']);
        $valor = addslashes($_POST['valor']);
        $genero = addslashes($_POST['genero']);
    }

    $var = $ca->prepare("UPDATE tbl_procedimento SET nome = :n, valor = :v, genero = :g WHERE id = :id");
    $var->bindParam(":n", $nome);
    $var->bindParam(":v", $valor);
    $var->bindParam(":g", $genero);
    $var->bindParam(":id", $id);
    $var->execute();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <Style>
         body{
            background-color: black;
        }
        h1{
            color:#ffff;
            
            text-align: center;
        }
    </Style>
</head>
<body>
    <h1>Cadastro Realizado</h1>
</body>
</html>