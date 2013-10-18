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

	    $user = $this->User->findById(AuthComponent::user('id'));

		if ($this->request->is('post')) 
		{
			foreach ($user['Company'] as $oldCompany) 
			{
				if($oldCompany['category'] != $category)
				{
					array_push($this->request->data['User']['Company'], $oldCompany['id']);
				}
			}

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
	        		$this->User->save($this->data);
	    }
	    $this->set('companies',$companies);

	    $selected = array();

		if ($this->request->is('post')) 
		{
		    foreach ($this->request->data['User']['Company'] as $el) 
		    {
		    		array_push($selected, $el);    		
		    }
		}
		else
		{
		    foreach ($user['Company'] as $el) 
		    {
	    		array_push($selected, $el['id']);    		 	
		    }
		}
		
	    $this->set('selected',$selected);
	}
}

?>