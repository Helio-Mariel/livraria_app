<?php

class ItemCarrinhoDTO
{
  public $id_itens;
  public $quantidade;
  public $data_compra;
  public $morada_entrega;
  public $preco_unitario;
  public $estado;
  public $id_livro;
  public $id_carrinho;
  public $created_at;
  public $updated_at;

  public function __construct($quantidade, $data_compra, $morada_entrega, $preco_unitario, $estado, $id_livro, $id_carrinho)
  {
    $this->quantidade = $quantidade;
    $this->data_compra = $data_compra;
    $this->morada_entrega = $morada_entrega;
    $this->preco_unitario = $preco_unitario;
    $this->estado = $estado;
    $this->id_livro = $id_livro;
    $this->id_carrinho = $id_carrinho;
  }
}
