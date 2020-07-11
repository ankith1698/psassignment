< ?php

	$db         = mysqli_connect('localhost', 'root', '', 'search');
	
	$company    = $_GET['company'];
	
	$sql        = "SELECT name FROM table1 WHERE name like '$company%' ORDER BY name";
	
	$res        = $db->query($sql);
	
	if(!$res)
		echo mysqli_error($db);
	else
		while( $row = $res->fetch_object() )
			echo "<option value='".$row->name."'>";
		
?>
</option>