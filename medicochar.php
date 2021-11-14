<?php
$con = new PDO("mysql:host=localhost;dbname=registro_de_medicos", "root", "");

$con->query("INSERT INTO medicos(nome,rua, numero,logadouro,complemento,bairro,cep,email,celular,fixo,secundario,data_nasc)
 VALUES ('junio','principal', '55', 'vila', 'conjunto','maria','30451532','telidio@gmail.com','31991452485','31932972016','3191458909','01/09/1992');");

$con->query("UPDATE medicos SET logadouro='vila' WHERE id_medicos='1';");

$con->query("DELETE FROM medicos WHERE id_medicos='2';");

$busca = $con->query("SELECT * FROM medicos;");
$informacoes = $busca->fetch(PDO::FETCH_ASSOC);

foreach($informacoes as $key => $valor){
    echo "$key = $valor <br>";
};
?>