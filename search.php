 <?php require 'header.php';?>
    <div class="top_shadow"></div>
    
   
    
    <!--********************************************* Main start *********************************************-->
     <div id="main_news_wrapper">
         <div id="row">
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
        
<div id="content_1" class="content">
<ul >
 <li><h1><u>Search Results:</u></h1>
 </li></ul>

<?php
  if(isset($_POST['s'])){
  if(isset($_GET['go'])){
  if(preg_match("/^[  a-zA-Z]+/", $_POST['s'])){
  $name=$_POST['s'];
  //connect  to the database
$db=mysql_connect( "localhost",
            "root", "" ) or die ('I cannot connect to the database  because: ' . mysql_error());
  //select  the database to use
  $mydb=mysql_select_db("cosmos");
 
  //query  the database table
  $sql="SELECT  *  FROM products WHERE P_Name  LIKE '%" . $name ."%'";
  //-run  the query against the mysql query function
 $result=mysql_query($sql) or die($sql."<br/><br/>".mysql_error());
  //check if the result avaliable or not
    $anymatches=mysql_num_rows($result); 
         if ($anymatches == 0)  {  
             echo "<h2>No result: </h2><ol >
 <li><h4>Sorry, but we can not find an entry to match your query</h4>
 </li></ol><br><br>";  }      
  else{           
  while($row=mysql_fetch_array($result)){
          $First =$row['P_Name'];
          $des=$row['P_Description'];
          $img=$row['P_Image'];
          $ID=$row['P_ID'];
  //display the result of the array
  echo "<u><ul>\n";
  echo "<li>" . "<a  href=\"./product_details.php?id=$ID\">"   .$First . "</a></li>\n";
  echo "</ul></u>";
  echo "<ol><li><p><img src='$img' width='150' height='150'/ ></p></li></ol>";
  echo  "<strong><ol><li> '$des' </li></ol></strong>";

 echo "<br\>";

 
         }
  
    }
  
  }
  //check if the search field is empty
  elseif(empty($_POST['s'])){

  echo  "<ul >
 <li><h4>Please enter a search query!</h4>
 </li></ul>";
  }
  //if the search begain with a num
  else  {

   echo  "<ul >
 <li><h4>Your search must begain with a letter! Please try again!</h4>
 </li></ul>";
}
  
  }
  }
?>
					</div>
	
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
    
    
    <!--********************************************* Footer start *********************************************-->
   <?php require 'footer.php';?>