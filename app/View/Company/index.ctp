<h2>Entreprises présentes sur le forum</h2>

<?php echo $this->Form->create('User') ?>
  <fieldset>
    <legend>Choisir</legend>
  <?php
	echo $this->Form->input('User.Company',array('label'=>'Liste des entreprises','type'=>'select', 'multiple'=>'checkbox'));
  ?>
  </fieldset>
<?php echo $this->Form->end(__('Sauvegarder')); ?>


