<?php

	//creates the elements
	class Node implements UIK_Object {

		protected $nodes = array();

		static protected $instance = null;

		public function create($type = null, $attributes = array()){
			if(class_exists($type)){
				//register the type
				$this->nodes[] = $type;

				return $type::create($attributes);
			}else {
				show_error(sprintf('UIKIT ERROR: class <strong>%s</strong> not found.', $type));
			}
		}

		//remove item from $nodes array by index
		public function destroy($node_id = 0){

		}

		//clean the $nodes array
		public function flush(){

		}

		public function getRegistered(){
			return $this->nodes;
		}

		public function edit($node_id = 0){

		}

		public function getInstance(){
			if(is_null(self::$instance)){
				self::$instance = new Node;
			}

			return self::$instance;
		}
	}

?>