<?
	// Create the array of options
    foreach($routines as $routine):
        $routineOptions[$routine['Routine']['id']] = $routine['Routine']['title'];
    endforeach; 
?>


<div class="add form">
	<h1>Add Update</h1>

	<?= $this->Form->create('Update');?>
	<?= $this->Form->input('date', array('label' => false)); ?>
	<?= $this->Form->input('body', array('rows' => '3', 'label' => false));?>
	<?= $this->Form->input('routine_id', array('options' => $routineOptions)); ?>
	<?= $this->Form->end('Save', array('class' => 'button')); ?>

</div>