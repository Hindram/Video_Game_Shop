<?php require 'header.php';?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Cosmos_Add New</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />

<!-- Included CSS Files -->
<link rel="stylesheet" href="stylesheets/main.css" />
<link rel="stylesheet" href="stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/contactus.css" />
<link rel="stylesheet" href="stylesheets/style.css" />
<!--include jQuery -->

<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<script type="text/javascript">

 $().ready(function()
  {
    $("#updateSearch").validate({
     errorPlacement: function(error, element) { 
         error.insertBefore(element); 
         },
      rules:
      {
        number:
        {
          required: true,
          number: true,
          maxlength: 4
        }
      },
      messages:
      {
        number:
        {
          required: "Please enter Product no. here.",
          number: "Please enter a valid number.",
          maxlength: "4 numbers Maximum for Product no. feild."
        }
      }
    });
  });

    $().ready(function()
  {
    $("#update").validate({
     errorPlacement: function(error, element) { 
         error.insertBefore(element); 
         },
      rules:
      {
        name:
        {
          required: true,
          maxlength: 40
        },
        img:
        {
          required: true
        },
        type:
        {
          required: true,
          lettersonly: true,
          maxlength: 10
        },
        price:
        {
          required: true,
          number: true,
          maxlength: 6
        },
        qty:
        {
          required: true,
          number: true,
          maxlength: 6
        },
        releaseDate:
        {
          required: true
        },
        video:
        {
          required: true,
          maxlength: 100
        },
        con:
        {
          required: true,
          lettersonly: true,
          maxlength: 10
        },
        des:
        {
          required: true,
          maxlength: 500
        },
        rate:
        {
          required: true,
          number: true,
          maxlength: 5
        }
      },
      messages:
      {
        name:
        {
          required: "Please enter Product name here.",
          maxlength: "40 chars Maximum for name feild."
        },
        img:
        {
          required: "Please insert Product image here."
        },
        type:
        {
          required: "Please enter Product type here.",
          maxlength: "10 chars Maximum for type feild."
        },
        price:
        {
          required: "Please enter Product price here.",
          number: "Please enter a valid price (a number).",
          maxlength: "6 numbers Maximum for price feild."
        },
        qty:
        {
          required: "Please enter Product quantity here.",
          number: "Please enter a valid quantity (a number).",
          maxlength: "6 chars Maximum for quantity feild."
        },
        releaseDate:
        {
          required: "Please enter Product release date here."
        },
        video:
        {
          required: "Please enter Product trailer video here.",
          maxlength: "100 chars Maximum for video feild."
        },
        con:
        {
          required: "Please enter Product condition here.",
          maxlength: "10 chars Maximum for condition feild."
        },
        des:
        {
          required: "Please enter Product description here.",
          maxlength: "500 chars Maximum for description feild."
        },
        rate:
        {
          required: "Please enter Product rate here.",
          number: "Please enter a valid rate (a number).",
          maxlength: "5 numbers Maximum for rate feild."
        }
      }
    });
  });
 </script>
</head>

<body>
    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
       <div id="main_news_wrapper" >
         <div id="row">
           
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      <div id="tabbed_box_1" class="tabbed_box">
	<h4>Search (Update/Delete):</h4>

<?php
ob_start();
//connect  to the database
require("subdir/connection.php");
echo"
<form action='update.php' method='post' id='updateSearch'>
<table border='0'>
<tr>
<td><p style='size:10px; color:#63BAE2;'> Product No :</p></td>
<td><input type='text' name='number'></td>
<td><input type='submit' name='submit' value='Search'></td>
<td><p style='size:10px; color:red'>Search To Update Or Delete</p></td>
</tr></table>
</form>";
// Gather this product's full information for inserting automatically into the edit form below on page
if (isset($_POST['number'])) {
	$targetID = $_POST['number'];
    $sql = mysql_query("SELECT * FROM products WHERE P_ID='$targetID'");
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	  while($row = mysql_fetch_array($sql)){ 
             
 $id = $row["P_ID"];
 $name = $row["P_Name"];
 $type = $row["P_Type"];
 $price = $row["P_Price"];
 $qty = $row["P_Quantity"];
 $releaseDate = $row["P_ReleaseDate"];
 $img = $row["P_Image"];
 $ratepic = $row["Rating_Cat_Img"];
 $vid = $row["P_Video"];
 $con = $row["P_Condition"];
 $rate = $row["P_Rate"];
 $cid = $row["Category_ID"];
 $comid = $row["Company_ID"];
$pid = $row["Platform_id"];
 $des = $row["P_Description"];
        }
    } else {
	    echo "ID not exist.";
		exit();
}}
if (isset($_POST['number'])) {
	if ($productCount > 0){
echo "
 <form method='post' action='update.php' id='update'>
    <table border='0'>
       <tbody algin='center'>
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Product ID: <span> *</span></label></td>
	     <td><span> <input type='text' name='id' value = '$id' readonly /></td><tr> 
		 
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Name <span> *</span></label></td>
	     <td><span> <input type='text' name='name' value = '$name'/></td><tr> 
		 

      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Type: <span> *</span></label></td>
	      <td><span> <input  type='text' name='type' value = '$type'/></span></p></td></tr
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Price: <span> *</span></label></td>
	      <td><span> <input  type='text' name='price' value = '$price'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Quantity: <span> *</span></label></td>
	      <td><span> <input  type='text' name='qty' value = '$qty'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Release Date: <span> *</span></label></td>
	      <td><span> <input  type='date' name='releaseDate' value = '$releaseDate'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Video: <span> *</span></label></td>
	      <td><span> <input  type='text' name='video' value = '$vid'/></span></p></td></tr>
		  
     <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Condition: <span> *</span></label></td>
	      <td><span> <input  type='text' name='con' value = '$con'/></span></p></td></tr>
		  
    <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Description:<span> *</span></label></td>
	<td><textarea 
			name='des'
			spellcheck='true'
			rows='10' cols='50'
			placeholder='write the description here...'>$des</textarea></p></td></tr>
   
   <tr style='text-align:left;'><td><p><label style='color:#63BAE2;'>Rating: <span> *</span></label></td>
	    <td><span> <input  type='text' name='rate' value = '$rate'/></span></p></td></tr>
   
   <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Category ID: <span> *</span></label></td>
	    <td><select name='cid'>
		      <option value = '$cid'>$cid</option>
		      <option value='1' >1: Action</option>
          <option value='2' >2: Sports</option>
          <option value='3' >3: Adventure</option>
          <option value='4' >4: Family</option>
        </select></p></td></tr>           

           
   <tr style='text-align:left;'><p><td><label style='color:#63BAE2;'>Compatible Platforms: <span> *</span></label></td>
	    <td><select name='pid'>
		      <option value = '$pid'>$pid</option>
		      <option value='1' >1: PS4</option>
          <option value='2' >2: XBOX ONE</option>
        </select></td></p></tr>      			
           
   <tr style='text-align:left;'><p><td><label style='color:#63BAE2;'>Company id: <span> *</span></label></td>
	   <td><select name='comid'>
	        <option value = '$comid'>$comid</option>
		      <option value='1' >1: infinity ward</option>
          <option value='2' >2: 343 Industries</option>
		      <option value='3' >3: Telltale Games</option>
		      <option value='4' >4: Naughty Dog</option>
		      <option value='5' >5: Spearhead Games</option>
		      <option value='6' >6: Ubisoft</option>
		      <option value='7' >7: EA Canada</option>
		      <option value='8' >8: Mojang</option>
		      <option value='9' >9: Frogwares Games</option>
		</select></td></p></tr>     
   
   <tr colspan='2' >
               <td>
			   </td> <td>  <input type='submit' name='update' value='Update' >
                   <input type='submit' name='delete' value='Delete' ></td></tr>
     </tbody></table></form>
</ul>
";}else{
	 echo "ID not exist.";
}
}
// Parse the form data and add items to the system
if((isset($_POST['update'])))
{
$id=mysql_real_escape_string($_POST['id']);
$name=mysql_real_escape_string($_POST['name']);
$type=mysql_real_escape_string($_POST['type']);
$price=mysql_real_escape_string($_POST['price']);
$des=mysql_real_escape_string($_POST['des']);
$cid=mysql_real_escape_string($_POST['cid']);
$pid=mysql_real_escape_string($_POST['pid']);
$qty=mysql_real_escape_string($_POST['qty']);
$video=mysql_real_escape_string($_POST['video']);
$rate=mysql_real_escape_string($_POST['rate']);
$con=mysql_real_escape_string($_POST['con']);
$releaseDate=mysql_real_escape_string($_POST['releaseDate']);
$comid=mysql_real_escape_string($_POST['comid']);
	
	$sql = mysql_query("UPDATE products SET P_Name='$name',P_Type='$type',P_Price='$price',
	P_Quantity='$qty',P_ReleaseDate='$releaseDate',P_Video='$video', P_Condition='$con',P_Rate='$rate',Category_ID='$cid',Company_ID='$comid',Platform_id='$pid',P_Description='$des' WHERE P_ID='$id'");
	if($sql){
		echo"<meta http-equiv='refresh'
		      content='2'>";
	          echo "Updated";
	}
    exit();
}
// Delete Item Question to Admin, and Delete Product if they choose
if (isset($_POST['delete'])) {
	echo 'Do you really want to delete product with ID of '. $_POST['id'] . '? <a href="update.php?yesdelete=' . $_POST['id'] . '">Yes</a> | <a href="update.php">No</a>';

}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	$sql = mysql_query("DELETE FROM products WHERE P_ID='$id_to_delete' LIMIT 1") or die (mysql_error());
  if($sql){
	          echo "Deleted";
			  exit();
			   }
    exit();
}
?>

          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
  
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    
    
<?php require 'footer.php';?>