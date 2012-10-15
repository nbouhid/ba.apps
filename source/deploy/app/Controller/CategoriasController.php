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
    $rows = $this->Categoria->find('all');
    $this->set('items', $rows);
       
    $this->viewPath = '';
    $this->view = 'list';
  }
}
