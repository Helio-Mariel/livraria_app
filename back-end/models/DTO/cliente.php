<?php

class ClienteDTO
{
  public $id_cliente;
  public $nome;
  public $apelido;
  public $password;
  public $email;
  public $n_telefone;
  public $nacionalidade;
  public $BI;
  public $profissao;
  public $morada;
  public $created_at;
  public $updated_at;

  public function __construct($nome, $apelido, $password, $email, $n_telefone, $nacionalidade, $BI, $profissao, $morada)
  {
    $this->nome = $nome;
    $this->apelido = $apelido;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
    $this->email = $email;
    $this->n_telefone = $n_telefone;
    $this->nacionalidade = $nacionalidade;
    $this->BI = $BI;
    $this->profissao = $profissao;
    $this->morada = $morada;
  }
}
