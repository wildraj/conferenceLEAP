<?php
require_once("/var/www/html/controllers/check_session.php");
?>
<html>
<head>

	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
</head>

<body>
    <div id="header">
       <div class="logo">
            <a href="#"><img src="logo.png"></a>
       </div>
       <div id="utilContainer"> 
            <div id="utilityLinks"> 
                <a href="#">Home</a>
                    | <a href="">Account</a>
                    | <a href="controllers/logout.php">Logout</a>

            </div> 
            <form id="globalSearch" action="http://www.google.com" method="get"> 
                <div id="search"> 
                    <input type="text" name="q" id="Search" value="" placeholder="search here" />
                    <input type="submit" name="s" id="s" title="Search Button" value="search" /> 
                </div> 
            </form> 
        </div> 

    </div><!-- the end of header-->

    <div id="tabbed_box_1" class="tabbed_box">
        <div class="tabbed_area">
        
        	<script src="functions.js" type="text/javascript"></script>	
            <ul class="tabs">
                <li><a href="javascript:tabSwitch(1, 3, 'tab_', 'content_');" id="tab_1" class="active">Topics</a></li>
                <li><a href="javascript:tabSwitch(2, 3, 'tab_', 'content_');" id="tab_2">Archives</a></li>
                <li><a href="javascript:tabSwitch(3, 3, 'tab_', 'content_');" id="tab_3">Pages</a></li>
            </ul>
            
            <div id="content_1" class="content">

                	behind door 1

            </div>
            <div id="content_2" class="content">

                	behind door 2

            </div>
            <div id="content_3" class="content">
  
                	behind door 3
 
            </div>
        
        </div>

    </div>

    <div class="regised_conference">
            <h4>Selected Conference</h4>
    </div>

    <div class="new_added_confercence">
        <h4>New Released Conference</h4>
        <button style="margin-left:50%; margin-top:200px;" type = "button">Show all Conference</button>
        
    </div>

    <div id = "footer">
        <h4>Contact Us</h4>
        <ul>
            <li>Conference Team</li>
            <li>Abilene, Texas 79601</li>
            <li>TEL: (325)-123-1234</li>
        </ul>
         <div id="copyright">Copyright &copy; 2014-2015  Conference Team.  All rights reserved.
         </div> 
        
    </div><!-- the end of footer -->


</body>
</html>