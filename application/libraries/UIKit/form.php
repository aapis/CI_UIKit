<?php
	
	class HTMLObjectForm extends HTMLObject {

		protected $type = 'form';
		protected $data = null;
		protected $allowed_attributes = array();
		protected $self_closing = false;

		static protected $instance;

		private function __construct(){
			$this->allowed_attributes = array(
					'class',
					'style',
					'data-', //may need regex?
					'height',
					'width',
					'id',
					'action',
					'method',
					'name',
				);
		}

		static public function getInstance(){
			if(is_null(self::$instance)){
				self::$instance = new HTMLObjectForm();
			}

			return self::$instance;
		}

		public function create($data = null, $attributes = array()){
			$attributes = $this->processAttributes($attributes);

			if(false === is_null($data)){
				return parent::create($this->type, $data, $attributes);	
			}

			return null;
		}

		public function processAttributes($attributes = null){
			$processed = array();

			if(false === is_null($attributes)){
				foreach($attributes as $key => $value){
					if(in_array($key, $this->allowed_attributes)){
						$processed[$key] = $value;
					}
				}
			}

			return $processed;
		}

		public function getType(){
			return $this->type;
		}

		//func create {object}

		//func tostring

	}

?>