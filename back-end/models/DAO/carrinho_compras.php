<?php
require_once './config/DB/db.php';
/**
 * @property  Carrinho_ComprasDAO $this
 */

class Carrinho_ComprasDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
