<?php 
	
	//si el boton check in es oprimido
	if(isset($_POST['logout']))
	{		
	    session_destroy();
	    unset($_SESSION['email']);
	    print_r('emlll');
	}
		
?>

