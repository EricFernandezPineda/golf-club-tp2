
<?php
App::uses('AppModel', 'Model');
/**
 * Professional Model
 *
 * @property GolfClub $GolfClub
 */
class Professional extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'golf_club_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'GolfClub' => array(
			'className' => 'GolfClub',
			'foreignKey' => 'golf_club_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	public function getProfessionalNames ($term = null) {
      if(!empty($term)) {
        $Professionals = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $Professionals;
      }
      return false;
    }
}



