<h1>Add Update</h1>
<?
echo $this->Form->create('Update');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->input('routine_id');
echo $this->Form->end('Save Update');
?>