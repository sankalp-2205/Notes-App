//<?php
session_start();
include ('connection.php');
//echo ($_COOKIE['remember_me'];
include('logout.php');
include('remember_me.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible"
content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1">
<title>Notes App</title>
<link href="css/bootstrap.min.css"
rel="stylesheet">
<link rel="stylesheet" href="mystyling.css" />
<title>Notes App</title>
  </head>
  <body>
      <!-- navbar -->
    <nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class = "navbar-brand" href="#">Online Notes</a>
    <button type = "button" class = "navbar-toggle" data-target = "#navbarcollapse " data-toggle="collapse">
        <span class = "sr-only">Toggle navigation</span>
        <span class = "icon-bar">1</span>
        <span class = "icon-bar">2</span>
        <span class = "icon-bar">3</span>
    </button>
    </div>
    <div class="navbar-collapse collapse" id="navbarcollapse">
        <ul class = "nav navbar-nav">
        <li class="active"><a href = "#">Home</a></li>
        <li><a href = "#">Help</a></li>
        <li><a href = "#">Contact</a></li>
        </ul>
        <ul class = "nav navbar-nav navbar-right">
        <li><a href = "#login" data-toggle = "modal">Login</a></li>
        </ul>
    </div>
    </div>  
    </nav>
      <!--Sign up form -->
      <form id="signupform" method = "post">
        
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="signup" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Sign up for free</strong></h4>
                </div>
                 <div class="modal-body">
                     <div id = "signupmessage"></div>
                    <div class="form-group">
                        <label for="username"><strong>Username:</strong></label>
                        <input type="text" class="form-control" name = "username" placeholder="username">
                     </div>
                     <div class="form-group">
                        <label for="email"><strong>Email:</strong></label>
                        <input type="text" class="form-control" name = "email" placeholder="email">
                     
                     </div>
                     <div class="form-group">
                        <label for="password"><strong>Password:</strong></label>
                        <input type="password" class="form-control" name = "password" placeholder="password">
                     
                     </div>
                     <div class="form-group">
                        <label for="password2"><strong>Confirm password:</strong></label>
                        <input type="password" class="form-control" name = "password2" placeholder="confirm password">
                     
                     </div>
                </div>
                 <div class="modal-footer">
                  <button class="btn green">
                    Sign-Up
                    </button>
                    <button class="btn btn-default" data-dismiss="modal">
                    Cancel
                    </button>
                </div>
              </div>      
        </div>
          </div>
                  
                  </div>
              </div>
         
        </div>
      
      </form>  
      <!--Login form -->
      
      <form id="loginform" method = "post">
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="login" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Login:</strong></h4>
                </div>
                 <div class="modal-body">
                     <div id = "loginmessage"></div>
                    <div class="form-group">
                        <input type="text" class="form-control" name = "loginusername" placeholder="username">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name = "loginpassword" placeholder="password">
                     </div>
                     <div class="checkbox">
                           <div>
                        <label>
                        <input type = "checkbox" id = "rememberme" name="rememberme">
                            Remember Me
                               
                        </label>
                            <a href= "#forgotpassword" class="pull-right" data-dismiss = "modal" data-toggle = "modal">Forgot Password?</a>
                        </div>
                         </div>
                   
                 <div class="modal-footer">
                  <button class="btn green">
                    Login
                    </button>
                    <button class="btn btn-default" data-dismiss="modal">
                    Cancel
                    </button>
                     <button class="btn btn-default pull-left" data-dismiss="modal" data-target= "#signup" data-toggle ="modal" >
                    Register
                    </button>
                </div>
              </div>      
        </div>
          </div>          
                  </div>
              </div>
        </div>
          </div>
      </form>
              
            <!--Forgot Password -->
      
        <form id="pass" method = "post">
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="forgotpassword" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Please Enter your registered Email</strong></h4>
                </div>
                 <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name = "forgotemail" placeholder="Email">
                     </div>
                   
                 <div class="modal-footer">
                  <button class="btn green">
                    Submit
                    </button>
                    <button class="btn btn-default" data-dismiss="modal">
                    Cancel
                    </button>
                     <button class="btn btn-default pull-left" data-dismiss="modal" data-target= "#signup" data-toggle ="modal" >
                    Register
                    </button>
                </div>
              </div>      
        </div>
          </div>          
                  </div>
              </div>
        </div>
          </div>
      </form>
              
      <!--Jumbotron -->
              <div class="row">
                  <div class="col-sm-12">
            <div class="jumbotron">
                <h1>Online Notes App</h1>
                <p>Your notes with you anywhere you go</p>
                <p>Easy to use. Protect all your data </p>
                <button type="button" class="button btn-lg green spacing" data-target="#signup" data-toggle="modal">Sign-up. It's free</button> 
          </div>
                      
                      
                      </div>
      </div>
              
   
      
      
          <div class="footer">
                      <p>&copy All rights reserved by Sankalp</p>
          
            </div>    
<a style="background-color:black;color:white;text-decoration:none;padding:4px 6px;font-family:-apple-system, BlinkMacSystemFont, &quot;San Francisco&quot;, &quot;Helvetica Neue&quot;, Helvetica, Ubuntu, Roboto, Noto, &quot;Segoe UI&quot;, Arial, sans-serif;font-size:12px;font-weight:bold;line-height:1.2;display:inline-block;border-radius:3px" href="https://unsplash.com/@steve_j?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge" target="_blank" rel="noopener noreferrer" title="Steve Johnson"><span style="display:inline-block;padding:2px 3px"><svg xmlns="http://www.w3.org/2000/svg" style="height:12px;width:auto;position:relative;vertical-align:middle;top:-2px;fill:white" viewBox="0 0 32 32"><title>unsplash-logo</title><path d="M10 9V0h12v9H10zm12 5h10v18H0V14h10v9h12v-9z"></path></svg></span><span style="display:inline-block;padding:2px 3px">Steve Johnson</span></a>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js"></script>
<script src="js/bootstrap.min.js"></script>
      
      
<script>
        // js code for sign up ajax 
    $("#signupform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    $.ajax({
        url: "sign-up.php",
        type: "POST",
        data: datatopost,
        success: function(data){
            if(data)
                {
                    $("#signupmessage").html(data);
                }
        },
        error: function(){
            $("#signupmessage").html("<div class = 'alert alert-danger'>Issue with ajax call.Plz try later </div>");
        }
    });
});
    
            // js code for login ajax 
          $("#loginform").submit(function(event){
    event.preventDefault();
    var datatopost = $(this).serializeArray();
    $.ajax({
        url: "login.php",
        type: "POST",
        data: datatopost,
        success: function(data){
                    if(data == "success")
                        {
                            window.location = "workspace.php";
                        }
                    else
                        {
                            $("#loginmessage").html(data);
                        }
        },
        error: function(){
            $("#loginmessage").html("<div class = 'alert alert-danger'>Issue with ajax call.Plz try later </div>");
        }
    });
});
      </script>
</body>
</html>