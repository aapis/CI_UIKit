<?php

	abstract class form {

		static protected $type = 'form';

		static public function create($attributes = array()){
			return self::$type;
		}
	}

?>