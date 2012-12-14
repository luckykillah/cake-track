<h1>Edit Routine</h1>
<?
    echo $this->Form->create('Routine', array('action' => 'edit'));
    echo $this->Form->input('title');
    echo $this->Form->input('body', array('rows' => '3'));
    echo $this->Form->input('frequency');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Routine');
 ?>