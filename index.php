<?php include('conexao.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de Ovelhas</title>

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

<table>

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Raça</th>
    <th>Sexo</th>
    <th>Idade</th>
    <th>Peso</th>
    <th>Vacinas</th>
    <th>Observações</th>
    <th>Ações</th>
</tr>

<?php

$sql = "SELECT * FROM cadastro_ovelhas";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){

    while($row = $resultado->fetch_assoc()){

        echo "<tr>";

        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['raca']."</td>";
        echo "<td>".$row['sexo']."</td>";
        echo "<td>".$row['idade']."</td>";
        echo "<td>".$row['peso']."</td>";
        echo "<td>".$row['vacina']."</td>";
        echo "<td>".$row['observacoes']."</td>";

        echo "<td>
        <a href='editar.php?id=".$row['id']."'>Editar</a>
        <a class='excluir' href='excluir.php?id=".$row['id']."'>Excluir</a>
        </td>";

        echo "</tr>";

    }

}

?>

</table>

</body>
</html>