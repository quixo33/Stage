<html>
 <head>
  <title>Convert base64 to image</title>
 </head>
 <body>
 <?php
 // 	// A few settings
	// $image = 'logo.png';

	// // Read image path, convert to base64 encoding
	// $imageData = base64_encode(file_get_contents($image));
	// // echo $imageData;
	// // echo '<br/>';

	// // Format the image SRC:  data:{mime};base64,{data};
	// $src = 'data: '.mime_content_type($image).';base64,'.$imageData;

	// // Echo out a sample image
	// echo '<img src="', $src, '">';
 ?>
 	<form name="sendImage" method="post" action="ImageToBase64.php">
 	<input type="file" name="textfield"></input>
 	<input type="submit" value="Send"></input>
 	</form>
 </body>
</html>