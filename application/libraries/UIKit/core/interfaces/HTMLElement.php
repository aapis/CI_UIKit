<?php

	interface UIK_HTMLElement {
		static public function create($attributes);
		static public function processAttributes($attributes);
		static public function getType();
	}

?>