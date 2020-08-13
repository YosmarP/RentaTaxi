<?php 
    session_start();

    $email = "";
    $phone = "";
    $pass = "";    
	//conectar a la base de datos
	$connection = mysql_connect('localhost','root','usbw','registration');
	mysql_select_db("taxi",$connection);
	
	//si el boton check in es oprimido
	if(isset($_POST['contactFrmSubmit'])) //checkin es el nombre del boton del formulario
	{		
		$email = mysql_real_escape_string($_POST['email']);
		$phone = mysql_real_escape_string($_POST['phone']);
		$pass = mysql_real_escape_string($_POST['password']);		
		$password = md5($pass); //encriptar password antes de almacenar en la base de datos
		$sql = "INSERT INTO registrar (email,phone,password) VALUES ('$email','$phone','$password')";		
		if(mysql_query($sql))
		{
        	$status = 'ok';
        	$_SESSION['email']=$email;
    	}else
    	{
        	$status = 'err';
    	}
    	echo $status;die;
	}
		
?>

