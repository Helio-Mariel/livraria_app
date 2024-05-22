<?php

class PreferenciasClienteDTO
{
  public $preferencia_id;
  public $area_cientifica;
  public $motivo;
  public $id_cliente;
  public $created_at;
  public $updated_at;

  public function __construct($area_cientifica, $motivo, $id_cliente)
  {
    $this->area_cientifica = $area_cientifica;
    $this->motivo = $motivo;
    $this->id_cliente = $id_cliente;
  }
}
