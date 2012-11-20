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
    $this->_body_classes[] = 'listado-barrios';
    $this->listAll($this->Barrio);
  }
}
