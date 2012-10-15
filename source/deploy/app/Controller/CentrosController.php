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
    $rows = $this->Centro->find('all');
    $this->set('items', $rows);
       
    $this->viewPath = '';
    $this->view = 'list';
  }
}
