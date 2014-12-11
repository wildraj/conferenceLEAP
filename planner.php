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
        
            <script src="functions.js" type="text/javascript"></script> 
            <ul class="tabs">
                <li><a href="javascript:tabSwitch(1, 5, 'tab_', 'content_');" id="tab_1" class="active">Conference</a></li>
                <li><a href="javascript:tabSwitch(2, 5, 'tab_', 'content_');" id="tab_2">Edit User</a></li>
                <li><a href="javascript:tabSwitch(3, 5, 'tab_', 'content_');" id="tab_3">Call for paper</a></li>
                <li><a href="javascript:tabSwitch(4, 5, 'tab_', 'content_');" id="tab_4">Mailing List</a></li>
                <li><a href="javascript:tabSwitch(5, 5, 'tab_', 'content_');" id="tab_5">Create and Edit Event</a></li>
            </ul>
            
            <div id="content_1" class="content">
                <div>
                <button type = "button">Create Conference</button>
                <button type = "button">Edit Conference</button>
            </div><!-- end of creating new conference tab -->

            <!-- promote user to assistant or editor -->
            <div>
                <form>
                    <label>Title: <br>
                        <input type="text" />
                    </label><br>
                    <label>Category: <br>
                        <input type="text" />
                    </label><br>
                    <label>Start at: <br>
                        <input type="date" />
                    </label><br>
                    <label>End at: <br>
                        <input type="date" />
                    </label><br>
                    
                    <p>
                        <button type = "button">Submit</button>
                        <button type = "button">Clear</button>
                    </p>
                </form>


            </div>
            </div>
             <!-- promote user to assistant or editor -->
            <div id="content_2" class="content">
                <form method = "POST" action = "">
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

                    <p>user_1 firstname, lastname, email
                        <select>
                            <option></option>
                            <option value = "assi">Assi.</option>
                            <option value = "editor">Editor</option>
                            <option value = "reviewer">Reviewer</option>
                            <option value = "speaker">Speaker</option>
                        </select>

                    </p> 
                    <p>user_2 firstname, lastname, email
                        <select>
                            <option></option>
                            <option value = "assi">Assi.</option>
                            <option value = "editor">Editor</option>
                            <option value = "reviewer">Reviewer</option>
                            <option value = "speaker">Speaker</option>
                        </select></p>
                    <p>user_3 firstname, lastname, email
                        <select>
                            <option></option>
                            <option value = "assi">Assi.</option>
                            <option value = "editor">Editor</option>
                            <option value = "reviewer">Reviewer</option>
                            <option value = "speaker">Speaker</option>
                        </select></p>
                    <p>user_4 firstname, lastname, email
                        <select>
                            <option></option>
                            <option value = "assi">Assi.</option>
                            <option value = "editor">Editor</option>
                            <option value = "reviewer">Reviewer</option>
                            <option value = "speaker">Speaker</option>
                        </select></p>
                    <p>
                        <input type = "submit" value = "Submit">
                    </p>
                </form>


                    

            </div><!-- end of promoting user to assistant or editor -->

            <div id="content_3" class="content">
                <ul>
                    
                </ul>
            </div>
            <div id="content_4" class="content">
                <ul>
                    
                </ul>
            </div>
        
            <!--create and edit an event-->
            <div id="content_5" class="content">
                <form method = "POST" action = "">
                    <label>event name
                        <input type = "text" >
                    </label>
                    <p>
                        <input type = "submit" value = "Submit">
                        <input type = "reset" value = "Clear">
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