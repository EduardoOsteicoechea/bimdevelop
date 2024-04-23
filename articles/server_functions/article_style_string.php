<?php
	$article_style_string = '
	:root{
		font-size:15px;
		font-family: arial;
		line-height: 24px;
	}
	*{
		margin:0;
		padding:0;
		position:relative;
	}
	body{
		padding: 2rem 0;
		max-width: 600px;
		margin: auto;
	}
	article{
		display:flex;
		flex-direction:column;
		gap: 1rem;
	}
	article > img {
		width: 80%;
		margin:auto;
	}
	h1{
		font-size:2.5rem;
		line-height: 3rem;
	}
	h2,h3{
		font-size:1.75rem;
		line-height: 2rem;
	}
	';
?>