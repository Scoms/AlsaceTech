<?php

class CompanyController extends AppController{

	var $uses = array('User','Company');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('index');
	}

	public function isAuthorized()
	{
		if(AuthComponent::user('username'))
		{
			return true;
		}
	}

	public function index()
	{

	}

	public function category($category=null)
	{
		$category = $category == null ? '' : $category;
		$companies = $this->User->Company->find('list',array(
			'fields' => array('id', 'label'),
			'conditions' => array('category' => $category)
			));

		if ($this->request->is('post')) 
		{
	    	$this->User->create();
	    	$this->User->set('id',AuthComponent::user('id'));
	    	if ($this->User->save($this->request->data)) 
	    	{
	       		$this->Session->setFlash(__('Données enregistrées'));
	      	}
	    	else 
	    	{	
	        	$this->Session->setFlash(__('Oups'));
	        }
	    }

		$this->User->save($this->data);
	    $this->set('companies',$companies);

	    $user = $this->User->findById(AuthComponent::user('id'));
	    $arraytest = array();

	    foreach ($user['Company'] as $el) 
	    {
	    	array_push($arraytest, $el['UsersCompany']['company_id']);
	    }
	    $this->set('selected',$arraytest);
	}
}

?>