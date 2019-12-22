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
		    $currency="S.R";
		   ?>

		<?php

 if(isset($_SESSION["products"])) 
				
    {
		
		echo '<h2><u>Your Purchase History :</u></h2> <br>';
	    
		 $cart_items = 0;
		 
		echo '<table>';

		echo '<tr>'; 
		echo  '<th>Image';
		echo  '</th>';
		echo  '<th>Name';
		echo  '</th>';
		echo  '<th>Price';
		echo  '</th>';
		echo  '<th>Quantity';
		echo  '</th>';
		echo '</tr>';

		foreach ($_SESSION["products"] as $cart_itm)
        {
		   $itemquan=$cart_itm["qty"];
           $product_code = $cart_itm["code"];
           $P_price = $cart_itm["price"];

		   $results = $conn->query("SELECT P_Name, P_Price, P_Image , P_Quantity FROM products WHERE P_ID='$product_code' ");
		   while ($obj = $results->fetch_object())
		   {
		    $lq=$obj->P_Quantity;

		    $itemquan= abs($itemquan-$lq);

		    $update= $conn->query("UPDATE products SET P_Quantity = '$itemquan' WHERE P_ID='$product_code'");

			 // echo "<li>&nbsp</li>";
		echo '<tr>'; 
		echo "<td><a href='./product_details.php?id=".$product_code."'> ";
		echo "<img style ='height:100px; width: 100px;' src='".$obj->P_Image."' />";
		echo "</a></td>";
   
		echo '<td>'.$obj->P_Name.' (Code :'.$product_code.')</td> ';
		echo '<td>'.$currency.$obj->P_Price.'</yd>';
	
		echo '<td> '.$cart_itm["qty"].' </td>';

		
		echo '</div>';
        echo '</li>';

			$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
			 
			$total = ($total + $subtotal);

		   }
        echo '</tr>'; 

			$cart_items ++;
        }

    }else{
		echo 'Your Cart is empty';
	}

$_SESSION["products"] = array();
	session_destroy();

?>

  <table>
   <tbody algin="center">
        
        <tr> 
              <td style="text-align:left; padding:9px 20px 10px 60px;">
			  
			  <?php echo '<strong>Total : '.$currency.$total.'</strong>  '; ?></td>
    
    		  <td style="align:left; "><a href="history.php"><button type="button">History</button></a></td>
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