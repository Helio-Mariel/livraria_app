<?php
require_once './models/DAO/administrador.php';
require_once './models/DTO/administrador.php';
header('Content-Type:application/json');
class AdministradorController
{
  private $administrador;
  private $endpoint;
  private $method;
  public function __construct()
  {
    $this->administrador = new administradorDAO();
    $this->endpoint = $_SERVER['PATH_INFO'];
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function processRequest()
  {
    header('Content-Type: application/json');

    switch ($this->method) {
      case 'GET':
        if ($this->endpoint === '/user') {
          $result = $this->administrador->getAdmin();
          echo json_encode($result);
        } else if (preg_match('/^\/user\/(\d+)$/', $this->endpoint, $matches)) {
          $id_administrador = $matches[1];
          $result = $this->administrador->getAdminById($id_administrador);
          echo json_encode([$result]);
        }
        break;
      case 'POST':
        if ($this->endpoint === '/admin/criar') {
          $data = json_decode(file_get_contents('php://input'), true);

          $username = $data['username'];
          $password = $data['password'];

          $administrador = new AdministradorDTO(
            $username,
            $password
          );
          $result = $this->administrador->createAdmin($administrador);
          echo json_encode($result);
        } else if ($this->endpoint === '/admin/login') {
          $data = json_decode(file_get_contents('php://input'), true);
          $username = $data['username'];
          $password = $data['password'];

          $result = $this->administrador->loginAdmin($username, $password);
          echo json_encode($result);
        }
        break;
      case 'DELETE':
        if (preg_match('/^\/user\/(\d+)$/', $this->endpoint, $matches)) { /*
          $id = $matches[1];
          $result = $this->cliente->getCliente();
          echo json_encode(['user removed']); */
        }
        break;
      default:
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
        break;
    }
  }
}
