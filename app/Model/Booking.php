<?php

class Booking extends AppModel
{
	public $belongsTo = array('Conf','User');
}

?>