<?php

class CarrinhoComprasDTO
{
  public $id_carrinho;
  public $id_cliente;
  public $created_at;
  public $updated_at;

  public function __construct($id_cliente)
  {
    $this->id_cliente = $id_cliente;
  }
}
