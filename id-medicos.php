<?php


try {
    
    $con = new PDO("mysql:host=localhost;dbname=registro_de_medicos", "root", "programadorhabilitado199200");
    
    } catch (PDOException $e) {
        echo "falha no banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Falha: " .$e->getMessage();
    }


if(isset( $_POST['nome'], $_POST['rua'], $_POST['numero'],
 $_POST['logadouro'], $_POST['complemento'], $_POST['bairro'], $_POST['cep'], $_POST['email'], 
 $_POST['celular'], $_POST['fixo'], $_POST['secundario'], $_POST['data'])) {
    $nome = $_POST['nome'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $logadouro = $_POST['logadouro'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $fixo = $_POST['fixo'];
    $secundario = $_POST['secundario'];
    $data = $_POST['data'];
}





$mandar = $con->prepare("INSERT INTO medicos (nome,rua, numero,logadouro,complemento,bairro,cep,email,celular,fixo,secundario,data_nasc)
 VALUES (:n, :r, :nm, :l, :c, :b, :cp, :e, :cl, :f, :s, :d)");
$mandar->bindParam(":n", $nome);
$mandar->bindParam(":r", $rua);
$mandar->bindParam(":nm", $numero);
$mandar->bindParam(":l", $logadouro);
$mandar->bindParam(":c", $complemento);
$mandar->bindParam(":b", $bairro);
$mandar->bindParam(":cp", $cep);
$mandar->bindParam(":e", $email);
$mandar->bindParam(":cl", $celular);
$mandar->bindParam(":f", $fixo);
$mandar->bindParam(":s", $secundario);
$mandar->bindParam(":d", $data);
$mandar->execute();





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        body{
            background-color: black;
        }
        h1{
            color:#ffff;
            
            text-align: center;
        }

        
    </style>
</head>
<body>
    <h1>Cadastro Realizado</h1>
</body>
</html>