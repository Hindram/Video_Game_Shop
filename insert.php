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
    $("#addnew").validate({
     errorPlacement: function(error, element) { 
         error.insertBefore(element); 
         },
      rules:
      {
        id:
        {
          required: true,
          number: true,
          maxlength: 4
        },
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
        },
        cid:
        {
          required: true,
        },
        pid:
        {
          required: true,
        },
        
        comid:
        {
          required: true,
        }
      },
      messages:
      {
        id:
        {
          required: "Please enter Product Id here.",
          number: "Please enter a valid Id number.",
          maxlength: "4 numbers Maximum for id feild."
        },
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
          maxlength: "6 chars Maximum for name feild."
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
          maxlength: "5 number Maximum for rate feild."
        },
        cid:
        {
          required: "Please choose Category id."
        },
        pid:
        {
          required: "Please choose Compatible platform."
        },
        comid:
        {
          required: "Please choose Company id."
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
	<h4>ADD New:</h4>
<?php
echo "
 <form method='post' action='insert.php' id='addnew'>
    <table border='0'>
       <tbody algin='center'>
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Product ID: <span> *</span></label></td>
	     <td><span> <input type='text' name='id' /></td><tr> 
		 
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Name <span> *</span></label></td>
	     <td><span> <input type='text' name='name'/></td><tr> 
		 
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Add item image: <span> *</span></label></td>
	      <td><span><input type='file' name='img' ></span></p></td></tr>

      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Type: <span> *</span></label></td>
	      <td><span> <input  type='text' name='type'/></span></p></td></tr
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Price: <span> *</span></label></td>
	      <td><span> <input  type='text' name='price'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Quantity: <span> *</span></label></td>
	      <td><span> <input  type='text' name='qty'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Release Date: <span> *</span></label></td>
	      <td><span> <input  type='date' name='releaseDate'/></span></p></td></tr>
		  
      <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Video: <span> *</span></label></td>
	      <td><span> <input  type='text' name='video'/></span></p></td></tr>
		  
     <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Condition: <span> *</span></label></td>
	      <td><span> <input  type='text' name='con'/></span></p></td></tr>
		  
    <tr style='text-align:left;'><td><p><label style='color:#63BAE2;'>Description:<span> *</span></label></td>
	<td><textarea 
			name='des'
			spellcheck='true'
			rows='10' cols='50'
		  placeholder='write the description here...'></textarea></p></td></tr>
   
   <tr style='text-align:left;'><td><p><label style='color:#63BAE2;'>Rating: <span> *</span></label></td>
	    <td><span> <input  type='text' name='rate'/></span></p></td></tr>
   
   <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Category ID: <span> *</span></label></td>
	    <td><select name='cid'>
                <option value=''>Choose Product Category</option>
		            <option value='1'>1: Action</option>
                <option value='2' >2: Sports</option>
                <option value='3' >3: Adventure</option>
                <option value='4' >4: Family</option>
                <option value='4' >5: Console</option>
        </select></p></td></tr>           

           
   <tr style='text-align:left;'><p><td><label style='color:#63BAE2;'>Compatible Platforms: <span> *</span></label></td>
	    <td><select name='pid'>
                <option value=''>Choose Compatible Platform</option>
		            <option value='1'>1: PS4</option>
                <option value='2'>2: XBOX ONE</option>
        </select></td></p></tr>
          
   <tr  style='text-align:left;'><td><p><label style='color:#63BAE2;'>Rate image: </label></td><span>
       <td><input type='file' name='ratepic'></span></p></td></tr>	      			
           
   <tr style='text-align:left;'><p><td><label style='color:#63BAE2;'>Company id: <span> *</span></label></td>
	   <td><select name='comid'>
                <option value=''>Choose Company id</option>
	              <option value='1'> 1: infinity ward</option>
                <option value='2' > 2: 343 Industries</option>
		            <option value='3' > 3: Telltale Games</option>
		            <option value='4' > 4: Naughty Dog</option>
		            <option value='5' > 5: Spearhead Games</option>
		            <option value='6' > 6: Ubisoft</option>
		            <option value='7' > 7: EA Canada</option>
		            <option value='8' > 8: Mojang</option>
		            <option value='9' > 9: Frogwares Games</option>
                <option value='9' >10: Sony</option>
                <option value='9' >11: Microsoft</option>
                <option value='9' >12: Milestone</option>
                <option value='9' >13: Ghost Games</option>
                <option value='9' >14: ToyLogic Inc.</option>
                <option value='9' >15: Carbon</option>
                <option value='9' >16: Santa Monica Studio</option>
                <option value='9' >17: Traveller's Tales</option>
		</select></td></p></tr>     
   
   <tr colspan='2' >
               <td></td>
			             <td><input type='submit' name='submit' value='Add New' >
                   <input type='reset' name='reset' value='Clear' ></td></tr>
     </tbody></table></form>
</ul>
";

if((isset($_POST['submit']))){
$submit=$_POST['submit'];
$id=mysql_real_escape_string($_POST['id']);
$name=mysql_real_escape_string($_POST['name']);
$img=mysql_real_escape_string($_POST['img']);
$type=mysql_real_escape_string($_POST['type']);
$price=mysql_real_escape_string($_POST['price']);
$des=mysql_real_escape_string($_POST['des']);
$cid=mysql_real_escape_string($_POST['cid']);
$pid=mysql_real_escape_string($_POST['pid']);
$ratepic=mysql_real_escape_string($_POST['ratepic']);
$qty=mysql_real_escape_string($_POST['qty']);
$video=mysql_real_escape_string($_POST['video']);
$rate=mysql_real_escape_string($_POST['rate']);
$con=mysql_real_escape_string($_POST['con']);
$releaseDate=mysql_real_escape_string($_POST['releaseDate']);
$comid=mysql_real_escape_string($_POST['comid']);
$newname = "./images/media/Games/".$img."";
$newname2 = "./images/media/Games/".$ratepic."";

require("subdir/connection.php");
// See if that product id is an identical match to another product in the system
$sql = mysql_query("SELECT P_ID FROM products where P_ID='$id' ");
$productMatch = mysql_num_rows($sql);
if ($productMatch > 1) {
		echo 'Sorry you tried to place a duplicate product  into the system';
		exit();
	}
// Add this product into the database now
$sql2 = mysql_query("INSERT INTO products (P_ID,P_Name,P_Type, P_Price,P_Quantity,P_ReleaseDate,P_Image,Rating_Cat_Img,P_Video,P_Condition,P_Rate, Category_ID,Company_ID,Platform_id, P_Description) 
        VALUES('$id','$name','$type','$price','$qty','$releaseDate','$newname','$newname2','$video','$con','$rate','$cid','$comid','$pid','$des')") or die (mysql_error());
      if($sql2){
		  echo"your data inserted successfully";
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