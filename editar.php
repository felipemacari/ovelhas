<?php include('conexao.php'); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM cadastro_ovelhas WHERE id=$id";
$resultado = $conexao->query($sql);

$row = $resultado->fetch_assoc();

if(isset($_POST['editar'])){

    $nome = $_POST['nome'];
    $raca = $_POST['raca'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];
    $vacina = $_POST['vacina'];
    $observacoes = $_POST['observacoes'];

    $sql = "UPDATE cadastro_ovelhas
    SET
    nome='$nome',
    raca='$raca',
    sexo='$sexo',
    idade='$idade',
    peso='$peso',
    vacina='$vacina',
    observacoes='$observacoes'
    WHERE id=$id";

    if($conexao->query($sql)){
        header('Location: index.php');
    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Editar Ovelha</title>

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

<h1>Editar Ovelha</h1>

<form method="POST">

    <input type="text" name="nome" value="<?php echo $row['nome']; ?>" required>

    <input type="text" name="raca" value="<?php echo $row['raca']; ?>" required>

    <input type="text" name="sexo" value="<?php echo $row['sexo']; ?>" required>

    <input type="number" name="idade" value="<?php echo $row['idade']; ?>" required>

    <input type="number" step="0.01" name="peso" value="<?php echo $row['peso']; ?>" required>

    <input type="text" name="vacina" value="<?php echo $row['vacina']; ?>">

    <input type="text" name="observacoes" value="<?php echo $row['observacoes']; ?>">

    <button type="submit" name="editar">Salvar</button>

</form>

</body>
</html>