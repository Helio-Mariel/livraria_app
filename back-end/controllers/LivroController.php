<?php
require_once './models/DAO/cliente.php';
header('Content-Type:application/json');
class ClienteController
{
  private $cliente;
  private $endpoint;
  private $method;
  public function __construct()
  {
    $this->cliente = new ClienteDAO();
    $this->endpoint = $_SERVER['PATH_INFO'];
    $this->method = $_SERVER['REQUEST_METHOD'];
  }

  public function processRequest()
  {
    header('Content-Type: application/json');

    switch ($this->method) {
      case 'GET':
        if ($this->endpoint === '/user') {
          $result = $this->cliente->getCliente();
          echo json_encode($result);
        } else if (preg_match('/^\/user\/(\d+)$/', $this->endpoint, $matches)) {
          $id = $matches[1];
          $result = $this->cliente->getCliente();
          echo json_encode([$result]);
        }
        break;
      case 'POST':
        if ($this->endpoint === '/user') {
          $data = $_POST; // For a real application, consider filtering this data
          $result = $this->cliente->getCliente();
          echo json_encode($result);
        }
        break;
      case 'DELETE':
        if (preg_match('/^\/user\/(\d+)$/', $this->endpoint, $matches)) {
          $id = $matches[1];
          $result = $this->cliente->getCliente();
          echo json_encode(['user removed']);
        }
        break;
      default:
        http_response_code(405);
        echo json_encode(['error' => 'Method Not Allowed']);
        break;
    }
  }
}
