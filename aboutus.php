<?php require 'header.php';?>
    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
         <div id="row">
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
          
<header id="header" class="info">
	<h2>About us</h2>
	
</header>

            <div style="text-align: justify; padding:10px; font-size: 14px; font-family: 'Oswald', Helvetica, Arial, sans-serif; color:ghostwhite">
                <ul><li><p>
                        Founded in 2014 Cosmos has been serving retail and wholesale customers with all their video game
                        needs.We pride ourselves on having one of the best selections and competitive prices
                        of any online video game retailer.You'll not only find the latest and greatest video games for sale here
                        but also video game consoles and a nice collection of accessories. We also carry exclusive games and items
                        that you'll only find at VGP. Through our last year in market we have made a great relationships with all 
                        the top manufacturers. This allows us to re-publish rare hard to find games. We truly are the HOME FOR THE
                            HARDCORE GAMER! </p>
                        <p >We look forward to serving you and if you have any questions or concerns please 
                            <a href="contactus.php" style="color:#0066cc">contact us</a>. 
                        
                    </p></li></ul></div>
          
          
          <div class="clear"></div>
          </div>
        <!-- Left wrapper end --> 
   <!-- Right wrapper Start -->
            <div id="right_wrapper">
 
<div class="review">
            <div class="header">TOP GAMES</div>
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
                  <small> $date  | Rate  :$rate %</small><br>";
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
