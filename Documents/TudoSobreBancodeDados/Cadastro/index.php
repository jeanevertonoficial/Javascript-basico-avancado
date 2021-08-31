<?php include "includes/header.php" ?>

<?php
require_once 'src/Conexao/conexao.php';
require_once 'src/cadastro.php';
require_once  'redireciona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    $cadastrarClientes = new Cadastro($mysql);
    $cadastrarClientes->adicionar($_POST['nome'], $_POST['usuario'], $_POST['email'], $_POST['senha']);
  
    redireciona('cliente.php');
}

?>
<main>
    <section>
        <div>
            <h1>Login de Cadastro</h1>
        </div>
        <form action="index.php" method="POST">

            <p>Nome</p>
            <input type="text" name="nome" placeholder="Digite seu nome"></input>
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="Digite seu usuario"></input>
            <p>Email</p>
            <input type="email" name="email" placeholder="Digite seu email"></input>
            <p>Senha</p>
            <input type="text" name="senha" placeholder="Digite sua senha"></input>
            <p>
                <button name="button" class="botao">Enviar</button>
            </p>
        </form>

    </section>
</main>

<?php include "includes/footer.php" ?>