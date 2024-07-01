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

  public function getAdmin()
  {
    $stm = $this->pdo->prepare("SELECT * FROM administrador");
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getAdminById($id_administrador)
  {
    $stm = $this->pdo->prepare("SELECT * FROM administrador WHERE id_administrador = :id_administrador");
    $stm->bindParam(":id_administrador", $id_administrador);
    $stm->execute();

    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
  public function loginAdmin($username, $password)
  {
    $stm = $this->pdo->prepare("SELECT * FROM administrador WHERE username = :username");
    $stm->bindParam(":username", $username);
    $stm->execute();

    $admin = $stm->fetch(PDO::FETCH_ASSOC);

    if ($admin && password_verify($password, $admin['password'])) {
      $_SESSION['id_administrador'] = $admin['id_administrador'];
      return true;
    } else {
      return false;
    }
  }

  public function createAdmin(AdministradorDTO $administradorDTO)
  {
    $stm = $this->pdo->prepare("INSERT INTO administrador (username, password) VALUES(:username, :password)");
    $stm->bindParam(":username", $administradorDTO->username);
    $stm->bindParam(":password", $administradorDTO->password);

    $stm->execute();
    return $stm;
  }
}
