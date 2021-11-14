<?php

try {
    
    $con = new PDO("mysql:host=localhost;dbname=cadastro_paciente", "root", "programadorhabilitado199200");
    
    } catch (PDOException $e) {
        echo "falha no banco de dados: " . $e->getMessage();
    } catch (Exception $e) {
        echo "Falha: " .$e->getMessage();
    }

    if(isset( $_POST['nome'], $_POST['rua'], $_POST['logradouro'],
    $_POST['num'], $_POST['complemento'], $_POST['bairro'], $_POST['cep'], $_POST['email'], 
    $_POST['tl_fixo'], $_POST['cel'], $_POST['tl_sec'], $_POST['assist'] , $_POST['a_data'])) {
        $nome = ($_POST['nome']);
        $rua = ($_POST['rua']);
        $log = ($_POST['logradouro']);
        $num =  ($_POST['num']);
        $compl =  ($_POST['complemento']);
        $bairro = ($_POST['bairro']);
        $cep =  ($_POST['cep']);
        $email =  ($_POST['email']);
        $tl_fixo =  ($_POST['tl_fixo']);
        $cel = ($_POST['cel']);
        $tl_sec = ($_POST['tl_sec']);
        $assist = ($_POST['assist']);
        $data =  ($_POST['a_data']);
    }         

    $var = $con->prepare("INSERT INTO tbl_paciente (nome, rua, logradouro, numero, complemento, bairro, cep, email, telefone_fixo, celular , telefone_secundario, assist, a_data) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i, :j, :k, :l, :m)");
    $var->bindParam(":a", $nome);
    $var->bindParam(":b", $rua);
    $var->bindParam(":c", $log);
    $var->bindParam(":d", $num);
    $var->bindParam(":e", $compl);
    $var->bindParam(":f", $bairro);
    $var->bindParam(":g", $cep);
    $var->bindParam(":h", $email);
    $var->bindParam(":i", $tl_fixo);
    $var->bindParam(":j", $cel);
    $var->bindParam(":k", $tl_sec);
    $var->bindParam(":l", $assist);
    $var->bindParam(":m", $data);
    $var->execute();
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