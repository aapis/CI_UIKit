<?php

	interface UIK_HTMLElement {
		static public function create($data, $attributes);
		static public function processAttributes($attributes);
		static public function getType();
	}

?>