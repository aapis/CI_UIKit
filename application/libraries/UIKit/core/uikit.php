<?php
	include('node.php');
	include(APPPATH.'/libraries/UIKit/form.php');
	include(APPPATH.'/libraries/UIKit/ul.php');

	//returns information about the elements created in the library
	class UIKit {
		protected $version_min = '2.1.3';
		public $node = null;

		public function __construct(){
			//Only tested on 2.1.3, so that's all we'll allow for now
			if(version_compare(CI_VERSION, $this->version_min) === 1){
				return show_error(sprintf('Library <strong>UIKit</strong> requires at least CodeIgniter %s', $this->version_min));
			}

			$this->node = Node::getInstance();
		}
	}

?>