<?php include_once 'includes/header.php'; ?>

<?php

include 'src/Conexao/conexao.php';
require 'src/cadastro.php';
require_once 'redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $removerCliente = new Cadastro($mysql);
    $removerCliente->remover($_POST['id']);

    redireciona('cliente.php');
}

?>
<main>
    <section>
        <div>
            <h1>Você realmente deseja excluir este Cliente?</h1>
            <form method="post" action="excluir.php">
                <p>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>"/>
                    <button class="botao">Excluir</button>
                    <a href="cliente.php"><button class="botao">Voltar</button></a>
                </p>
            </form>
        </div>
    </section>
</main>

<?php include_once 'includes/footer.php'; ?>