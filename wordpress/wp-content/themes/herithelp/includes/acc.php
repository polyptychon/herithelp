<?php
function fix_acc( $toClean ) {
	return strtr( $toClean,
		array(
			'Ά' => 'Α',
			'ά' => 'α',
			'Έ' => 'Ε',
			'έ' => 'ε',
			'Ή' => 'Η',
			'ή' => 'η',
			'Ί' => 'Ι',
			'ί' => 'ι',
			'Ϊ' => 'Ι',
			'ϊ' => 'ι',
			'ΐ' => 'ι',
			'Ό' => 'Ο',
			'ό' => 'ο',
			'Ύ' => 'Υ',
			'Ϋ' => 'Υ',
			'ύ' => 'υ',
			'ϋ' => 'υ',
			'ΰ' => 'υ',
			'Ώ' => 'Ω',
			'ώ' => 'ω'
		) );
}
