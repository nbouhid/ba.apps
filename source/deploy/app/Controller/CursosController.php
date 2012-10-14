<?php
App::uses('AppController', 'Controller');

/**
 * Cursos Controller
 */
class CursosController extends AppController {
  
  public $uses = array('Curso', 'Centro', 'Categoria', 'Barrio');
  
  public function beforeFilter() {
    parent::beforeFilter();
    
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
    $barrio = $this->cargarItemModeloPorNombre($this->Barrio, $nombre);
  }
  
  public function porCentro($nombre) {
    $centro = $this->cargarItemModeloPorNombre($this->Centro, $nombre);
  }
  
  public function porCategoria($nombre) {
    $categoria = $this->cargarItemModeloPorNombre($this->Categoria, $nombre);
  }
  
  private function cargarItemModeloPorNombre($model, $nombre) {
    $filtro = $model->findByNombre(Inflector::humanize($nombre));

    //Check if the filter exists, if not, redirect to home
    if(empty($filtro)) {
      $this->redirect('/');
    }
    
    $conditions = array($model->name . '.id' => $filtro['Barrio']['id']);
    
    $this->set('items', $this->Curso->getCursos($conditions));
    
    $this->view = 'list';
  }
  
  public function detalle($curso) {
    $this->set('curso', $curso);
  }
}