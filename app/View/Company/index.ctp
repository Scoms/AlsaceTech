<?php if(AuthComponent::user('username')): ?>
<h2>Choissisez la catégorie qui vous intéresse</h2>

<ul>
	<li><?php echo $this->Html->link("Agro, Logistique, Distribution",array('controller'=>'Company','action'=>'category','AGRO')); ?></li>
	<li><?php echo $this->Html->link("Banque, Finance, Conseil, Recrutement",array('controller'=>'Company','action'=>'category','BANQUE')); ?></li>
	<li><?php echo $this->Html->link("Construction, Architecture, Aménagement",array('controller'=>'Company','action'=>'category','CONSTRUCTI')); ?></li>
	<li><?php echo $this->Html->link("Eau, Energie, Environnement, Geophysique, Chimie",array('controller'=>'Company','action'=>'category','ENERGIE')); ?></li>
	<li><?php echo $this->Html->link("Informatique, Télécoms, Electrique",array('controller'=>'Company','action'=>'category','INFORMATIQ')); ?></li>
	<li><?php echo $this->Html->link("Service public, Organismes institutionnels",array('controller'=>'Company','action'=>'category','PUBLIC')); ?></li>
	<li><?php echo $this->Html->link("Transport, Construction, Mécanique",array('controller'=>'Company','action'=>'category','TRANSPORT')); ?></li>
	<li><?php echo $this->Html->link("Autre",array('controller'=>'Company','action'=>'category')); ?></li>
</ul>
<?php endif ?>