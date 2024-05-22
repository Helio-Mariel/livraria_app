<?php

class LivroDTO
{
    public $id_livro;
    public $titulo;
    public $ISBN;
    public $ano_publicacao;
    public $preco;
    public $quantidade_estoque;
    public $created_at;
    public $updated_at;

    public function __construct($titulo, $ISBN, $ano_publicacao, $preco, $quantidade_estoque)
    {
        $this->titulo = $titulo;
        $this->ISBN = $ISBN;
        $this->ano_publicacao = $ano_publicacao;
        $this->preco = $preco;
        $this->quantidade_estoque = $quantidade_estoque;
    }
}
