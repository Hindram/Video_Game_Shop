<?php

include_once("conn.php");
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Cosmos_Products Details</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />

<!-- Included CSS Files -->
<link rel="stylesheet" href="stylesheets/main.css" />
<link rel="stylesheet" href="stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/style.css" />

<style type="text/css">

.rating-static { 
    width: 60px; 
    height: 16px;  
    display: block; 
    background: url('/images/rating_stars.jpeg') 0 0 no-repeat;
}

.rating-50 { background-position: 0 0; }
.rating-40 { background-position: -12px 0; } 
.rating-30 { background-position: -24px 0; }
.rating-20 { background-position: -36px 0; }
.rating-10 { background-position: -48px 0; }
.rating-0 { background-position: -60px 0; }

.rating-5  { background-position: -48px -16px; }
.rating-15 { background-position: -36px -16px; }
.rating-25 { background-position: -24px -16px; }
.rating-35 { background-position: -12px -16px; }
.rating-45 { background-position: 0 -16px; }

          
</style>

</head>

<body>

<!--********************************************* Main wrapper Start *********************************************-->
<div id="footer_image">
  <div id="main_wrapper"> 
    
    <!--********************************************* Logo Start *********************************************-->
    <div id="logo"> <a href="Home.php"><img alt="Cosmos" src="./images/logo.png"  /></a>
      <div id="social_ctn"> 
      
      <a class="social_t"><img alt="box" src="./images/social_tleft.png" /></a> 
  
      <a href="https://rss.com" id="rss"><img alt="rss" src="./images/blank.gif" width="100%" height="37px" /></a> 
      <a href="https://facebook.com" id="facebook"><img alt="facebook" src="./images/blank.gif" width="100%" height="37px" /></a> 
      <a href="https://twitter.com" id="twitter"><img alt="twitter" src="./images/blank.gif" width="100%" height="37px" /></a>  
      <a href="https://plus.google.com" id="google_plus"><img alt="google_plus" src="./images/blank.gif" width="100%" height="37px" /></a>
      <a href="https://youtube.com" id="you_tube"><img alt="you_tube" src="./images/blank.gif" width="100%" height="37px" /></a> 
    
	  <a class="social_t" ><img alt="box" src="./images/social_tright.png" /></a> 
      
      </div>
    
    </div>
    <!--********************************************* Logo end *********************************************--> 
    <!--********************************************* Main_in Start *********************************************-->
    <div id="main_in"> 
    
    <!--********************************************* Mainmenu Start *********************************************-->
    <div id="menu_wrapper">
 <!-- ********************************************Cart******************************************************** -->
	<!-- panel with buttons -->

            <div class="panel">
                <a href="#cart" id="cart_pop">Cart</a>
            </div>

         <!-- popup form #2 -->
        <a href="#x" class="overlay" id="cart"></a>
    <div class="popup">
      <div class="shopping-cart-wrapper">
        <?php  
    //كم حاجة بالعربة
    $max=0;
    if(isset($_SESSION["products"]))

      {
        $max = sizeof($_SESSION["products"]);
      }

    echo'<a class="shopping-cart" href="./cartc.php" >My Shopping Cart '.$max.'</a>';
    ?>  
      </div>

 <a class="close" href="#close"></a>
    </div>


  <!--******************************** End Cart******************************************************************** -->
<!--********************************************* Sign Start *********************************************-->
<!-- panel with buttons -->

        <!-- popup form #1 -->
        <?php
    if(isset($_SESSION['ID'])){
    echo"
     <div class='main'>
            <div class='panel'>
               <a href='#login_form' id='join_pop'>Manager</a>
                <a href='#join_form' id='join_pop'>Help</a>
            </div>

        </div>
    <a href='#x' class='overlay' id='login_form'></a>
        <div class='popup'>
    <form  method='post'  action='Logout.php' >
            <h2>Welcome Manager </h2>".$_SESSION['ID']."
      <p><center><input type='submit' value='Logout'></center></p>
      </form>
    ";
    }else{
    echo"
    <div class='main'>
            <div class='panel'>
                <a href='#login_form' id='login_pop'>Log In</a>
                <a href='#join_form' id='join_pop'>Help</a>
            </div>

        </div>
     <a href='#x'; class='overlay' id='login_form'></a>
        <div class='popup'>
    <form  method='post'  action='CheckLogin.php' >
     <h2>Welcome Manager</h2>
      <p>Please enter your login and password here</p>
          <div><label>User ID:</label><input type='text' name='UserID' placeholder='UserID'><br></div>
          <div><label>User Password:</label><input type='password' name='password' placeholder='Enter your password here..'></div>
          <p><center><input type='submit' value='Login'>
          </center></p>
          
        </form>
    ";
       if (isset ($_GET['problem']) and ($_GET['problem']=='ErrorLogin')) 
       echo "<p><center><label style='color:red;'> Login ERROR: Please check userID and/or password </label></center></p><script>alert (\" Login ERROR: Please check userID and/or password \")</script>";
          
    }
    ?>
            <a class="close" href="#close"></a>
        </div>

        <!-- popup form #2 -->
        <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <h2>Help</h2>
            <p>Rating Categories suggest age appropriateness</p>
            
<div id="content_1" class="content">
 <ul >
   <li>
    <div>
     <table>
       <tbody>
          <tr>
             <td><img style="width:300px; height:70px; padding:12px;"  src="./images/media/Games/esrb_rating_categories.png"/></td></tr>
            <tr><td><h3 style="padding:0px;">Rating Categories</h3>
                  <p style="padding:0px;">To read more about it, <a href="http://www.esrb.org/ratings/ratings_guide.jsp"><u>click Here</u></a></p></td>
          </tr>
        </tbody>
      </table>
    </div>
  </li>
 </ul>
</div>          

            <a class="close" href="#close"></a>
        </div>
  <!--********************************************* Sign End *********************************************-->
      <div id="menu_left"></div>
      <?php
    if(isset($_SESSION['ID'])){
    echo"
     <ul id='menu'>
        <li><a href='./Home.php'>Home</a></li>
        <li><a href='./shopc.php'>Shop</a></li>
        <li><a href='./contactus.php'>Contact Us</a></li>
        <li><a href='./aboutus.php'>About us</a></li>
    <li><a href='./ManagingProduct.php'>Managing Product</a></li>
      </ul>
    ";
    }else{
    echo"
    <ul id='menu'>
        <li><a href='./Home.php'>Home</a></li>
        <li><a href='./shopc.php'>Shop</a></li>
        <li><a href='./contactus.php'>Contact Us</a></li>
        <li><a href='./aboutus.php'>About us</a></li>
      </ul>
    ";    
    }
    ?>
  
<!-- ********************************Search *********************************************************************-->
<div id="search">
<form  method="post" action="search.php?go"  id="searchform">
            <input type="text" value="" placeholder="Search" name="s" class="required" id="s" />
            <input type="button" />
</form>
          </div>
<!--***************************************************** End Search******************************************************* -->
     

 <div id="menu_right"></div>
      <div class="clear"></div>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

   // Create connection
   $conn = mysql_connect($servername, $username, $password);
   mysql_select_db('Cosmos');

   $id = $_GET['id'];

   $query = mysql_query("SELECT * FROM products WHERE P_ID LIKE '$id' ") ;

   if($query === FALSE) { 
     die(mysql_error()); // TODO: better error handling
   }

   $data = mysql_fetch_array($query);

   //retreive company information
   $companyId = $data['Company_ID'];

   $query_2 = mysql_query("SELECT * FROM companies WHERE Comp_ID LIKE '$companyId'") ;

   if($query_2 === FALSE) { 
     die(mysql_error()); // TODO: better error handling
   }

   $C_data = mysql_fetch_array($query_2);


   //retrieve platform data
   $platformId = $data['Platform_id'];

  $query_3 = mysql_query("SELECT * FROM platform WHERE Platform_ID LIKE '$platformId'") ;

  if($query === FALSE) { 
    die(mysql_error()); // TODO: better error handling
  }

  $Plat_data = mysql_fetch_array($query_3);

  //retrieve sales information
$query_4 = mysql_query("SELECT DATE_FORMAT(Sale_StartDate,'%d, %M %Y') FROM sales WHERE Pro_ID LIKE '$id' AND Sale_StartDate <=NOW() AND Sale_EndDate>=NOW() ") ;
$query_5 = mysql_query("SELECT DATE_FORMAT(Sale_EndDate,'%d, %M %Y') FROM sales WHERE Pro_ID LIKE '$id' AND cast(Sale_StartDate as date)<=cast(NOW() as date) AND cast(Sale_EndDate as date)>=cast(NOW() as date)") ;
if($query === FALSE) { 
die(mysql_error()); // TODO: better error handling
}
$Sale_Start = mysql_fetch_array($query_4);
$Sale_End = mysql_fetch_array($query_5);
  
   echo '<div id="tabbed_box_1" class="tabbed_box">
	  <h4></h4>
    <div class="tabbed_area">
     
    <div id="content_1" class="content">
        	<ul >
            	 <li>';
    echo '<table ><tbody algin="center"><tr><th>';
    if ($Sale_Start>0)
{
  echo '<img src="./images/Sale.png" style="position:absolute; z-index:2;">';
}
    //display product image
    echo '<a href="'.$data['P_Image'].'" class="thumbnail" data-fancybox-group="group1" title="Description 1"><img alt=""  class="Product_img" src="./'.$data['P_Image'].'"></a></th>';

    //display product name
    echo '<td  style="text-align:left;"><h2 style="padding:0px;">'.$data['P_Name'].'</h2></tr>';

    //display product developer
    echo '<tr><td>Developers:</td><td><img class="table_images" src="'.$C_data['Developer_Img'].'"/></td></tr>';											

    //display publisher
    echo '<tr><td> Publisher:</td><td> <img class="table_images" src="'.$C_data['Publisher_Img'].'"/></td></tr>';

    //display product description
    echo '<tr><td>Description:</td><td style="text-align:left;  font-size:14px;"><p>'.$data['P_Description'].'</p>
     </td></tr>';

//<!--display release date-->

    //retrieve formated date from database
    
    $query_4 = mysql_query("SELECT DATE_FORMAT(P_ReleaseDate,'%d, %M %Y') FROM products WHERE P_ID LIKE '$id'") ;

    $relese_date = mysql_fetch_array($query_4);
    echo '<tr><td>Release Date:</td><td style="text-align:left;  font-size:14px;">'.$relese_date[0].'</td></tr>';

    //display product condition
    echo '<tr><td>Condition:</td><td style="text-align:left;  font-size:14px;"><p>'.$data['P_Condition'].'</p>
    </td></tr>';

    //display product rating
    $rating=$data['P_Rate']*5 / 100;
    $stars = $rating * 10 ; 



    echo '<tr><td>Rating:</td><td><div class=\'rating\'><span class=\'rating-static rating-'.$stars.'\'></span></br></br></div></td></tr>';


    //<!--display product rating category-->

    //available only for games (should not be displied if the product is a device
    if ($data['P_Type']=="Game")
    {
     echo '<tr><td>Rating Category:</td><td><img class="table_images" style="width:50px; height:70px; padding:12px;"  src="'.$data['Rating_Cat_Img'].'"/></td></tr>';
    }

    //<!--display compatible platforms-->
    echo '<tr><td>Compatible Platforms:</td><td><img class="table_images" src="'.$Plat_data['Platfrom_img'].'"/></tr>';
    
    //<!--display product Quantity-->
    echo '<tr><td>In stock:</td><td style="text-align:left;  font-size:14px;"><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$data['P_Quantity'].'</p></td></tr>';

    //display sale
if ($Sale_Start>0)
{
  echo '<tr><td rowspan="3"><img src="./images/sale_corner.png"></td>';

//<!--display product price-->
$price = $data['P_Price'];
$saleQuery = mysql_query("SELECT Sale_Amount FROM Sales WHERE Pro_ID LIKE '$id'") ;
$saleAmount = mysql_result($saleQuery,0);

$sale = $price * $saleAmount / 100 ;
$newPrice = $price - $sale ;

echo '<td style="text-align:left;  font-size:14px;">Sale Price:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$newPrice.'&nbsp;&nbsp;&nbsp;S.R</td></tr>'; 

}

else
{
  echo '<tr><td>Price:</td><td style="text-align:left;  font-size:14px;">'.$data['P_Price'].'&nbsp;&nbsp;&nbsp;S.R</td></tr>'; 

}

//display sale start and end date 
if ($Sale_Start>0)
{
echo '<tr><td style="text-align:left;  font-size:14px;"> Start Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; '.$Sale_Start[0].'</td></tr>';
echo '<tr><td style="text-align:left;  font-size:14px;"> End Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$Sale_End[0].'<p></p></td></tr>';
}
//add to cart button
//add to cart button by $id
    
    echo '<form method="post" action="check.php">';
    echo "<input type='hidden' name='product_code' value='".$id."'/>";
    echo '<td><input type="hidden" name="qitem" value ="1"></td>';
    echo '<tr><td colspan="2" align="center"><button type="submit">Add to cart</button></td></tr></tbody>';

    echo '<input type="hidden" name="type" value="add" />';
               
    echo"</form>";

if ($data['P_Type']=="Game")
{
            echo '<tfoot ><tr>
               <td colspan="2"><h3><a href="#slider-wrapper">You can watch the game trailer BELOW </a></h3></td>
            </tr></tfoot>';
}


echo '<div class="clear"></div>';
       
    echo '</table></div></li>
</ul>
</div>
    </div>
    <div class="clear"></div>';
    if ($data['P_Type']=="Game")
    {
      echo '<div id="da-slider" class="da-slider">
      <div id="slider-wrapper">
		  <div class="inner-wrapper">
		  <div class="video_div">';
		
      //display product video
			echo '<iframe src="'.$data['P_Video'].' ">                      
                              </iframe>
							  </div>
							</div>
		</div>
	</div>';
}
	?>	
    <!--********************************************* Banner end *********************************************-->
	
    <!--********************************************* Mainmenu end *********************************************--> 
    
    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
         <div id="row">
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
 
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    
    
    <!--********************************************* Footer start *********************************************-->
    