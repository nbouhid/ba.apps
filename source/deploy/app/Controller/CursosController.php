<?php
App::uses('AppController', 'Controller');

/**
 * Cursos Controller
 */
class CursosController extends AppController {

  public $uses = array('Curso', 'Centro', 'Categoria', 'Barrio');
  //public $helpers = array('Js', 'Html');
  public $helpers = array('Js');
  
  public function beforeFilter() {
    parent::beforeFilter();
    
    $this->set('body_classes', array('basic-page', 'page-cursos'));
    
    //If the action doesn't exist, may be it's a request for a curso
    if(!in_array($this->request->params['action'], get_class_methods($this))
            && is_numeric($this->request->params['action'])) {
      $curso = $this->Curso->findById($this->request->params['action']);
      
      //if it is an actual curso
      if(!empty($curso)) {
        //Show details
        //$this->setAction('detalle', $curso);
        $this->request->params['action'] = 'detalle';
        $this->request->params['pass'][0] = $curso;
        
        $this->view = 'detalle';
        
        $this->set('body_classes', array('basic-page', 'page-details'));
      }
    }
  }
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->set('items', $this->Curso->getCursos());
    
    $this->view = 'list';
	}
  
  public function porBarrio($nombre) {
    $this->cargarItemModeloPorNombre($this->Barrio, $nombre);
  }
  
  public function porCentro($nombre) {
    $this->cargarItemModeloPorNombre($this->Centro, $nombre);
  }
  
  public function porCategoria($nombre) {
    $this->cargarItemModeloPorNombre($this->Categoria, $nombre);
  }
  
  private function cargarItemModeloPorNombre($model, $nombre) {
    $filtro = $model->findByNombre(Inflector::humanize($nombre));

    //Check if the filter exists, if not, redirect to home
    if(empty($filtro)) {
      $this->redirect('/');
    }
    
    $conditions = array($model->name . '.id' => $filtro[$model->name]['id']);
    
    $this->set('items', $this->Curso->getCursos($conditions));
    $this->set('top_title', 'Por ' . Inflector::pluralize($model->name));

    $this->view = 'list';
  }
  
  public function detalle($curso) {
    $this->set('curso', $curso);
    $this->set('top_title', 'Curso de ' . $curso['Curso']['nombre']);
  }
}