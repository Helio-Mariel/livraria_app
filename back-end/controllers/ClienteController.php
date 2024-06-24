<?php

require_once './models/DAO/cliente.php';
require_once './models/DTO/cliente.php';
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
          $id_cliente = $matches[1];
          $result = $this->cliente->getClienteById($id_cliente);
          echo json_encode([$result]);
        }
        break;
      case 'POST':
        if ($this->endpoint === '/user') {
          $data = json_decode(file_get_contents('php://input'), true); // For a real application, consider filtering this data
          $nome = $data['nome'];
          $apelido = $data['apelido'];
          $password = $data['password'];
          $email = $data['email'];
          $n_telefone = $data['n_telefone'];
          $nacionalidade = $data['nacionalidade'];
          $BI = $data['BI'];
          $profissao = $data['profissao'];
          $morada = $data['morada'];

          $cliente = new ClienteDTO(
            $nome,
            $apelido,
            $password,
            $email,
            $n_telefone,
            $nacionalidade,
            $BI,
            $profissao,
            $morada
          );
          $result = $this->cliente->createCliente($cliente);
          echo json_encode($result);
        } else if ($this->endpoint === '/criar') {

          $nome = 'nome';
          $apelido = 'apelido';
          $password = 'password';
          $email = 'email';
          $n_telefone = 'n_telefone';
          $nacionalidade = 'nacionalidade';
          $BI = 'BI';
          $profissao = 'profissao';
          $morada = 'morada';

          $cliente = new ClienteDTO(
            $nome,
            $apelido,
            $password,
            $email,
            $n_telefone,
            $nacionalidade,
            $BI,
            $profissao,
            $morada
          );
          $result = $this->cliente->createCliente($cliente);
          echo json_encode($result);
        }

        break;
      case 'DELETE':
        if (preg_match('/^\/user\/(\d+)$/', $this->endpoint, $matches)) {
          $id_cliente = $matches[1];
          $result = $this->cliente->DeleteCliente($id_cliente);
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
