<?php
App::uses('AppController', 'Controller');
/**
 * Barrios Controller
 *
 * @property Barrio $Barrio
 */
class BarriosController extends AppController {
  
  /**
   * Index action
   */
  public function index() {
    $rows = $this->Barrio->find('all');
    $this->set('items', $rows);
       
    $this->viewPath = '';
    $this->view = 'list';
  }
}
