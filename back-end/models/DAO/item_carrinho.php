<?php
require_once './config/DB/db.php';
/**
 * @property Item_CarrinhoDAO $this
 */

class Item_CarrinhoDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
