<?php require 'header.php';

if(!isset($_SESSION['ID'])){
    echo "<p style='color: white; font-size: 16px;'> &nbsp;&nbsp;&nbsp; Your are not authurizied to access this page please login first</p>";
            exit;
}
?>
    <div class="top_shadow"></div>
    
    <!--********************************************* Main start *********************************************-->
       <div id="main_news_wrapper" >
         <div id="row">
           
    <!-- Left wrapper Start -->
        <div id="left_wrapper">
      
          <div id="tabbed_box_1" class="tabbed_box">
	<h4>Managing Products  <small>Select an action  </small></h4>

<!--************************************************1st Tab:"View ( Delete/Update )"*************************************************-->    
        <div>
        	<ul class="tabs">
           
            <li><a name="tab" id="tab_1" href="javascript:void(0)" onClick="tabs(1)" class="active">Actions</a></li>
        </ul>

           <div name="tab_content" id="content_1" class="content">
        	<ul>
            	<li><a href="viewAll.php">View All</a></li>
            	<li><a href="insert.php">Add New</a></li>
            	<li><a href="update.php">Search (Update/Delete)</a></li>
            	
			</ul>
        </div>	 
    

</div>


          
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