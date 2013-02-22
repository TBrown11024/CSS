<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width" />
	<title>CSS Test Site</title>
		<link type="text/css" rel="stylesheet" href="site.css" />
        <script type="text/javascript" src="landing.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	</head>

	<body>
	<div id="globalContainer">                	
      <div id="headerAnimate">
        <div id="headerLogo">
              
              	Name Here <span>(Alpha Build)</span>
                
        </div>
        <div id="headerSearch">
        
        	<input id="userSearch" name="userStatusInput" type="text" value="" maxlength="500" />
            <input name="userSearch_Confirm" class="buttonStandard" type="button" id="userStatusInput_Confirm" value="Search" />
        
        </div>       
      </div>
              
          <div id="content">          
          	  <div id="ads">
			  
					Ads Go Here
			  
			  </div>          
          	  <div id="sideBar">              
                  <div id="userHandler" class="userData">                  
                      <div id="userAvatar">
                      
                      		<!--find a way to use php to grab a custom user avatar-->
                          <img src="http://www.zwaldtransport.com/images/placeholders/placeholder1.jpg" height= 80px width= 80px />
            
                      </div>                      
                      <div id="userName">                      
                      		<?php
							
								echo $_GET["fname"] . " " . $_GET["lname"];
							
							?>                      
                      </div>                                            
                  	  <div id="notificationContainer">
                      	  <input name="userFeedNotification" type="button" class="buttonNotify" id="userFeedNotification" value="Feed" />
                      	  <input name="userFriendNotification" type="button" class="buttonNotify" id="userFriendNotification" value="Friend" />
                          <input name="userMessageNotification" type="button" class="buttonNotify" id="userMessageNotification" value="IM" />
                      </div>                  
                  </div>              
              </div>              
              <div id="userUpdate">
                    <input id="userStatusInput" name="userStatusInput" type="text" value="What's up, <?php echo $_GET["fname"]; ?>?" maxlength="500" onclick="if(this.value=='What's up, <?php echo $_GET["fname"]; ?>?') this.value='';"/>
                    <input name="userStatusInput_Confirm" class="buttonStandard" type="button" id="userStatusInput_Confirm" value="Post" />
              </div>          
          	  <div id="feed">              
                <div id="story">    
    				<div id="userAvatar">
        
        				<img src="http://www.zwaldtransport.com/images/placeholders/placeholder1.jpg" height= 80px width= 80px />
        
        			</div>        
       		 		<div id="storyUserName">
            
            			<!--put PHP code in here to grab userName from URL -->
						userName
                      
        			</div>    
    			</div>                                                  
              </div>
			              
              <div id="footer">
		  
				 © Troy Brown 2013
				 
		  	  </div>
			  
		  </div>			  
    </div>
</body>
    
</html>