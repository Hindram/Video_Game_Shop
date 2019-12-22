<?php require 'header.php';
?>
    <div class="top_shadow"></div>

    <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper" >
         <div id="row">
           
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      
          <div id="tabbed_box_1" class="tabbed_box">
	<h4>Products Shop <small>Select a category </small></h4>
    <div class="tabbed_area">
    
        <ul class="tabs">
            <li><a name="tab" id="tab_1" href="javascript:void(0)" onClick="tabs(1)" class="active">Games</a></li>
            <li><a name="tab" id="tab_2" href="javascript:void(0)" onClick="tabs(2)">Consoles</a></li>
            <li><a name="tab" id="tab_3" href="javascript:void(0)" onClick="tabs(3)">Sales</a></li>
        </ul>

<!--************************************************ 1st Tab:"Games" *************************************************-->    
        <div name="tab_content" id="content_1" class="content">
        	<ul >
<!--************************************START Of Action Games**************************************-->

  <li><a>Action</a>
    <div>
			<?php
			//----------------------Action Games Products Info ------------------------//	

			 echo "<table>";
			 echo "<tr>";

			$results = $conn->query("SELECT * FROM products where Category_ID='1' ORDER BY P_ID ASC limit 6"); 
			if($results) 
			{
				while($obj = $results->fetch_object())
				{
			 
			  $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
			  
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
			 	echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
			  echo "</a></th>";
	
 			  echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
 			 	echo "<br>";
				echo "<small>".$currency.$obj->P_Price."</small></td>";

				echo  "<td> <button type='submit' >Add to cart</button></td>";
				echo '<td><input type="text" name="qitem" value ="1"></td>';
 			  echo "</tr>";

				echo '<input type="hidden" name="type" value="add" />';

				echo"</form>";
      
        echo "</tbody>";
				}
			}
 		   ?>
    </table>
   </div>
 </li>
<!--************************************END Of Action Games**************************************-->

<!--************************************START Of Sports Games**************************************-->

  <li><a>Sports</a>
   <div>
    <?php
      //----------------------Sports Games Products Info ------------------------// 

        echo "<table>";
        echo "<tr>";

      $results = $conn->query("SELECT * FROM products where Category_ID='2' ORDER BY P_ID ASC limit 6"); 
      if($results) 
      {
        while($obj = $results->fetch_object())
        {
       
        $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
  
        echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
        echo "<br>";
        echo "<small>".$currency.$obj->P_Price."</small></td>";
         
        echo  "<td> <button type='submit' >Add to cart</button></td>";
        echo '<td><input type="text" name="qitem" value ="1"></td>';
        echo "</tr>";
 
        echo '<input type="hidden" name="type" value="add" />';
 
        echo"</form>";
      
        echo "</tbody>";

        }
      }
       ?>
    </table>
   </div>
 </li>
<!--************************************END Of Sports Games**************************************-->

<!--************************************START Of Adventure Games**************************************-->

  <li><a>Adventure</a>
   <div>
    <?php
      //---------------------- Adventure Games Products Info ------------------------// 

         echo "<table>";
         echo "<tr>";

      $results = $conn->query("SELECT * FROM products where Category_ID='3' ORDER BY P_ID ASC limit 6"); 
      if($results) 
      {
        while($obj = $results->fetch_object())
        {
       
        $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
  
        echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
        echo "<br>";
        echo "<small>".$currency.$obj->P_Price."</small></td>";
         
        echo  "<td> <button type='submit' >Add to cart</button></td>";
        echo '<td><input type="text" name="qitem" value ="1"></td>';
        echo "</tr>";

        echo '<input type="hidden" name="type" value="add" />';

        echo"</form>";
      
        echo "</tbody>";
        }
      }
       ?>
    </table>
   </div>
 </li>
<!--************************************END Of Adventure Games**************************************-->

<!--************************************START Of Family Games**************************************-->

  <li><a>Family</a>
   <div>
    <?php
      //----------------------Family Games Products Info ------------------------// 

         echo "<table>";
         echo "<tr>";

      $results = $conn->query("SELECT * FROM products where Category_ID='4' ORDER BY P_ID ASC limit 6"); 
      if($results) 
      {
        while($obj = $results->fetch_object())
        {
       
        $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
  
        echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
        echo "<br>";
        echo "<small>".$currency.$obj->P_Price."</small></td>";
         
        echo  "<td> <button type='submit' >Add to cart</button></td>";
        echo '<td><input type="text" name="qitem" value ="1"></td>';
        echo "</tr>";

        echo '<input type="hidden" name="type" value="add" />';

        echo"</form>";

        echo "</tbody>";
        }
      }
       ?>
    </table>
   </div>
 </li>
<!--************************************END Of Family Games**************************************-->

            	<li>
                  <div  align="center">
                        <a href="./AllGames.php" ><button >See All Games</button></a>          
                  </div>
              </li>
            	
</ul>
</div>

<!--**********************************************END 1st Tab:"Games"***********************************************-->   

<!--***********************************************2nd Tab:"Consoles"************************************************-->   
       
<div name="tab_content" id="content_2" class="content">
  <ul >

<!--************************************START Of PS4 Consoles**************************************-->

  <li><a>PS4</a>
   <div>
    <?php
      //----------------------PS4 Consoles Products Info ------------------------// 

         echo "<table>";
         echo "<tr>";

      $results = $conn->query("SELECT * FROM products where Category_ID='5' and Platform_id='1' ORDER BY P_ID ASC "); 
      if($results) 
      {
       while($obj = $results->fetch_object())
       {
        $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
  
        echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
        echo "<br>";
        echo "<small>".$currency.$obj->P_Price."</small></td>";
         
        echo  "<td> <button type='submit' >Add to cart</button></td>";
        echo '<td><input type="text" name="qitem" value ="1"></td>';
        echo "</tr>";

        echo '<input type="hidden" name="type" value="add" />';

        echo"</form>";
 
        echo "</tbody>";
        }
      }
       ?>
       </table>
   </div>
 </li>
<!--************************************END Of PS4 Consoles**************************************-->

<!--************************************START Of XBOX ONE Consoles**************************************-->

  <li><a href="" >XBOX ONE</a>
   <div>
    <?php
      //----------------------XBOX ONE Consoles Products Info ------------------------// 

         echo "<table>";
         echo "<tr>";

      $results = $conn->query("SELECT * FROM products where Category_ID='5' and Platform_id='2' ORDER BY P_ID ASC "); 
      if($results) 
      {
       while($obj = $results->fetch_object())
       {
        $currency = "S.R ";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
  
        echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
        echo "<br>";
        echo "<small>".$currency.$obj->P_Price."</small></td>";
         
        echo  "<td> <button type='submit' >Add to cart</button></td>";
        echo '<td><input type="text" name="qitem" value ="1"></td>';
        echo "</tr>";
 
        echo '<input type="hidden" name="type" value="add" />';

        echo"</form>";
  
        echo "</tbody>";
        }
      }
       ?>
     </table>
   </div>
 </li>
<!--************************************START Of XBOX ONE Consoles**************************************-->
</ul>
</div>
<!--**********************************************END 2nd Tab:"Consoles"***********************************************-->   

<!--**********************************************3rd Tab:"Sales"***********************************************-->   


  <div name="tab_content" id="content_3" class="content">
   <ul>
     <li>
      <?php
      //----------------------Sales Products Info ------------------------// 

         echo "<table>";
         echo "<tr>";

      $results = $conn->query("SELECT * FROM Products join Sales on P_ID = Pro_ID where Sale_StartDate <=NOW() AND Sale_EndDate>=NOW()  ORDER BY P_ID ASC "); 
      if($results) 
      {
       while($obj = $results->fetch_object())
       {
        $currency = "S.R ";
        $persent = " SALE %";
        echo '<form method="post" action="check.php">';
        echo"<input type='hidden' name='product_code' value='".$obj->P_ID."'/>";
        
        echo "<th><a href='./product_details.php?id=".$obj->P_ID."'> ";
        echo '<img src="'.$obj->P_Image.'" class="Product_img" />';
        echo "</a></th>";
           
           //calculate sale 
           $sale = $obj->P_Price * ($obj->Sale_Amount / 100);
           $newPrice = $obj->P_Price - $sale;
 
         echo '<td><a href="./product_details.php?id='.$obj->P_ID.'">'.$obj->P_Name.'</a>';
         echo "<br>";
         echo "<small><strike>".$currency.$obj->P_Price."</strike></small>";
         echo "<br>";
         echo "<small>".$currency.$newPrice."</small></td>";
         
         echo"<input type='hidden' name='sale_price' value='".$newPrice."'/>";
        
         echo  "<td> <button type='submit' >Add to cart</button></td>";
         echo '<td><input type="text" name="qitem" value ="1"></td>';
         echo '<td><label>'.$persent.$obj->Sale_Amount.'</label></td>';
         echo "</tr>";
  
         echo '<input type="hidden" name="type" value="sales" />';
 
         echo"</form>";
         
         echo "</tbody>";
        }
      }
       ?>
      </table>
    </li>
	</ul>
</div>
    
  
  </div>

</div>


          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
  
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    
    
    <!--********************************************* Footer start *********************************************-->
   <?php require 'footer.php';?>

<script type="text/javascript" >
function tabs(selectedtab) {    
    // contents
    var s_tab_content = "content_" + selectedtab;   
    var contents = document.getElementsByTagName("div");
    for(var x=0; x<contents.length; x++) {
        name = contents[x].getAttribute("name");
        if (name == 'tab_content') {
            if (contents[x].id == s_tab_content) {
            contents[x].style.display = "block";                        
            } else {
            contents[x].style.display = "none";
            }
        }
    }   
    // tabs
    var s_tab = "tab_" + selectedtab;       
    var tabs = document.getElementsByTagName("a");
    for(var x=0; x<tabs.length; x++) {
        name = tabs[x].getAttribute("name");
        if (name == 'tab') {
            if (tabs[x].id == s_tab) {
            tabs[x].className = "active";                       
            } else {
            tabs[x].className = "";
            }
        }
    }     
}
</script>