<?php

include_once("conn.php");
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Cosmos</title>
<link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css" />

<!-- Included CSS Files -->
<link rel="stylesheet" href="stylesheets/main.css" />
<link rel="stylesheet" href="stylesheets/paralax_slider.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/login_pop.css" />
<link rel="stylesheet" href="stylesheets/contactus.css" />
<link rel="stylesheet" href="stylesheets/style.css" />
<link rel="stylesheet" href="stylesheets/cartstyle.css" />

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
<!--****************************** help and login Start *********************************************-->
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
		<form  method='post'	action='Logout.php' >
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
		<form  method='post'	action='CheckLogin.php' >
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

            <a class="close" href="#close"></a>

        </div> 
        

        <!-- popup form #2 -->
       <a href="#x" class="overlay" id="join_form"></a>
        <div class="popup">
            <h2>Help</h2>
           
<div id="content_1" class="content">
 <ul >
   <li>
    <div>
     <table>
      <tbody algin="center">
           <tr>
              <td style="text-align:left;  font-size:14px;"> 
                <details>
                  <summary>Are prices the same online as in-store?</summary>
                   <p> Our prices may differ from instore to online.</p>
                   <p>Instore and online products are subject to different variables and offers however we do endeavour to keep them as close together in price as possible. We aim to provide the cheapest possible price for your gaming products and unfortunately on occasion this means the item is cheaper through one of these purchase channels than the other.</p>
                  <p> Please note: we cannot price match to instore or online prices on occasions where they differ.</p>
               </details>
             </td>
            </tr>
      </tbody>
    </table>
  </div>
</li>
    
<li>
    <div>
     <table>
      <tbody algin="center">
           <tr>
              <td style="text-align:left;  font-size:14px;"> 
                <details>
                  <summary>How can I report an issue I am experiencing with your website.</summary>
                   <p> If you are experiencing a technical issue with our website, please email us with a description of the issue and any information which may help us such as any error codes.</p>
               </details>
             </td>
            </tr>
      </tbody>
    </table>
  </div>
</li>

<li>
    <div>
      <p>Can't find an answer to your question? </p>
      <p>Just fill out our quick and easy contact form and we'll get back to you shortly.</p><a href="contactus.php"><u>Here</u></a>

</ul>
</div>

            <a class="close" href="#close"></a>
        </div>
  <!--********************************************* help End *********************************************-->
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
    </div>
    
    <!--********************************************* Mainmenu end *********************************************--> 
    
    <!--********************************************* Banner start *********************************************-->
   <?php
	include_once("simple-fade-slideshow.source.html");
	?>
    
    <!--********************************************* Banner end *********************************************-->
    
