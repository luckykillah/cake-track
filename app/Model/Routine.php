<?
class Routine extends AppModel{
	
	public $validate = array(
		'title' => array('rule' => 'notEmpty'),
		'body' => array('rule' => 'notEmpty'),
		'frequency' => array('rule' => 'notEmpty')
    );

	public $hasMany = array(
        'Update' => array(
            'className'     => 'Update',
            'foreignKey'    => 'routine_id',
            'order'         => 'Update.created DESC',
            'limit'         => '5',
            'dependent'     => true
        )
    );

	public $hasAndBelongsToMany = array(
    	'Category' => array('className' => 'Category')
	);
}
?>