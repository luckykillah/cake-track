<h1>Routines</h1>
<?= $this->Html->link('Add Routine', array('action' => 'add')); ?>

<ul>
	<? foreach ($routines as $routine): ?>
	<li>
		<h2><?= $this->Html->link($routine['Routine']['title'],
array('controller' => 'routines', 'action' => 'view', $routine['Routine']['id'].': '.$routine['Routine']['title'])); ?></h2>
		<div class="content"><?= $routine['Routine']['id']?></div>
		<div class="meta">
			Created: <?= $routine['Routine']['created']?><br />
			Frequency: <?= $routine['Routine']['frequency']?><br />
			<?php echo $this->Html->link('Edit Routine', array('action' => 'edit')); ?>
		</div>
	</li>
	<? endforeach; ?>
	<? unset($post); ?>
</ul>