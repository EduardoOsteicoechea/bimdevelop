<?php
	function print_json_content($data){
		include "article_style_string.php";
		$article_string = '';
		$article_string .= '<head><style>';
		$article_string .= $article_style_string;
		$article_string .= '</style>';
		$article_string .= '<title>'.ucfirst($data["title"]).'</title>';
		$article_string .= '</head>';
		$article_string .= '<body>';
		$article_string .= '<article>';

		for ($i=0; $i < count($data["content"]); $i++) { 
			$content_element = $data["content"][$i];
			$content_element_tag = $content_element[0];
			$content_element_innerHTML = $content_element[1];
			if ($content_element_tag == "img") {
				$article_string .= "<".$content_element_tag." src='".$content_element_innerHTML."' alt='". $content_element_innerHTML . " image' >";
			} else {
				$article_string .= "<" . $content_element_tag . ">";
				$article_string .= ucfirst($content_element_innerHTML);
				$article_string .= "</" . $content_element_tag . ">";
			};
		};

		
		$article_string .= '</article>';
		$article_string .= '</body>';
		$article_string .= '</html>';
		echo $article_string;
	}
?>