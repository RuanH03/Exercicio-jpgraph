<?php

$host = "localhost";
$dbname = "agenda";
$username = "aplicacao_agenda";
$password = "agenda123";
      try {
          $pdo = new PDO("mysql:host=".$host.";dbname=".$dbname,$username,$password);          
          }  
          catch (PDOException $e) {
              echo "Erro com o banco de dados " . $e->getMessage();
          }
          catch (PDOException $e) {
              echo "Erro genérico " . $e->getMessage();
          }
        
$query  ="SELECT cd_sexo, COUNT(*) AS qtd FROM tb_pessoa WHERE cd_sexo = 'F'";
$query2 ="SELECT cd_sexo, COUNT(*) AS qtd FROM tb_pessoa WHERE cd_sexo = 'M'";

$resultF = $pdo->query($query);
$resultH = $pdo->query($query2);

$qtdHomens = array();
$qtdMulheres = array();


$rowF = $resultF->fetchAll(PDO::FETCH_ASSOC);
foreach($rowF as $n)
  $qtdMulheres[] = $n['qtd'];


$rowH = $resultH->fetchAll(PDO::FETCH_ASSOC);
foreach($rowH as $n)
  $qtdHomens[] = $n['qtd'];


?>