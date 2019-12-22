<?php 
session_start();
	/*if (isset($_POST['UserID']) && isset($_POST['password'])) 
	{
		$userid=htmlentities($_POST['UserID']);
		$password=htmlentities($_POST['password']);
		//open database to check the user authentication
		$con=mysql_connect("localhost","root","") or die ("could not connect");
		$db=mysql_select_db("Cosmos",$con)or die ("DB not found");
		$sql="select * from users where M_ID='$userid' and M_Password='$password'";
		$query= mysql_query($sql);
        $numrows=mysql_num_rows($query);
		if($numrows >0){
	 while($result=mysql_fetch_assoc($query)){
	 $dbid=$result['M_ID'];
     $dbpassword=$result['password'];
	}
	if($userid==$dbid &&$password==$dbpassword){
		if(!isset($_SESSION['userid'])){
		$_SESSION['userid']=$userid;
		}
		header('location: ManagingProduct.php?userid='.$userid);
	}else {
		header('location: Home.php?problem=ErrorLogin');
			exit;
		}
		}else{
	        header('location: Home.php?problem=ErrorLogin');
			exit;
             }
	}else
    {
	      header('location: Home.php?problem=ErrorLogin');
			exit;
    }*/
			if (isset($_POST['UserID']) && isset($_POST['password'])) 
			{
		
				$Query="Select M_ID  from Managers where M_ID='" . $_POST['UserID']."' and M_Password='".$_POST['password'] ."'";
				if ( !($database=mysql_connect("localhost","root","")))
				{
					header('location: Home.php?problem=CannotConnectToServer');
					exit ("couldn't connect to the server");
				}	
				if (!mysql_select_db ("Cosmos",$database))	
				{
					header('location: Home.php?problem=CannotConnectToDB');
					exit ("couldn't open the database<");
				}
				if (! ($result= mysql_query ( $Query, $database)))
				{
					print ("<p> Query couldn't be executed </p>");
					exit (mysql_error());
				}
				mysql_close($database);	
		
		if (mysql_num_rows($result)>0)
		{
		$row=mysql_fetch_row($result);
		$ID=$row[0];
	   if(!isset($_SESSION['ID'])){
		$_SESSION['ID']=$ID;
		}
		header('location: ManagingProduct.php?ID='.$ID);
			exit;
		}
		else
		{
			header('location: Home.php?problem=ErrorLogin');
			exit;
		}
		
	}

?>		

