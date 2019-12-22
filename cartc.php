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
	    <h4>Shopping Cart</h4>

        <div id="content_1" class="content">
		   <?php $total = 0;
		    $currency="S.R";
		   ?>
		   
		<?php
		
 if(isset($_SESSION["products"])) 
				
    {
		
		echo '<h2><u>Your Cart List :</u></h2> <br>';
	    
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
		echo  '<th>Update';
		echo  '</th>';
		echo  '<th>Delete';
		echo  '</th>';
		echo '</tr>'; 

		foreach ($_SESSION["products"] as $cart_itm)
        {
		
				
		   $itemquan=$cart_itm["qty"];
           $product_code = $cart_itm["code"];
           $P_price = $cart_itm["price"];

		   $results = $conn->query("SELECT P_Name, P_Image FROM products WHERE P_ID='$product_code' ");
		   while ($obj = $results->fetch_object())
		   {
		   
		    
		   
		  // echo "<li>&nbsp</li>";
		echo '<tr>'; 
		echo "<td><a href='./product_details.php?id=".$product_code."'> ";
		echo "<img style ='height:100px; width: 100px;' src='".$obj->P_Image."' />";
		echo "</a></td>";
   
		echo '<td>'.$obj->P_Name.' (Code :'.$product_code.')</td> ';
		echo '<td>'.$currency.$P_price.'</d>';
	
		echo '<td> '.$itemquan.' </td>';
		 
		echo ' </form>';
 
			$subtotal = ($cart_itm["price"]*$itemquan);
			 
			$total = ($total + $subtotal);

		   }
		   
		echo '<td><form method = "POST"  action="check.php">';
			  
		echo'<input type="number" min="1" max="5"name="qitem" value="'.$itemquan.'">';
		echo '<input type ="hidden" name="icode" value="'.$product_code.'"><p><button type="submit" name="recalculate"> Update </button></p></form></td>' ;
		echo '<td><form method="GET" action ="check.php"><input type ="hidden" name="itemcode" value="'.$product_code.'"><br><button type="submit" name="removeitem" >Delete </button></form></td>';
 
		echo '</tr>'; 
			$cart_items ++;
        }
        echo '</table>';
		echo '</form>';
		
    }else{
		echo '<h3>Your Cart is empty</h3>';
	}

?>	
</div>

  <table>
   <tbody algin="center">
        
        <tr> <!--غيرت اشياء هني -->
              <td style="text-align:left; padding:9px 20px 10px 60px;">
			  
			  <?php echo 

			  '<strong>Total : '.$currency.$total.'</strong>  '; ?></td>  
			  
              <td style="align:left; padding:9px 40px 10px 40px;"><a href="#">
			  <?php echo '<form method = "GET"  action="cartc.php"><button type=button" name="emptycart">Delete All</button></a></td></form>'; ?>

              <td style="align:left; "><a href="checkout.php"><button type="button">Check Out</button></a></td>
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