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
            <li><a name="tab" id="tab_1" href="javascript:void(0)" onClick="tabs(1)" class="active">Action</a></li>
            <li><a name="tab" id="tab_2" href="javascript:void(0)" onClick="tabs(2)">Sports</a></li>
            <li><a name="tab" id="tab_3" href="javascript:void(0)" onClick="tabs(3)">Adventure</a></li>
            <li><a name="tab" id="tab_4" href="javascript:void(0)" onClick="tabs(4)">Family</a></li>
        </ul>
<!--************************************** 1st Tab:"Action" ******************************************-->    
        <div name="tab_content" id="content_1" class="content">
          <ul >
            	 <li><a name="action">Action</a>
                  <div>
<?php
      //----------------------Action Games Products Info ------------------------// 

      
        // غيرت طريقة الكود 

       echo "<table>";
       
       echo "<tr>";
      $results = $conn->query("SELECT * FROM products where Category_ID='1' ORDER BY P_ID ASC"); 
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
 
        echo '<tr>';
        
        echo '</tr>';
      
        echo "</tbody>";
         
         
        }
      }
       ?>
       
      <tfoot >
            <tr>
               <td colspan="6"><a href="./shopc.php"><u>Back to Shop</u></a></td>
            </tr>
       </tfoot>
    </table>
   </div>
 </li>
 </ul>
</div>
<!--****************************** END of 1st Tab:"Action" ***************************************-->
<!--********************************* 2nd Tab:"Sports" ***************************************-->
<div name="tab_content" id="content_2" class="content">
 <ul>
 <li><a name="sports">Sports</a>
     <div>
                             <?php
      //----------------------Sports Games Products Info ------------------------// 

      
        // غيرت طريقة الكود 

         echo "<table>";
       
       echo "<tr>";
      $results = $conn->query("SELECT * FROM products where Category_ID='2' ORDER BY P_ID ASC"); 
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
       
      <tfoot >
            <tr>
               <td colspan="6"><a href="./shopc.php"><u>Back to Shop</u></a></td>
            </tr>
      </tfoot>
    </table>
  </div>
  </li>
 </ul>
</div>
<!--****************************** END of 2nd Tab:"Sports" ***************************************-->
<!--********************************* 3rd Tab:"Adventure" ***************************************-->
 <div name="tab_content" id="content_3" class="content">
   <ul>
    <li><a name="adventure">Adventure</a>
    <div>
     <?php
      //---------------------- Adventure Games Products Info ------------------------// 

      
        // غيرت طريقة الكود 

         echo "<table>";
       
       echo "<tr>";
      $results = $conn->query("SELECT * FROM products where Category_ID='3' ORDER BY P_ID ASC"); 
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

        echo '<tr>';
        
        echo '</tr>';
      
        echo "</tbody>";
         
         
        }
      }
       ?>
      <tfoot >
            <tr>
               <td colspan="6"><a href="./shopc.php"><u>Back to Shop</u></a></td>
            </tr>
      </tfoot>
    </table>
   </div>
  </li>
 </ul>
</div>
<!--****************************** END of 3rd Tab:"Adventure" ***************************************-->
<!--************************************ 4th Tab:"Family" ***************************************-->

<div name="tab_content" id="content_4" class="content">
   <ul>
    <li><a name="family">Family</a>
    <div>
    <?php
      //----------------------Family Games Products Info ------------------------// 

        // غيرت طريقة الكود 

         echo "<table>";
       
       echo "<tr>";
      $results = $conn->query("SELECT * FROM products where Category_ID='4' ORDER BY P_ID ASC"); 
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
         
        echo '<tr>';
        
        echo '</tr>';
      
        echo "</tbody>";
         
         
        }
      }
       ?>
       
      <tfoot >
            <tr>
               <td colspan="6"><a href="./shopc.php"><u>Back to Shop</u></a></td>
            </tr>
      </tfoot>
    </table>
  </div>
  </li>
 </ul>
</div>
    
    </div>

</div>


          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
  
    <div class="bottom_shadow"></div>
        <!-- Left wrapper end --> 
  
    <!--********************************************* Main end *********************************************--> 
    
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