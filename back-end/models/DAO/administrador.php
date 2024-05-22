<?php
require_once './config/DB/db.php';
/**
 * @property AdministradorDAO $this
 */

class AdministradorDAO
{
  private $pdo;
  public function __construct()
  {
    $this->pdo = DB::getConnection();
  }
}
