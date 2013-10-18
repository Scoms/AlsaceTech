<?php if(AuthComponent::user('username')): ?>
	<h2>Entreprises présentes sur le forum</h2>

<?php echo $this->Form->create('User') ?>
  <fieldset>
    <legend>Choisir</legend>
  <?php
	echo $this->Form->input('User.Company',array('label'=>false, 'multiple'=>'checkbox','selected' => $selected));
  ?>
  <p style="float:right;"><?php echo $this->Form->end(__('Sauvegarder')); ?></p>
  </fieldset>
<?php endif ?>

