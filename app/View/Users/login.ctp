<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
<div class="users form">
	<fieldset id="logIn">  
		<legend>Se connecter</legend>
        	<?php echo $this->Form->input('username',array('label'=>'Email'));
        	echo $this->Form->input('password',array('label'=>'Mot de passe'));?>
			<?php echo $this->Form->end(__('Connexion'));?>
	</fieldset>
</div>