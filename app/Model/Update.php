<?
class Update extends AppModel{
	
	public $validate = array(
        'routine_id' => array('rule' => 'notEmpty'),
        'date' => array('rule' => 'notEmpty'),
    );

	public $belongsTo = array(
        'Routine' => array(
            'className'     => 'Routine',
            'foreignKey'    => 'routine_id'
        )
    );
}
?>