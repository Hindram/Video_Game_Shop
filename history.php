<?php
include('check.php');
require 'header.php';
?>
 <div class="top_shadow"></div>
    
    <!--********************************************* Main start *********************************************-->
    <div id="main_news_wrapper">
<div id="row">
           
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      
          <div id="tabbed_box_1" class="tabbed_box">
	    <h4>Check Out</h4>

        <div id="content_1" class="content">
		   <?php $total = 0;
		    $currency="SR";
		   ?>
		   
		<?php
		
 if(isset($_COOKIE["history"])&& isset($_COOKIE["hisq"])) 
				
    {
		
		echo '<h2><u>Your Purchase History :</u></h2> <br>';

		echo '<table>';
		echo '<tr>'; 
		echo  '<th>Name';
		echo  '</th>';
		echo  '<th>Price';
		echo  '</th>';
		echo  '<th>Quantity';
		echo  '</th>';
		echo '</tr>'; 
		echo '<tr>'; 
				
           $product_code = $_COOKIE["history"];
		   $item=$_COOKIE["hisq"];

		   $results = $conn->query("SELECT P_Name, P_Price  FROM products WHERE P_ID='$product_code' ");

		   while ($obj = $results->fetch_object())
		   {
			echo '<td>'.$obj->P_Name.' (Code :'.$product_code.')</td> ';
			echo '<td>'.$currency.$obj->P_Price.'</td>';
			echo '<td> '. $item.' </td>';
		   }
		    echo '</tr>'; 
		   	
 if(isset($_COOKIE["history1"])&& isset($_COOKIE["hisq1"])) 
 {
	 
	echo '<tr>'; 
	
	$product_code = $_COOKIE["history1"];
	$item=$_COOKIE["hisq1"];
   
	$results = $conn->query("SELECT P_Name, P_Price  FROM products WHERE P_ID='$product_code' ");
		   
		   
		   while ($obj = $results->fetch_object())
		   {
			echo '<td>'.$obj->P_Name.' (Code :'.$product_code.')</td> ';
			echo '<td>'.$currency.$obj->P_Price.'</td>';
			echo '<td> '. $item.' </td>';
		   }
	  echo '</tr>'; 
 }
	  
	  if(isset($_COOKIE["history2"])&& isset($_COOKIE["hisq2"])) 
 {
	 
	echo '<tr>'; 
	 
	$product_code = $_COOKIE["history2"];
	$item=$_COOKIE["hisq2"];
   
	$results = $conn->query("SELECT P_Name, P_Price  FROM products WHERE P_ID='$product_code' ");
		   
		   
		   while ($obj = $results->fetch_object())
		   {
			echo '<td>'.$obj->P_Name.' (Code :'.$product_code.')</td> ';
			echo '<td>'.$currency.$obj->P_Price.'</td>';
			echo '<td> '. $item.' </td>';
		   }
	  echo '</tr>'; 
 }
		  
    }
    else{
		echo 'no Purchases yet';
	}
?>

  <table>
   <tbody algin="center">
        
        <tr> 
              <td style="text-align:left; padding:9px 20px 10px 60px;">   
       </tr>
   </tbody>
  </table>
</li>
</ul>
</div>

    </div>
	
	</div>
    
 <!--********************************************* Footer start *********************************************-->
  <?php require 'footer.php';?>