<?php

class AutorLivroDTO
{
    public $id_autor_livro;
    public $id_autor;
    public $id_livro;
    public $ordem_participacao;
    public $created_at;
    public $updated_at;

    public function __construct($id_autor, $id_livro, $ordem_participacao)
    {
        $this->id_autor = $id_autor;
        $this->id_livro = $id_livro;
        $this->ordem_participacao = $ordem_participacao;
    }
}
