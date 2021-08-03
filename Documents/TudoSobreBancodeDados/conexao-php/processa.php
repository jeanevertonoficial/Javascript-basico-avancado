<?php include_once("includes/header.php"); ?>


<?php 

include_once("conexao.php"); 
?>
<?php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);


$result_usuario = "INSERT INTO cadastrodados (nome, email, created, modificado) VALUES ('$nome', '$email', NOW())";
$resultado = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "Usuário cadastrado com sucesso";
    header("Location: index.php");
} else {
    $_SESSION['msg'] = "Erro ao cadastrar no banco de dados";
    header("Location: index.php");
}


?>
<main>
    <div>
        <div><?php echo "Nome: $nome"; ?></div>
        <div><?php echo "Email: $email"; ?></div>
        <a href="index.php">
        <button type="submit" class="cadastrar" value="cadastrar">Voltar</button></a>
    </div>
</main>