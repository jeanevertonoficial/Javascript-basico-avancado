<?php 

class Cadastro 
{
    private $mysql;

    public function __construct(mysqli $mysql) 
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $nome, string $usuario, string $email, string $senha): void
    {
        $cadastro = $this->mysql->prepare("INSERT INTO UsuarioCliente(`nome`, `usuario`, `email`, `senha`) VALUES (?, ?, ?,?);");
        $cadastro->bind_param('ssss', $nome, $usuario, $email, $senha);
        $cadastro->execute();
    }

    public function exibirTodos(): array
    {
        $exibirTodos = $this->mysql->query('SELECT id, nome, usuario, email, senha FROM UsuarioCliente;');
        $exibirTodos = $exibirTodos->fetch_all(MYSQLI_ASSOC);

        return $exibirTodos;
    }

    public function EncontrarId(string $id): array
    {
        $encontrar = $this->mysql->prepare('SELECT * FROM UsuarioCliente WHERE id = ?;');
        $encontrar->bind_param('s', $id);
        $encontrar->execute();
        $encontrar = $encontrar->get_result()->fetch_assoc();
        return $encontrar;
    }

    public function remover(string $id): void
    {
        $removerCliente = $this->mysql->prepare('DELETE FROM UsuarioCliente WHERE id= ?;');
        $removerCliente->bind_param('s', $id);
        $removerCliente->execute();
    }


    public function editar(string $id, string $nome, string $usuario, string $email, string $senha): void
    {
        $editaCliente = $this->mysql->prepare('UPDATE UsuarioCliente SET nome = ?, usuario = ?, email = ?, senha = ? WHERE id = ?');
        $editaCliente->bind_param('sssss', $id, $nome, $usuario, $email, $senha);
        $editaCliente->execute();
    }
}

