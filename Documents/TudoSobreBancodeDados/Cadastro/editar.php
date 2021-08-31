<?php include_once 'includes/header.php'; ?>
<?php
include_once 'src/Conexao/conexao.php';
include_once 'src/cadastro.php';
require_once  'redireciona.php';
?>
<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $encontrar = new Cadastro($mysql);
    $encontrar->editar($_POST['id'], $_POST['nome'], $_POST['usuario'], $_POST['email'], $_POST['senha']);

    redireciona('index.php');
}

$encontrar = new Cadastro($mysql);
$cliente = $encontrar->EncontrarId($_GET['id']);

?>
<main>
    <section>
        <div>
            <h1>Dados dos clientes</h1>
            <form action="editar.php" method="post">

                <p>
                    <label> Nome</label>
                    <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" required />
                </p>
                <p>
                    <label> Usuario</label>
                    <input type="text" name="usuario" valeu="<?php echo $cliente['usuario']; ?>" required />
                </p>
                <p>
                    <label> Email</label>
                    <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required />
                </p>
                <p>
                    <label> Senha</label>
                    <input type="text" name="senha" value="<?php echo $cliente['senha']; ?>" required />
                </p>
                <p>
                    <input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
                </p>
                <p>
                    <button class="botao">Editar</button>
                </p>
            </form>
        </div>
    </section>
</main>


<?php include_once 'includes/footer.php'; ?>