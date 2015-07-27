<?php
class SearchesController extends AppController {

	public $name = 'Searches';
  
	function beforeFilter() {
		parent::beforeFilter();
        $this->Auth->allow('index');
	}
	
	function beforeRender() {
	  parent::beforeRender();
	}

	function index($query='') {

		if(isset($this->data) && count($this->data)>0) {
		    $query = $this->data['Search']['query'];
		    $this->redirect(array('action'=>'index', $query));
		}

		$this->set('query', $query);

		if($query!='') {
			$teams = $this->Search->Team->find('all', array('conditions'=>array("Team.name LIKE '%" . $query . "%'")));
			$this->set('teams', $teams);
		}
	}

}
