<h1>Updates</h1>
<?= $this->Html->link('Add Update', array('action' => 'add')); ?>

<ul>
	<? foreach ($updates as $update): ?>
	<li>
		<h2><?= $this->Html->link($update['Update']['created'],
array('controller' => 'updates', 'action' => 'view', $update['Update']['id'])); ?></h2>
		<div class="content"><?= $update['Update']['id']?></div>
		<div class="meta">
			Created: <?= $update['Update']['created']?><br />
			Frequency: <?= $update['Update']['routine_id']?><br />
			<?php echo $this->Html->link('Edit Update', array('action' => 'edit')); ?>
		</div>
	</li>
	<? endforeach; ?>
	<? unset($post); ?>
</ul>