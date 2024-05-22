<?php

class DB
{
  public static function getConnection()
  {
    try {
      $pdo = new PDO("mysql:dbname=livraria; host=localhost", "root", "");
      return $pdo;
    } catch (PDOException $err) {
    }
  }
}
