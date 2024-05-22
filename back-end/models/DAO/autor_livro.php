<?php
require_once './config/DB/db.php';
/**
 * @property Autor_LivroDAO $this
 */

class Autor_LivroDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
