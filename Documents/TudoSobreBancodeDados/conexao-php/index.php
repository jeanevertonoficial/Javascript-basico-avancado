<?php session_start(); ?>
<?php include_once("includes/header.php"); ?>
<?php 
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
} ?>
<main class="corpo">
    <form action="processa.php" method="POST">
        <label class="nome" for="nome">Nome </label> <input name="nome" type="text" placeholder="Digite seu nome aqui...">
        <label class="nome" for="email">Email </label><input name="email" type="email" placeholder="Digite seu email aqui...">
        <button type="submit" class="cadastrar" value="cadastrar">Cadastrar</button>
    </form>
</main>
</body>

</html>