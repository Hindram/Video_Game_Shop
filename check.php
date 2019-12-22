<?php

include_once('conn.php');

//delete all items in the cart
if(isset($_GET["emptycart"]))
{
	$_SESSION["products"] = array();
	session_destroy();
	header('Location:cartc.php');
}
  
  // delete one item from the cart
  
if(isset($_GET["removeitem"]) && isset($_SESSION["products"]))
{
	$product_code = $_GET["itemcode"]; //get the product code to remove
	

	
	foreach ($_SESSION["products"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!= $product_code){ //item does,t exist in the list
			$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
		}
		
		//create a new product list for cart
		$_SESSION["products"] = $product;
	}
	
	//redirect back to original page
	header('Location:cartc.php');
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$product_code 	= $_POST["product_code"]; //product code from  shop page
	$qitem=$_POST["qitem"];
	
	if(isset($_COOKIE["history"]))
			{
				if(isset($_COOKIE["history1"]))
				{
				setcookie("history2",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq2",$qitem, time() + (86400 * 30), "/");
			
				}
			
			else{
			
			setcookie("history1",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq1",$qitem, time() + (86400 * 30), "/");
			}
			
			}
			else{
			
				setcookie("history",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq",$qitem, time() + (86400 * 30), "/");
			}
	
	

	$rqitem = $conn->query("SELECT P_Quantity FROM products WHERE P_ID='$product_code' ");
	while($obj = $rqitem->fetch_object())
	{
		$qau=$obj->P_Quantity;
		
		if($_POST["qitem"] > $qau)
			
		die('The Quantity Item Is Out Of Stock <a href="shopc.php">  Back To Products</a>');
		
	}

	$results = $conn->query("SELECT P_Name, P_Price FROM products WHERE P_ID='$product_code' ");
	
	while($obj = $results->fetch_object())
				{
					// array that hold product values
						$new_product = array(array('name'=>$obj->P_Name, 'code'=>$product_code, 'qty'=>$qitem, 'price'=>$obj->P_Price));
				}
				
	  if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false 
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through to cheack session array
			{
				if($cart_itm["code"] == $product_code){ //the item exist in array
				
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qitem, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
	
	header('Location:shopc.php');
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='sales')
{
	
	
	$product_code 	= $_POST["product_code"]; //product code from  shop page
	$qitem=$_POST["qitem"];
	$sPrice = $_POST["sale_price"];
	
	if(isset($_COOKIE["history"]))
			{
				if(isset($_COOKIE["history1"]))
				{
				setcookie("history2",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq2",$qitem, time() + (86400 * 30), "/");
			
				}
			
			else{
			
			setcookie("history1",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq1",$qitem, time() + (86400 * 30), "/");
			}
			
			}
			else{
			
				setcookie("history",$product_code, time() + (86400 * 30), "/");
	        setcookie("hisq",$qitem, time() + (86400 * 30), "/");
			}
	
	$rqitem = $conn->query("SELECT P_Quantity FROM products WHERE P_ID='$product_code' ");
	while($obj = $rqitem->fetch_object())
	{
		$qau=$obj->P_Quantity;
		
		if($_POST["qitem"] > $qau)
			
		die('The Quantity Item Is Out Of Stock <a href="shopc.php">  Back To Products</a>');
		
	}
	
	
	
	
	$results = $conn->query("SELECT P_Name FROM products WHERE P_ID='$product_code' ");
	
	
	
	
	while($obj = $results->fetch_object())
				{
					
					
					
					// array that hold product values
						$new_product = array(array('name'=>$obj->P_Name, 'code'=>$product_code, 'qty'=>$qitem, 'price'=>$sPrice));
					
						
					
				
				}
				
				
				if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false 
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through to cheack session array
			{
				if($cart_itm["code"] == $product_code){ //the item exist in array
				

					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qitem, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qitem, 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
	
	header('Location:shopc.php');
}

//update quantity in the cart page

if(isset($_POST["recalculate"]))
{
	$product_code 	= $_POST["icode"]; //product code from  shop page
	$qitem=$_POST["qitem"];
	
	$rqitem = $conn->query("SELECT P_Quantity FROM products WHERE P_ID='$product_code' ");
	while($obj = $rqitem->fetch_object())
	{
		$qau=$obj->P_Quantity;
		
		if($_POST["qitem"] > $qau)
			
		die('The Quantity Item Is Out Of Stock <a href="cartc.php">  Back To Cart</a>');
		
	}

	$results = $conn->query("SELECT P_Name, P_Price FROM products WHERE P_ID='$product_code' ");

	while($obj = $results->fetch_object())
				{
					// array that hold product values
						$new_product = array(array('name'=>$obj->P_Name, 'code'=>$product_code, 'qty'=>$qitem, 'price'=>$obj->P_Price));
				}
				
				
				if(isset($_SESSION["products"])) //if we have the session
		{
			$found = false; //set found item to false 
			
			foreach ($_SESSION["products"] as $cart_itm) //loop through to cheack session array
			{
				if($cart_itm["code"] == $product_code){ //the item exist in array
				

					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$qitem, 'price'=>$cart_itm["price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$product[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["products"] = array_merge($product, $new_product);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["products"] = $product;
			}
			
		}else{
			//create a new session var if does not exist
			$_SESSION["products"] = $new_product;
		}
	
	header('Location:cartc.php');
}
?>