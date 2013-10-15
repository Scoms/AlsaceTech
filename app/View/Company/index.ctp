<h2>Entreprises présentes sur le forum</h2>

<?php echo var_dump($selected)?>
<?php echo $this->Form->create('User') ?>
  <fieldset>
    <legend>Choisir</legend>
  <?php
	echo $this->Form->input('User.Company',array('label'=>false, 'multiple'=>'checkbox','selected' => $selected));
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Sauvegarder')); ?>


