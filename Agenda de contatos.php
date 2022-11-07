<?php

try {
    $connection = new PDO('mysql:host=localhost;port=3306;dbname=Agenda;','root','');
}
catch (Exception $error) {
    echo "Erro no: ".$error->getMessage();

}

$sql = "delete from clientes where nome = :nome";
$result = $connection->prepare($sql);
$result->bindValue(':nome','');
$result->execute();

$sql = "update clientes set email = '' where id = :id";
$result = $connection->prepare($sql);
$result->bindValue(':id','2');
$result->execute();


$sql = 'insert into clientes (nome, sexo, nascimento, telefone, email)
                        values (:nome, :sexo, :nascimento, :telefone, :email)';

$result = $connection -> prepare($sql);
$result -> bindValue(':nome','');
$result -> bindValue(':sexo','');
$result -> bindValue(':nascimento','');
$result -> bindValue(':telefone','');
$result -> bindValue(':email','');
$result -> execute();



$sql = 'select * from clientes';
$result = $connection ->prepare($sql);
$result-> execute();

var_dump($result->fechAll(PDO:: FECH_OBJ));


?>