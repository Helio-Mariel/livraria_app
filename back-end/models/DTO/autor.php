<?php

class AutorDTO
{
  public $id_autor;
  public $nome;
  public $apelido;
  public $nacionalidade;
  public $created_at;
  public $updated_at;

  public function __construct($nome, $apelido, $nacionalidade)
  {
    $this->nome = $nome;
    $this->apelido = $apelido;
    $this->nacionalidade = $nacionalidade;
  }
}
