<table>
	<caption>Conférences et présentations</caption>
	<tr>
		<th>Début</th>
		<th>Fin</th>
		<th>Nom</th>
		<th>Description</th>
		<th>Places</th>
		<th><th>
	</tr>
<?php foreach ($confs as $conf):?>
	<tr>
		<td><?php echo $conf[0]['Conf']['start'] ?></td>
		<td><?php echo $conf[0]['Conf']['end'] ?></td>
		<td><?php echo utf8_encode($conf[0]['Conf']['label']) ?></td>
		<td><?php echo utf8_encode($conf[0]['Conf']['description']) ?></td>
		<td>
			<?php 
				echo $conf[1];
				$places = $conf[0]['Conf']['type'] == "G" ? 100 : 45;
				echo " /".$places;
			?>
		</td>
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
<?php endforeach ?>
</table>