<?php

App::uses('AuthComponent', 'Controller/Component');

class User extends AppModel{
	public $firstname;
	public $lastname;
	public $school;
	public $username;
	public $password;

    public $hasAndBelongsToMany = array(
      'Company' => array(
          'className' => 'Company',
          'joinTable' => 'users_companies',
          'foreignKey' => 'user_id',
          'associationForeignKey' => 'company_id',
          'unique' => 'keepExisting',
    )

    );

	public $name = 'User';
    public $validate = array(
        'username' => array(
            'required'=>array(    'rule'    => array('email', true),
            'message' => 'Merci de soumettre une adresse email valide.'
                )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Mot de passe nécessaire.'
            )
        )

    );

    public function beforeSave($options = array()) {
        foreach (array_keys($this->hasAndBelongsToMany) as $model)
        {
          if(isset($this->data[$this->name][$model])){
            $this->data[$model][$model] = $this->data[$this->name][$model];
            unset($this->data[$this->name][$model]);
          }
        }
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}
}
?>