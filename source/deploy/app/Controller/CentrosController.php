<?php
App::uses('AppController', 'Controller');
/**
 * Centros Controller
 *
 * @property Centro $Centro
 */
class CentrosController extends AppController {

  /**
   * Index action
   */
  public function index() {
    $this->listAll($this->Centro);
  }
}
