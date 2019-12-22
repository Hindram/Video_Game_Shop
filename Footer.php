<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
 
    <!--********************************************* Footer start *********************************************-->
     <div id="footer">
    <div class="row">
      <div class="footer_widget">
        <div class="header"><a>OUR LOCATION</a><br><br>
<p>Saudi Arabia - Dhahran : Mall of Dhahran</p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.6383365212378!2d50.169394999999994!3d26.305822000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49e63119f3a225%3A0x54a2462cf4dc82db!2sMall+of+Dhahran!5e0!3m2!1sen!2ssa!4v1430499027540" width="600" height="450" frameborder="0" style="border:0"></iframe>

</div></div>
      <div class="divider_footer"></div>
      <div id="latest_media">
        <div class="header"><a>GAMES PHOTO ALBUM</a></div>
        <div class="body">
          <ul id="l_media_list">
                         <?php
          include_once("conn.php");
      //---------------------- GAMES PHOTO ALBUM ------------------------//   
      $sqlimage  = "select P_Image from Products where P_Type='Game' limit 10";

            $imageresult1 = $conn->query($sqlimage);
      if($imageresult1->num_rows > 0) 
      {
       while($rows=$imageresult1->fetch_assoc())
       {
        echo "<li >";

           $image = $rows['P_Image'];

           echo "<a  href='$image'> ";
          echo "<img src='$image' />";
           echo "</a>";
           echo "</li>";
       }}
       else{
         echo "NONE";
       } 

       ?>
          </ul>
        </div>
      </div>
      <div class="clear"></div>

    <!--********************************************* Footer end *********************************************--> 
    <div class="clear"></div>
  </div>
</div>
  <div id="footer"><h3>&copy; Copyright 2015 | Cosmos.com</h3>
    <a id="cop_text" href="#"> Return to Top </a> 
    </div>
  <!--********************************************* Main_in end *********************************************--> 
   
  </div>
</div>
<!--********************************************* Main wrapper end *********************************************--> 

</body>
</html>
    