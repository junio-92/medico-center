<?php
 $con = new PDO("mysql:host=localhost;dbname=cadastro_paciente","root",""); 

$con->query("UPDATE tbl_paciente  SET rua='rua doa anjos' WHERE id_paciente='2';");

$con->query("DELETE FROM tbl_paciente WHERE id_paciente='2';");

