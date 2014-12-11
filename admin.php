<?php
require_once("/var/www/html/controllers/check_session.php");
?>
<html>
<head>

	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    <script src="functions.js" type="text/javascript"></script> 
</head>

<body>
    <div id="header">
       <div class="logo">
            <a href="homepage.php"><img src="logo.png"></a>
       </div>
       <div id="utilContainer"> 
            <div id="utilityLinks"> 
                <a href="homepage.php">Home</a>
                    | <a href="">Account</a>
                    | <a href="controllers/logout.php">Logout</a>

            </div> 
            <form id="globalSearch" action="http://www.google.com" method="get"> 
                <div id="search"> 
                    <input type="text" name="q" id="Search" value="" placeholder="search here" />
                    <input type="submit" name="s" id="s" title="Search Button" value="GO" /> 
                </div> 
            </form> 
        </div> 

    </div><!-- the end of header-->

    <!-- this is sidebar -->
    <div class = "sidebar">
        <p>this is a sidebar</p>
    </div>
    <!-- the end of sidebar -->


    <div id="tabbed_box_1" class="tabbed_box" style="width:65%;">
        <div class="tabbed_area">
        

            <ul class="tabs">
                <li><a href="javascript:tabSwitch(1, 2, 'tab_', 'content_');" id="tab_1" class="active">Database Manager</a></li>
                <li><a href="javascript:tabSwitch(2, 2, 'tab_', 'content_');" id="tab_2">Add Planner</a></li>
               
                
                
            </ul>
            
            <div id="content_1" class="content">
                
                
            </div>

            <div id="content_2" class="content">
                <form method="POST" action = "">
                    <form action="results.php" method="post">
                        Choose Search Type:<br />
                            <select name="searchtype">
                                <option value="Lname">Last name</option>
                                <option value="Fname">First name</option>
                                <option value="Email">Email</option>
                            </select><br />
                        Enter Search Term:<br />
                        <input name="searchterm" type="text"><br />
                        <input type="submit" value="Search">
                    </form>

                    <p>user_1                           
                        <select>
                            <option value = "-"></option>
                            <option value = "planner">Planner</option>
                        </select>

                    </p> 
                    <p>user_2                           
                        <select>
                            <option value = "-"></option>
                            <option value = "planner">Planner</option>
                        </select></p>
                    <p>user_3                           
                        <select>
                            <option value = "-"></option>
                            <option value = "planner">Planner</option>
                        </select></p>
                    <p>user_4                           
                        <select>
                            <option value = "-"></option>
                            <option value = "planner">Planner</option>
                        </select></p>
                    <p>
                        <input type = "submit" value = "Submit">
                    </p>
                </form>


                
            </div>


        
        </div>

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