<?php

	abstract class ul implements UIKit_HTMLElement {

		static protected $type = 'ul';

		static public function create($attributes = array()){
			return self::$type;
		}
	}

?>