<?php if(AuthComponent::user('username')): ?>
<h2>Conférences et présentations</h2>
<p>Vous avez la possibilité d'accéder aux conférences thématiques de votre choix » pour la catégorie conférences.</p>
<table style="width:750px;">
	<caption></caption>
	<tr style="height:20px;">
		<th style="width:50px; padding-right:20px;">Début</th>
		<th style="width:50px; padding-right:20px;">Fin</th>
		<th style="width:300px; padding-right:20px;">Nom</th>
		<th style="width:100px; padding-right:20px; padding-left:20px;">Description</th>
		<th><th>
	</tr>
<?php foreach ($confs as $conf):?>
	<?php if($conf[0]['Conf']['type'] == "G"){ ?>
	<tr style="height:20px">
		<td><?php echo substr($conf[0]['Conf']['start'], 0, -3) ?></td>
		<td><?php echo substr($conf[0]['Conf']['end'], 0, -3) ?></td>
		<td><?php echo utf8_encode($conf[0]['Conf']['label']) ?></td>
		<td><?php if( $conf[0]['Conf']['description'] != "" ) { ?><acronym style=" margin-left:20px; border-bottom:1px dotted; padding-bottom:2px; cursor:pointer;" title="<?php echo utf8_encode($conf[0]['Conf']['description']) ?>">Plus d'info</acronym><?php } ?></td>
		<td>
			<?php 
			if($conf[2])
			{
				echo $this->Html->link("Se désinscrire",array('controller'=>'Conf','action'=>'unbook',$conf[0]['Conf']['id']));
			}
			else
			{
				echo $this->Html->link("S'incrire",array('controller'=>'Conf','action'=>'book',$conf[0]['Conf']['id']));
			}
			?>
		</td>
	</tr>
	<?php } // end if is type G ?>
<?php endforeach ?>
</table>
<p>Vous pouvez participer à des présentations métier <strong>sous réserve d'inscription préalable auprès de votre école.</strong></p>
<table style="width:750px;">
	<caption></caption>
	<tr style="height:20px;">
		<th style="width:50px; padding-right:20px;">Début</th>
		<th style="width:50px; padding-right:20px;">Fin</th>
		<th style="width:300px; padding-right:20px;">Nom</th>
		<th style="width:100px; padding-right:20px; padding-left:20px;">Description</th>
		<th><th>
	</tr>
<?php foreach ($confs as $conf):?>
	<?php if($conf[0]['Conf']['type'] == "M"){ ?>
	<tr style="height:20px">
		<td><?php echo substr($conf[0]['Conf']['start'], 0, -3) ?></td>
		<td><?php echo substr($conf[0]['Conf']['end'], 0, -3) ?></td>
		<td><?php echo utf8_encode($conf[0]['Conf']['label']) ?></td>
		<td><?php if( $conf[0]['Conf']['description'] != "" ) { ?><acronym style=" margin-left:20px; border-bottom:1px dotted; padding-bottom:2px; cursor:pointer;" title="<?php echo utf8_encode($conf[0]['Conf']['description']) ?>">Plus d'info</acronym><?php } ?></td>
		<td>
			<?php 
			if($conf[2])
			{
				echo $this->Html->link("Se désinscrire",array('controller'=>'Conf','action'=>'unbook',$conf[0]['Conf']['id']));
			}
			else
			{
				echo $this->Html->link("S'incrire",array('controller'=>'Conf','action'=>'book',$conf[0]['Conf']['id']));
			}
			?>
		</td>
	</tr>
	<?php } // end if is type M ?>
<?php endforeach ?>
</table>
<?php endif ?>