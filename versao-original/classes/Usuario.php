<?php
require_once 'Database.php';

class Usuario
{
    private $db;

    public function __construct()
    {
        $this->db = (new Database())->connect();
    }

    public function criarUsuario($nome, $email, $senha)
    {
        $senha = password_hash($senha, PASSWORD_BCRYPT);
        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES (:nome, :email, :senha)";

        $query = $this->db->prepare($sql);
        $query->execute([
            'nome' => $nome,
            'email' => $email,
            'senha' => $senha,
        ]);
    }

    public function validarLogin($email, $senha)
    {
        $sql = "SELECT id, nome, senha FROM usuarios WHERE email = :email";

        $query = $this->db->prepare($sql);
        $query->execute(['email' => $email]);

        $usuario = $query->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return $usuario;
        }

        return false;
    }

    public function listarUsuarios()
    {
        $sql = "SELECT id,nome, email, criado_em FROM usuarios";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
    public function excluirUsuario($id)
    {
        $sql = "DELETE FROM usuarios WHERE id= :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function buscarUsuario($id)
    {
        $sql = "SELECT id, nome, email FROM usuarios WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(['id' => $id]);
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    public function atualizarUsuario($id, $nome, $email)
    {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
        $query = $this->db->prepare($sql);
        $query->execute([
            'nome' => $nome,
            'email' => $email,
            'id' => $id
        ]);
    }
}
