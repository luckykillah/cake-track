<div class="add form">
	<h1>Add Routine</h1>

	<?= $this->Form->create('Routine');?>
	<?= $this->Form->input('title', array('label' => false, 'placeholder' => 'What\'s is it?')); ?>
	<?= $this->Form->input('body', array('rows' => '3', 'label' => false, 'placeholder' => 'What does it entail?'));?>
	Repeat every <?= $this->Form->input('frequency', array('label' => false, 'div' => false)); ?> days
	<?= $this->Form->end('Save', array('class' => 'button')); ?>

</div>