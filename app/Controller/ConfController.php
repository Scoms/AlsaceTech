<?php


class ConfController extends AppController
{
    var $uses = array('Booking','Conf');

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
		$confs = $this->Conf->find('all',array('order' => array('start')));
		$confsDisplay = array();
		$isBooked = false;
		foreach ($confs as $conf)
		{
			$confDisplay = array();
			$booking = $this->Booking->find('count',array(
				"conditions" => array(
				"conf_id" => $conf['Conf']['id']
			)));
			$isBooked = $this->Booking->find('first',array(
				"conditions" => array("conf_id" => $conf['Conf']['id'],"user_id" => AuthComponent::user('id'))
				)) == null ? false : true;
			array_push($confDisplay, $conf);
			array_push($confDisplay, $booking);
			array_push($confDisplay, $isBooked);
			array_push($confsDisplay, $confDisplay);
		}
		$this->set('confs',$confsDisplay);
	}	

	public function book($id)
	{
		$max_book = $this->Conf->find('first',array(
			"conditions" => array(
				"id" => $id
				)))['Conf']["type"] == "G" ? 100 : 45; 

		$list_book = $this->Booking->find('all',array(
			"conditions" => array("conf_id" => $id)
			));

		$alreadyBooked = false;
		$userId = AuthComponent::user('id');
		
		//If places remains
		if(sizeof($list_book) < $max_book)
		{
			//If not already booked
			if(!$this->Booking->find('first',array("conditions" => array("conf_id" => $id,"user_id" => $userId))))
			{
				//If the person is free 
				$bookedConfs = $this->Booking->find('all',array(
					"conditions" => array(
						"user_id" => AuthComponent::user('id')
						)));

				$currentConf = $this->Conf->find('first',array("conditions"=>array("id"=>$id)));
				$isFree = true;
				foreach ($bookedConfs as $conf)
				{
					if($conf['Conf']['start'] < $currentConf['Conf']['start'] && $currentConf['Conf']['start'] < $conf['Conf']['end'])
					{
						$isFree = false;
					}	
					if($conf['Conf']['start'] < $currentConf['Conf']['end'] && $currentConf['Conf']['end'] < $conf['Conf']['end'])
					{
						$isFree = false;
					}
					if($currentConf['Conf']['start'] < $currentConf['Conf']['start'] && $conf['Conf']['end'] < $currentConf['Conf']['end'])
					{
						$isFree = false;
					}	
					
					if(!$isFree)	
					{
						$this->Session->setFlash("Vous n'êtes pas disponible à ce moment.");
					}
				}

				if($isFree)
				{
					$this->Booking->Create();
					$this->Booking->set('conf_id',$id);
					$this->Booking->set('user_id',$userId);
					$this->Booking->save();
					$this->Session->setFlash("Vous êtes bien inscrit à l'événement.");
				}
			}
			else
			{
				$this->Session->setFlash("Vous êtes déjà inscrit à l'évènement.");
			}
		}
		$this->redirect(array('action'=>'index'));		
	}

	public function unbook($id)
	{
		$resID;
		if ($this->request->is('get')) 
		{
			$resID = $this->Booking->find('first',array(
				"conditions" => array("conf_id" => $id,"user_id" => AuthComponent::user('id'))
				))['Booking']['id'];
			$this->Booking->id = $resID;
			if($this->Booking->delete())
			{
				$this->Session->setFlash("Vous êtes bien désinscrit.");
				$this->redirect(array('action'=>'index'));	
			}
        }
		$this->redirect(array('action'=>'index'));			
	}
}

?>