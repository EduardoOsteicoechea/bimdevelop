<?php
	include "../server_functions/get_json_data_array.php";
	include "../server_functions/print_json_content.php";
	$data = get_json_data_array();
	print_json_content($data);
?>