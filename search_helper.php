<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db="user";
$errors = array();  
	// Create connection to database
		$con = new mysqli("localhost", "root", "root", "user");
		/* check connection */
			if ($mysqli->connect_error) {
				printf("Connect failed: %s\n", $mysqli->connect_error);
				exit();
			}
			//echo $_POST['data'];
			 $sql="SELECT * FROM `users` WHERE `email` LIKE '%".$_POST["data"]."%'";
			
			$res= mysqli_query($con,$sql);

			if($res)
	    		{
		      		$row_array=array();
		      		while($row = mysqli_fetch_assoc($res)) 
		      		{

		           		array_push($row_array,$row);
		        	}
		      		$result['error'] = 0;
		      		$result['value']  = $row_array;
	    		}

	    		else 
	    		{
	      			$result['error'] = 1;

			    }
	 				echo json_encode($result);

?>
		