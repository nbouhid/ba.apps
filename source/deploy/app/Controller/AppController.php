<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  public $uses = array('Curso');
  protected $_body_classes = array('basic-page');
  protected function listAll($model) {
    $rows = $model->find('all');
	foreach($rows as &$row) {
	  $row[$model->name]['cant_cursos'] = $this->Curso->find('count', array(
		'conditions' => array($model->name . '_id' => $row[$model->name]['id'])
	  ));
	}
    $this->set('items', $rows);
       
    $this->viewPath = '';
    $this->view = 'list';
    
    $this->_body_classes[] = 'page-cursos-front';
    $this->set('body_classes', $this->_body_classes);
    $this->set('model', $model->name);
    $this->set('top_title', $this->name);
    
  }
}
