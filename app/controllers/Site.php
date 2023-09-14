<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
  public function home()
  {
    require_once __DIR__ . '/../views/home.php';
  }
  public function galeria($foto)
  {
    $photo = $foto;
    require_once __DIR__ . '/../views/galeria.php';
  }
  public function cadastro()
  {
    $cadastro = $this->create();

    require_once __DIR__ . '/../views/cadastro.php';
  }
  public function consulta()
  {
    $consulta = $this->read();

    require_once __DIR__ . '/../views/consulta.php';
  }
}
