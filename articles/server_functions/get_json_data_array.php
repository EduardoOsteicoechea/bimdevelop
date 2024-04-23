<?php
	function get_json_data_array(){
	$json_string = file_get_contents("content.json");
	$data = json_decode($json_string, true);
	return $data;
	}
?>