<?php
session_start();
if(!array_key_exists("user_id",$_SESSION))
{
    header("location:index.php");
}

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
<style>
    .container
    {
        margin-top: 100px;
    }
    
    #addnotes , #done
    {
        display: none;
    }
    textarea
    {
        width: 100%;
        margin-top: 20px;
        line-height: 1.5em;
        border-left-width: 20px;
        padding: 20px;
        color: white;
        text-decoration-style: solid;
        text-emphasis-style: filled;
        font-size: 20px;
        max-width: 100%;
        opacity: 50%;
        background-color: black;
        border-color: grey;
        display:none;
    }
    #allnotes, #edit
    {
        background-color: black;
        opacity: 80%;
        color: white;
    }
     #edit:hover
    {
        background-color: black;
        opacity: 100%;
        color: white;
    }
     #allnotes:hover
    {
        background-color: black;
        opacity: 100%;
        color: white;
    }
    
</style>
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
        <li ><a href = "#">Profile</a></li>
        <li><a href = "#">Help</a></li>
        <li><a href = "#">Contact</a></li>
        <li class="active"><a href = "#">My notes</a></li>
        </ul>
        <ul class = "nav navbar-nav navbar-right">
        <li><a href = "#">Hi <b>username</b></a></li>
        <li><a href = "index.php?logout=1">Log out</a></li>
        </ul>
    </div>
    </div>  
    </nav>
      
      <!--Workarea -->
      <div class= "container" col-md-offset-2 col-md-10>
      <div class = "button">
          <button type= "button" id = "allnotes" class="btn btn-lg"><strong>All notes</strong></button>
          <button type= "button" id = "addnotes" class="btn btn-lg"><strong>Add notes</strong></button>
          <button type= "button" id= "edit" class="btn btn-lg pull-right"><strong>Edit</strong></button>
          <button type= "button" id="done" class="btn btn-lg pull-right green"><strong>Done</strong></button>
          
          </div>
          <div class= "textarea">
          <textarea rows="10">
              
              </textarea>  
          </div> 
      </div> 
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
                        <label for="password"><strong>Confirm password:</strong></label>
                        <input type="password" class="form-control" name = "password" placeholder="confirm password">
                     
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
                    <div class="form-group">
                        <input type="text" class="form-control" name = "loginusername" placeholder="username">
                     </div>
                     <div class="form-group">
                        <input type="password" class="form-control" name = "loginpassword" placeholder="password">
                     </div>
                     <div class="checkbox">
                           <div>
                        <label>
                        <input type = "checkbox" id = "checkbox" name="checkbox">
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
              
    
              
   
      
      
          <div class="footer">
                      <p>&copy All rights reserved by Sankalp</p>
          
            </div> 
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>