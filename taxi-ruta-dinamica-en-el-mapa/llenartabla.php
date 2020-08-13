<?php 
    session_start();
    $email=$_SESSION['email'];
    $connection = mysql_connect('localhost','root','usbw','registration');
	mysql_select_db("taxi",$connection);

    $sql = "SELECT * FROM reservation WHERE email='$email'";
    
    $result=mysql_query($sql);
    $cont=0;
    //print_r($result);
    //if($row =mysql_fetch_row($result)) 
    	
    while ($row =mysql_fetch_row($result)) {
    	//print_r($row);
    	$id = $row['0'];
		$address1 = $row['1'];
		$address2 = $row['2'];
		$data = $row['3'];
		$time = $row['4'];
		$number = $row['5'];
		$distance = $row['6'];
		$price = $row['7'];	
		$my_array = json_encode(array('id'=>$id,'address1'=>$address1,'address2'=>$address2,'data'=>$data,'time'=>$time,'number'=>$number,'distance'=>$distance,'price'=>$price));
		$send_array[$cont++]=$my_array;	
	}
	//$send_array[$cont]=$cont;
	
    //var_dump($send_array);
    //$my_array = array('id'=>$id,'address1'=>$address1,'address2'=>$address2,'data'=>$data,'time'=>$time,'number'=>$number,'distance'=>$distance,'price'=>$price);
    print json_encode($send_array);
		
?>

