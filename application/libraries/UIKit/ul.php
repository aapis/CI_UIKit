<?php

	abstract class ul {

		static protected $type = 'ul';

		static public function create($attributes = array()){
			return self::$type;
		}
	}

?>