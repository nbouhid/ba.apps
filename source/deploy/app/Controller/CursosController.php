<?php
App::uses('AppController', 'Controller');
/**
 * PfPedidos Controller
 *
 * @property PfPedido $PfPedido
 */
class CursosController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		var_dump($this->Curso->find('all'));
		$this->set('Curso', $this->paginate());		
	}
	}