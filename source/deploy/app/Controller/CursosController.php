<?php
App::uses('AppController', 'Controller');

/**
 * Cursos Controller
 */
class CursosController extends AppController {

  public $uses = array('Curso', 'Centro', 'Categoria', 'Barrio');
  
  public function beforeFilter() {
    parent::beforeFilter();
    
    $this->_body_classes = array('basic-page', 'page-cursos');
    
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
        
        $this->_body_classes = array('basic-page', 'page-details');
      }
    }
  }
  
  public function beforeRender() {
    $this->set('body_classes', $this->_body_classes);
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
    $this->_body_classes[] = 'por-barrio';
    $this->cargarItemModeloPorNombre($this->Barrio, $nombre);
  }
  
  public function porCentro($nombre) {
    $this->_body_classes[] = 'por-centro';
    $this->cargarItemModeloPorNombre($this->Centro, $nombre);
  }
  
  public function porCategoria($nombre) {
    $this->_body_classes[] = 'por-categoria';
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
  
  private function validateBusquedaAvanzada() {
	return !($this->data['Curso']['categoria_id'] == 0 && $this->data['Curso']['barrio_id'] == 0);
  }
  
  public function avanzada() {
    $this->set('top_title', 'B&uacute;squeda Avanzada');
	
    if($this->request->is('post') && $this->validateBusquedaAvanzada()) {
      $this->_body_classes[] = 'busqueda-avanzada';
      $this->_body_classes[] = 'resultados';
      $conditions = array();

      if($this->data['Curso']['barrio_id'] != 0)
        $conditions[] = array('barrio_id' => $this->data['Curso']['barrio_id']);

      if($this->data['Curso']['categoria_id'] != 0)
        $conditions[] = array('categoria_id' => $this->data['Curso']['categoria_id']);

      $items = $this->Curso->getCursos($conditions);
      
      if (count($items)>0) {
        $this->set('items', $this->Curso->getCursos($conditions));

        $this->view = 'list';
      }
      else {
        $this->_body_classes[] = 'busqueda-avanzada';
        $this->view = 'no_results';
      }
    }
    else {
      $this->_body_classes[] = 'busqueda-avanzada';
      $this->set('categorias', $this->Categoria->find('list', array(
        'order' => 'Categoria.nombre'
      )));
      $this->set('barrios', $this->Barrio->find('list', array(
        'order' => 'Barrio.nombre'
      )));
    }
  }
}