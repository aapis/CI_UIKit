<?php

	interface UIK_Object {
		public function create($type = null, $attributes = array());

		//remove item from $nodes array by index
		public function destroy($node_id = 0);

		//clean the $nodes array
		public function flush();

		public function getRegistered();

		public function edit($node_id = 0);

		public function getInstance();
	}

?>