<?php

	abstract class ul implements UIK_HTMLElement {

		static protected $type = 'ul';

		static public function create($data = null, $attributes = array()){
			return self::$type;
		}

		static public function processAttributes($attributes = null){
			if(false === is_null($attributes)){
				//return $attributes;
			}

			return $attributes;
		}

		static public function getType(){
			return self::$type;
		}
	}

?>