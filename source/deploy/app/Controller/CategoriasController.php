<?php
App::uses('AppController', 'Controller');
/**
 * Categorias Controller
 *
 * @property Categoria $Categoria
 */
class CategoriasController extends AppController {

  /**
   * Index action
   */
  public function index() {
    $this->listAll($this->Categoria);
  }
}
