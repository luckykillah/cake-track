<h1>Edit Update</h1>
<?
    echo $this->Form->create('Update', array('action' => 'edit'));
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('routine_id');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Update');
 ?>