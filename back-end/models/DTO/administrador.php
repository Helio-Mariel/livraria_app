<?php

class AdministradorDTO
{
  public $id_administrador;

  public $username;
  public $password;

  public function __construct($username, $password)
  {
    $this->username = $username;
    $this->password = password_hash($password, PASSWORD_DEFAULT);
  }
}
