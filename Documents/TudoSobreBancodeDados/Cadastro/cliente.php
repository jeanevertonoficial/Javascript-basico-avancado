<?php include 'includes/header.php'?>
<?php
include_once 'src/cadastro.php';
require_once 'src/Conexao/conexao.php';
require_once  'redireciona.php';


$clientes = new Cadastro($mysql);
$clientes = $clientes->exibirTodos();

?>
<main class="main--cliente">
    <?php foreach ($clientes as $clientes) : ?>
    <section class="cliente">
        <h1>Lista de Clientes</h1>
        <div>
        <a href="editar.php?id=<?php echo $clientes['id']?>"> 
            <p>Nome: <?php echo $clientes['nome'];?></p>
            <p>Usuario: <?php echo $clientes['usuario'];?></p>
            <p>Email: <?php echo $clientes['email'];?></p> </a>
            <a href="editar.php?id=<?php echo $clientes['id']?>"><button class="botao" >Editar</button></a>
            <a href="excluir.php?id=<?php echo $clientes['id']; ?>"><button class="botao">Excluir</button></a>
        </div>
    </section>
    <?php endforeach ?>
</main>


<?php include 'includes/footer.php';?>