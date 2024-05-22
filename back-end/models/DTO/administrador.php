<?php

class AdministradorDTO
{
  public $id_administrador;
  public $password;

  public function __construct($password)
  {
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }
}
