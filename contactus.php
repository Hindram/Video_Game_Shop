<?php require 'header.php';?>
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
<!--include jQuery -->

<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>

<script type="text/javascript">

	$().ready(function()
	{
		$("#contactus").validate({
		 errorPlacement: function(error, element) { 
         error.insertBefore(element); 
         },
			rules:
			{
				Name:
				{
					required: true,
					lettersonly: true,
					maxlength: 20
				},
				EMail:
				{
					required: true,
					email: true
				},
				Subject:
				{
					maxlength: 50
				},
				list:
				{
					required: true
				},
				Message:
				{
					required: true,
					maxlength: 300
				}
			},
			messages:
			{
				Name:
				{
					required: "Please enter your name here.",
					maxlength: "20 chars Maximum for name feild."
				},
				EMail:
				{
					required: "Please enter your email address."+
					"This is required for sending alert about your account",
					email: "Please enter a valid email address"
				},
				Subject:
				{
					maxlength: "50 chars Maximum for name feild."
				},
				list:
				{
					required: "Please choose your job."
				},
				Message:
				{
					required: "Please enter your message here.",
					maxlength: "300 chars Maximum for message feild."
				}	
			}
		});
	});
</script>

</head>

<body>

    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
         <div id="row">
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
        <form   autocomplete="off" method="post" 
      action="mailto:hind69@hotmail.com" id="contactus" onsubmit="return(validate());">
  
<header id="header" class="info">
	<h2>Email us</h2>
	
</header>

<ul >	
<li>
	<p><label style="color:#63BAE2;">Name <span> *</span></label>
	<span> <input  type="text" name="Name" /></span></p>
</li>
<li>
	<p><label style="color:#63BAE2;">Email<span> *</span></label>
	<div><input type="email" name="EMail" placeholder="xxxx@xxx.com" />
	</div></p>
	</li>
<li>
	<p><label style="color:#63BAE2;">Job <span> *</span></label>
	<div>
		<select name="list" >
		<option value="">Choose your Job</option>
<option value="Others">Others</option>
<option value="Doctor" >Doctor</option>
<option value="Engineer" >Engineer</option>
<option value="Teacher" >Teacher</option>
<option value="Worker" >Worker</option>
		</select>
	</div></p>
</li>

<li>
	<p><label style="color:#63BAE2;">Subject</label>
	<div><input type="text" name="Subject" />
			</div></p>
</li>

<li >

	<p><label style="color:#63BAE2;">Message<span> *</span>
			</label>

	<div><textarea 
			name="Message"
			spellcheck="true"
			rows="10" cols="50"
			placeholder="write your comment here..."></textarea>

			</div></p>
	
	</li>

	
	<li>
		<div><input type="hidden" name="currentPage" value=" "/>
			<p><input name="submit" type="submit" value="Submit" /><br><input name="clear" type="reset" value="Clear" /></p>
					</div>
	</li>	
	</ul>
</form>
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
   <!-- Right wrapper Start -->
            <div id="right_wrapper">
<!--**********************************TOP GAMES**********************************-->
<div class="review">
            <div class="header"><a>TOP GAMES</a></div>
            <ul>
              
                 <?php
      //---------------------- Products Info ------------------------//   
      $sqlimage  = "select P_ID,P_Image,P_Name,P_Rate,P_ReleaseDate, max(P_Rate) as c from Products where P_Type='Game' group by P_Rate order by c desc limit 5";

            $imageresult1 = $conn->query($sqlimage);
            if($imageresult1->num_rows > 0) 
           { 
             while($rows=$imageresult1->fetch_assoc())
             {
                $id = $rows['P_ID'];
                $image = $rows['P_Image'];
                $name = $rows['P_Name'];
                $rate = $rows['P_Rate']; 
                $date = $rows['P_ReleaseDate'];

                $rating = ( $rate * 5 ) / 100 ;
                $stars = $rating * 10 ; 

             echo "<li>"; 
             echo "<div class=\"img\">";
             echo "<a href='./product_details.php?id=".$id."'>";
             echo "<img style=\"width:60px;\" src= '$image '/>";
             echo "</a>";
             echo "</div>";
             echo "<div class=\"info\"> <a href='./product_details.php?id=".$id."'> $name </a><br/>
                  <small> $date  | Rate  :$rate </small><br>";
             echo "<span class=\"rating-static rating-".$stars."\"></span> </div>";
             echo "</li>"; 
            } }?>  
            </ul>
          </div>			
        
        
      	          <div class="clear"></div>
               </div>
           </div>
       </div>
    
    <div class="bottom_shadow"></div>
  
    <!--********************************************* Main end *********************************************--> 
    
    <?php require 'footer.php';?>