<?php include('conexao.php'); ?>

<?php

$id = $_GET['id'];

$sql = "DELETE FROM cadastro_ovelhas WHERE id=$id";

if($conexao->query($sql)){
    header('Location: index.php');
}

?>