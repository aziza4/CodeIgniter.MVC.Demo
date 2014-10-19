<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $title?></title>
</head>
<body>

<div id="container">
	<h1>Welcome to DB!</h1>
	
	<?php
	
	foreach($results as $row)
	{
		echo $row->id . ' ' . $row->name . "<br />";
	}
	
	?>

</div>

</body>
</html>