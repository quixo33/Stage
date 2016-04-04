<?php
	$image = $_POST['textfield'];

	$imageData = base64_encode(file_get_contents($image));
	$src = 'data: '.mime_content_type($image).';base64,'.$imageData;
	echo '<img src="', $src, '">';
?>