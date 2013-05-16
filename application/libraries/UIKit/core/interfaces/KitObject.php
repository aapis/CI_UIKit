<?php

	interface KitObject {
		public function create($type = null, $attributes = array());

		//remove item from $nodes array by index
		public function destroy($node_id = 0);

		//clean the $nodes array
		public function flush();

		public function edit($node_id = 0);

		public function getInstance();
	}

?>