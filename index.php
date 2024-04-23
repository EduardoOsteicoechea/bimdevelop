<?php
$folder_array = [];
$markup = '';
$markup .= '<main>';
$markup .= '<h1>Bim development articles</h1>';
$markup .= '<ol>';
if ($directories = opendir("articles/")) {
	while (($directory = readdir($directories)) != false) {
		if (
			$directory != "." && 
			$directory != ".." && 
			$directory != "." &&
			$directory != "server_functions"
		) {
			array_push($folder_array, $directory);
		}
	};
	closedir($directories);
};

for ($i=0; $i < count($folder_array); $i++) { 
	$article = $folder_array[$i];
	$markup .= '<a href="articles/'.$article.'"><li>'.ucfirst(str_replace("_", " ", $article)).'</li></a>';
};

$markup .= '</ol>';
$markup .= '</main>';
echo $markup;
?>