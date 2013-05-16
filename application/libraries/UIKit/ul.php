<?php

	abstract class ul implements UIK_HTMLElement {

		static protected $type = 'ul';

		static public function create($attributes = array()){
			return self::$type;
		}
	}

?>