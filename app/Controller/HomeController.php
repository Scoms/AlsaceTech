<?php

class HomeController extends AppController{

	public function isAuthorized()
	{
		return true;
	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
        return true;
    }

	public function index()
	{

	}

}
?>