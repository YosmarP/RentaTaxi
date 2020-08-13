<?php 
    session_start();	
    $address1 = "";        
    $address2 = "";    
	//conectar a la base de datos
	$connection = mysql_connect('localhost','root','usbw','registration');
	mysql_select_db("taxi",$connection);
	
	//si el boton check in es oprimido
	if(isset($_POST['contactreservation']))
	{			
		$address1 = mysql_real_escape_string($_POST['address1']);		
		$address2 = mysql_real_escape_string($_POST['address2']);
		$date = mysql_real_escape_string($_POST['date']);		
		$time = mysql_real_escape_string($_POST['time']);	
		$number = mysql_real_escape_string($_POST['number']);
		$distance=25;
		$price=23;
		$email=$_SESSION['email'];
		$sql = "INSERT INTO reservation (address1, address2, date, time, NUMBER, dinstance, price, email) VALUES ('$address1','$address2','$date','$time','$number','$distance','$price','$email')";
		//var_dump($sql);	
		
		if(mysql_query($sql))
		{
        	$status = 'ok';        	
    	}else
    	{
        	$status = 'err';
    	}
    	echo $status;die;
    	
	}
		
?>

