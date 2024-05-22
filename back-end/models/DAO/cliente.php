<?php
require_once './config/DB/db.php';
/*
 * @property ClienteDAO $this
 */

class ClienteDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }

  public function getCliente()
  {
    $stm = $this->pdo->prepare("SELECT * FROM cliente");
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getClienteById($id_cliente)
  {
    $stm = $this->pdo->prepare("SELECT * FROM cliente WHERE id_cliente = :id_cliente");
    $stm->bindParam(":id_cliente", $id_cliente);
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createCliente(ClienteDTO $clienteDTO)
  {
    $stm = $this->pdo->prepare("INSERT INTO cliente (nome, apelido, password, email, n_telefone, nacionalidade, BI, profissao, morada) VALUES(:nome, :apelido, :password, :email, :n_telefone, :nacionalidade, :BI, :profissao, :morada)");
    $stm->bindParam(":nome", $clienteDTO->nome);
    $stm->bindParam(":apelido", $clienteDTO->apelido);
    $stm->bindParam(":password", $clienteDTO->password);
    $stm->bindParam(":email", $clienteDTO->email);
    $stm->bindParam(":n_telefone", $clienteDTO->n_telefone);
    $stm->bindParam(":nacionalidade", $clienteDTO->nacionalidade);
    $stm->bindParam(":BI", $clienteDTO->BI);
    $stm->bindParam(":profissao", $clienteDTO->profissao);
    $stm->bindParam(":morada", $clienteDTO->morada);

    $stm->execute();
    return ($stm);
  }

  public function DeleteCliente($id_cliente)
  {
    $stm = $this->pdo->prepare("DELETE FROM cliente WHERE id_cliente = :id_cliente");
    $stm->bindParam(":id_cliente", $id_cliente);
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function UpdateCliente(ClienteDTO $clienteDTO, $id_cliente)
  {
    $stm = $this->pdo->prepare("UPDATE cliente SET nome = :nome , apelido = :apelido , password = :password , email = :email , n_telefone = :n_telefone , nacionalidade = :nacionalidade, BI = :BI , profissao = :profissao , morada = :morada  WHERE id_cliente = :id_client);
    ");
    $stm->bindParam(":nome", $clienteDTO->nome);
    $stm->bindParam(":apelido", $clienteDTO->apelido);
    $stm->bindParam(":password", $clienteDTO->password);
    $stm->bindParam(":email", $clienteDTO->email);
    $stm->bindParam(":n_telefone", $clienteDTO->n_telefone);
    $stm->bindParam(":nacionalidade", $clienteDTO->nacionalidade);
    $stm->bindParam(":BI", $clienteDTO->BI);
    $stm->bindParam(":profissao", $clienteDTO->profissao);
    $stm->bindParam(":morada", $clienteDTO->morada);
    $stm->bindParam(":id_cliente", $id_cliente);

    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
}
