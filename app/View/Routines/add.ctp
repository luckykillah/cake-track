<h1>Add Routine</h1>
<?
echo $this->Form->create('Routine');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('frequency');
echo $this->Form->end('Save Routine');
?>