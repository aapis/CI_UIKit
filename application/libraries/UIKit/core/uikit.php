<?php
	//import interfaces
	include('interfaces/HTMLElement.php');
	include('interfaces/Object.php');

	//import standard types
	include('node.php');
	include('region.php');
	
	//import element classes
	include(APPPATH.'/libraries/UIKit/form.php');
	include(APPPATH.'/libraries/UIKit/ul.php');	

	//returns information about the elements created in the library
	class UIKit {
		protected $version_min = '2.1.3';
		protected $node = null;

		private $_version = '1.0.0';

		public function __construct(){
			//Only tested on 2.1.3, so that's all we'll allow for now
			if(version_compare(CI_VERSION, $this->version_min) === 1){
				return show_error(sprintf('Library <strong>UIKit</strong> requires at least CodeIgniter %s', $this->version_min));
			}

			$this->node = Node::getInstance();

			$this->region = Region::getInstance();
		}

		public function createElement($type = null, $attributes = array()){
			if(false === is_null($type)){
				return $this->node->create($type, $attributes);
			}
		}

		public function createRegion($attributes = array()){
			if(sizeof($attributes) > 0){
				return $this->region->create($attributes);
			}
		}

		public function getInfo(){
			$output = new stdClass;

			$output->version = $this->_version;
			$output->registered = $this->_getRegistered();

			return $output;
		}

		private function _getRegistered(){
			$retVal = new stdClass;
			$retVal->nodes = $this->node->getRegistered();
			$retVal->regions = $this->region->getRegistered();

			return $retVal;
		}
	}

?>