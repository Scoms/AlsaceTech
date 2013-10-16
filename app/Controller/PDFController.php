<?php

App::uses('File', 'Utility');
App::uses('Folder', 'Utility');

class PDFController extends AppController{
	
	var $uses = array('User','Company','Booking');
	
	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('download');
	}

	public function isAuthorized()
	{
		if(AuthComponent::user('username'))
		{
			return true;
		}
	}

	public function download()
	{
	        //Configure::write('debug',0); // Otherwise we cannot use this method while developing 
			$confs = $this->Booking->find('all',array(
				'conditions' => array('user_id' => AuthComponent::user('id')
				)));
			$this->set('confs',$confs);

			$user = $this->User->findById(AuthComponent::user('id'));
			$this->set('activities',$user['Activity']);
	        $this->layout = 'pdf'; //this will use the pdf.ctp layout 
	        $this->render(); 
	}
}

?>