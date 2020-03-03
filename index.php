<!DOCTYPE html>
<html lang="sk">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
</head>
<body>
<div>
	<h1>Drom/index.php</h1>
	<form action="" method="post">
		<div class="btn-group" role="group" aria-label="...">
		  <button type="button" class="btn btn-default" id="test" data-x="beeeeeeeeeeeeeeeee">Left</button>
		  <button type="button" class="btn btn-default">Middle</button>
		  <button type="button" class="btn btn-default">Right</button>
		</div>
	</form>
	
	<?php
		$s = [1,2,3,4,5];
		$s = isset($s->aaa) ? 'fasle' : 'true';
		
		var_dump($s);
	?>
</div>	

<script>
$(function() {
	$('button').click(function(e){
		f();
	});

	
});


function f()
{
	var p = prompt('aaaaaaaaaaaaaa');
	
	if( p === null ) 
	{
		console.log('nulllllllllllllllllllll');
	}
	else
	{
		console.log('strrrrrrrrrrrrrrrrrrrring');
	}
}
</script>
</body>
</html>