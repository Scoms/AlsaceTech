<!DOCTYPE html>
<html>
	<head>
	<?php
		echo $this->Html->Css('KILLME');
	?>
	</head>

	<body>
		<div class="navbar">
			<ul>
				<li><?php echo $this->Html->link('Connexion',array('controller'=>'Users','action'=>'login')) ?></li>
				<li><?php echo $this->Html->link("S'enregistrer",array('controller'=>'Users','action'=>'add')) ?></li>

				<?php if(AuthComponent::user('username')): ?>
					<li><?php echo $this->Html->link("Village des entreprises",array('controller'=>'Company','action'=>'index'))?></li>
					<li><?php echo $this->Html->link("S'inscrire à une conférence",array('controller'=>'Conf','action'=>'index'))?></li>
					<!--
					<li>Village de l'emploie</li>
					<li>Parcours de l'innovation</li>
					<li><?php echo AuthComponent::user('username') ?></li>
					-->
				<?php endif ?>
			</ul>
		</div>
		<h1>Alsace Tech</h1>

		<!-- Content -->
		<div class="content">
			<?php
				echo $this->Session->flash();
				echo $this->fetch('content');
			?>
		</div>
	</body>
</html>