<?php 
	session_start();

    $emai = "";        
    $pass = "";    
	//conectar a la base de datos
	$connection = mysql_connect('localhost','root','usbw','registration');
	mysql_select_db("taxi",$connection);
	
	//si el boton check in es oprimido
	if(isset($_POST['registrarse']))
	{			    
		$emai = mysql_real_escape_string($_POST['emai']);		
		$pass = mysql_real_escape_string($_POST['pass']);		
		$password = md5($pass); //encriptar password antes de almacenar en la base de datos
		$sql = "SELECT * FROM registrar WHERE email='$emai' AND password='$password'";	
		$result=mysql_query($sql);	
		
		if(mysql_num_rows($result)==1)
		{
        	$status = 'ok';
        	$_SESSION['email']=$emai;
    	}else
    	{
        	$status = 'err';
    	}    	
    	echo $status;die;
    	//var_dump("expression");
    	
	}
		
?>

