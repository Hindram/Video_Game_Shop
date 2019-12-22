<?php require 'header.php';?>
    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
       <div id="main_news_wrapper" >
         <div id="row">
           
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      <div id="tabbed_box_1" class="tabbed_box">
	<h4>View all products:</h4>
<?php 
		ob_start();
		
//connect  to the database
$db=mysql_connect( "localhost","root", "" ) or die ('I cannot connect to the database  because: ' . mysql_error());
  //select  the database to use
  $mydb=mysql_select_db("cosmos");
// Delete Item Question to Admin, and Delete Product if they choose
if (isset($_GET['deleteid'])) {
	echo '<p style="color: white; font-size:16px;"> Do you really want to delete product with ID of '. $_GET['deleteid'] . '? <a href="viewAll.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="viewAll.php">No</a></p>';
	exit();
}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	$sql = mysql_query("DELETE FROM products WHERE P_ID='$id_to_delete' LIMIT 1") or die (mysql_error());

     //header('location: ManagingProduct.php');
	 //ob_end_flush();
	 //exit();
	  
	
}

   
?>
   
     <?php 
//connect  to the database
$db=mysql_connect( "localhost",
            "root", "" ) or die ('I cannot connect to the database  because: ' . mysql_error());
  //select  the database to use
  $mydb=mysql_select_db("cosmos");
// This block grabs the whole list for viewing
$product_list = "";
$sql = mysql_query("SELECT * FROM products ORDER BY P_ReleaseDate DESC");
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 

 $id = $row["P_ID"];
 $product_name = $row["P_Name"];
 $type = $row["P_Type"];
 $price = $row["P_Price"];
 $qty = $row["P_Quantity"];
 $date_added = strftime("%b %d, %Y", strtotime($row["P_ReleaseDate"]));
 $img = $row["P_Image"];
 $rimg = $row["Rating_Cat_Img"];
 $vid = $row["P_Video"];
 $con = $row["P_Condition"];
 $rate = $row["P_Rate"];
 $cid = $row["Category_ID"];
 $comid = $row["Company_ID"];
$pid = $row["Platform_id"];
$des = $row["P_Description"];
	$img2="<img src='$img' width='50' height='50'/ >";	
	$product_list .= "$img2 || <strong>Product ID: $id </strong> || <strong>Name: </strong>$product_name || <strong>S.R $price</strong> || <strong>Available Quantity: $qty</strong> || <strong>Rate: $rate</strong> || <em>Released in.. $date_added</em> &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <u><a style='color: #63BAE2; font-size:16px;' href='viewAll.php?deleteid=$id'>Delete</a></u><br><br/>";
    }
	echo "<ul style='color: white; font-size:16px;'>";	
	echo "<li>$product_list</li></ul>";
} 
else {
$product_list = "You have no products listed in your store yet";
echo $product_list;}

?>
		
   </div>
 </li>

            	

            
            	
</ul>        
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
  
    <div class="bottom_shadow"></div>
  
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