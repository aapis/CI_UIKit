<?php
	
	abstract class form implements UIK_HTMLElement {

		static protected $type = 'form';

		static public function create($attributes = array()){
			self::_register();
			
			return self::$type;
		}

		static public function processAttributes($attributes = null){
			if(false === is_null($attributes)){
				return $attributes;
			}
		}

		static public function getType(){
			return self::$type;
		}

		static private function _register(){

		}

	}

?>