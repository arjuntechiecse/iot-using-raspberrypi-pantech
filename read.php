<html>
 <head>
  <meta name="viewport" content="width=device-width" />
   <title>LED Control</title>
 </head>
	<body>
	   WEB PAGE ON PHP BASED GPIO Control:


	<?php
$myfile=fopen("/home/pi/sample.txt","r");
echo fread($myfile,filesize("/home/pi/sample.txt"));
fclose($myfile);

	?>
	</body>
</html>