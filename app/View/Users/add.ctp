<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset id="signIn">
        <legend>Créer un compte</legend>
        <p><?php 
            echo $this->Form->input('firstname',array('label'=>'Prénom <strong style="color:red">*</strong>'));?></p>
          <p> <?php echo $this->Form->input('lastname',array('label'=>'Nom <strong style="color:red">*</strong>'));?></p>
           <p><?php echo $this->Form->input('username',array('label'=>'Courriel <strong style="color:red">*</strong>'));?></p>
          <p> <?php echo $this->Form->input('school',array('label'=>'Ecole <strong style="color:red">*</strong>'));?></p>
          <p> <?php echo $this->Form->input('password',array('label'=>'Mot de passe <strong style="color:red">*</strong>'));?></p>
	<?php echo $this->Form->end(__('Créer'));?>
    </fieldset>
</div>