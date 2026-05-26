<?php include('conexao.php'); ?>

<?php

if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $vacina = $_POST['vacina'];
    $observacoes = $_POST['observacoes'];

    $sql = "INSERT INTO cadastro_ovelhas
    (nome, raca, sexo, idade, peso, vacina, observacoes)

    VALUES

    ('$nome','$raca','$sexo','$idade','$peso','$vacina','$observacoes')";

    if($conexao->query($sql)){
        header('Location: index.php');
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastrar Ovelha</title>

    <link rel="stylesheet" href="style.css">

</head>
<body>

<nav>

    <h1>Sistema de Ovelhas</h1>

    <div class="menu">

        <a href="index.php">Início</a>

        <a href="cadastrar.php">Cadastrar Ovelha</a>

    </div>

</nav>

<br>

<h1>Cadastrar Ovelha</h1>

<form method="POST">

    <input type="text" name="nome" placeholder="Nome" required>

    <input type="text" name="raca" placeholder="Raça" required>

    <input type="text" name="sexo" placeholder="Sexo" required>

    <input type="number" name="idade" placeholder="Idade" required>

    <input type="number" step="0.01" name="peso" placeholder="Peso" required>

    <input type="text" name="vacina" placeholder="Vacinas">

    <input type="text" name="observacoes" placeholder="Observações">

    <button type="submit" name="cadastrar">Cadastrar</button>

</form>

</body>
</html>