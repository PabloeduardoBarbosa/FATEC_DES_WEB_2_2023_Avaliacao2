<?php
require_once('connect.php');
require_once('DBConnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'] ?? null;
    $documento = $_POST['documento'] ?? null;
    $telefone = $_POST['telefone'] ?? null;
    $escolaridade = $_POST['escolaridade'] ?? null;

    $objeto1 = new DBConnect($conn); 

    if ($objeto1->inserir_candidatos($nome, $documento, $telefone, $escolaridade)) {
        echo "Registro inserido com sucesso.";
    } else {
        echo "Falha ao inserir registro.";
    }
}

?>
