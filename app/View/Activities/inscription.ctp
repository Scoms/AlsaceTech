<h2>Inscription</h2>

<?php echo $this->Form->create('User') ?>
  <fieldset>
    <legend>Choisir</legend>
  <?php
	echo $this->Form->input('User.Activity',array('label'=>false, 'multiple'=>'checkbox','selected'=>$selected));
  ?>
  <p>Un choix possible entre les deux derniers</p>
  </fieldset>
<?php echo $this->Form->end(__('Sauvegarder')); ?>
