<?php
require_once './config/DB/db.php';
/**
 * @property AutorDAO $this
 */

class AutorDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
