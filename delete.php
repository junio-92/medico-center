<?php

    try{
        $ca = new PDO ("mysql:host=localhost;dbname=clinica;","root","");
    }catch (PDOException $e) {
        echo "Erro no banco: " . $e->getMessage();
    }
    
    if(isset($_POST['id']) && !empty($_POST['id'])){
        $id = addslashes($_POST['id']);

        $var = $ca->prepare("DELETE FROM tbl_procedimento WHERE id = :id");
        $var->bindParam(":id", $id);
        $var->execute();
    }

?>