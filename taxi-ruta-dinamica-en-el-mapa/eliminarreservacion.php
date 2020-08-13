<?php 
    $id = '';
    $connection = mysql_connect('localhost','root','usbw','registration');
	mysql_select_db("taxi",$connection);
    if(isset($_POST['eliminarreservacion']))
    {
    	$id = mysql_real_escape_string($_POST['id']);
    	$sql = "DELETE FROM reservation WHERE idreservation='$id'";	
    	
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

