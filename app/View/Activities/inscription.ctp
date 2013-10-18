<?php if(AuthComponent::user('username')): ?>
	<h2>Inscription</h2>

<?php echo $this->Form->create('User') ?>
  <fieldset id="fieldactivite">
    <legend>Choisir</legend>
  <?php
	echo $this->Form->input('User.Activity',array('label'=>false, 'multiple'=>'checkbox','selected'=>$selected));
  ?> 
 <?php echo $this->Form->end(__('Sauvegarder')); ?>
  </fieldset>

<?php endif ?>
