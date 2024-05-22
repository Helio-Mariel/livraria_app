<?php
require_once './config/DB/db.php';
/**
 * @property Preferencias_ClienteDAO $this
 */

class Preferencias_ClienteDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
