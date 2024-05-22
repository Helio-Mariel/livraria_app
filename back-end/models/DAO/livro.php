<?php
require_once './config/DB/db.php';
/**
 * @property LivroDAO $this
 */

class LivroDAO

{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
