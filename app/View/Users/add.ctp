<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset id="signIn">
        <legend>Créer un compte</legend>
        <?php 
            echo $this->Form->input('firstname',array('label'=>'Prénom'));
            echo $this->Form->input('lastname',array('label'=>'Nom'));
            echo $this->Form->input('username',array('label'=>'Courriel'));
            echo $this->Form->input('school',array('label'=>'Ecole'));
            echo $this->Form->input('password',array('label'=>'Mot de passe'));
        ?>
	<?php echo $this->Form->end(__('Créer'));?>
    </fieldset>
</div>