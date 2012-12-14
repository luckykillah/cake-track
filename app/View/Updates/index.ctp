<section class="posts">
    <h1>Updates on Routines <span class="add"><?= $this->Html->link('+', array('action' => 'add')); ?></a></h1>

<ul>
	<? foreach ($updates as $update): ?>
	<? $date = date('j.n', time($update['Update']['created'])); ?>
	<li>
		<?= $this->Html->link($date.': '.$update['Routine']['title'] , array('controller' => 'updates', 'action' => 'view', $update['Update']['id'])); ?> (<?= $this->Html->link('edit', array('action' => 'edit')); ?>)
	</li>
	<? endforeach; ?>
	<? unset($post); ?>
</ul>

<pre>
	<? print_r($updates) ?>
</pre>