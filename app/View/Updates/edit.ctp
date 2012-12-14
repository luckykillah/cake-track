<h1>Edit Update</h1>

<?
	// Create the array of options
    foreach($routines as $routine):
        public $routineOptions[$routine['Routine']['id']] = $routine['Routine']['title'];
    endforeach; 
?>

<?
echo $this->Form->create('Update');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('date');
echo $this->Form->input('routine_id', array('options' => $routineOptions));
echo $this->Form->end('Save Update');
?>