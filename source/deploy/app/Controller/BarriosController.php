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
    $this->listAll($this->Barrio);
  }
}
