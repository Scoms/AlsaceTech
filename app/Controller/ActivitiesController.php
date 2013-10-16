<?php

class ActivitiesController extends AppController
{
	var $uses = array('User','Activity','Company');

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

	public function inscription()
	{
		$activities = $this->User->Activity->find('list',array('fields' => array('id', 'label'),
			"order"=>"type DESC"));

		if ($this->request->is('post')) 
		{
			//Test both
			$i=0;
			foreach ($this->request->data as $row) 
			{
				foreach ($row['Activity'] as $id) 
				{
					$activity = $this->Activity->findById($id);
					if($activity['Activity']['type'] == 'autre')
					{
						$i++;
					}
				}
			}
			if($i==2)
			{
				$this->Session->setFlash('Merci de ne selectionner qu\' une seule des deux dernières options');
			}
			else
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
	    }

		$this->User->save($this->data);
	    $this->set('activities',$activities);

	    $user = $this->User->findById(AuthComponent::user('id'));
	    $arraytest = array();

	    foreach ($user['Activity'] as $el) 
	    {
	    	array_push($arraytest, $el['id']);
	    }
	    $this->set('selected',$arraytest);
	}
}

?>