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
            margin-top: 200px;
        }
    .table
        {
            
            color:yellowgreen;
            text-decoration-style: double;
            cursor:pointer;
            font-size: 20px;
            text-align: center;
            width: 100%;
        }
        h2
        {
            color:white;
        }
    
    </style>
<title>profile</title>
  </head>
  <body>
      <!-- navbar -->
      
    <nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container-fluid">
    <div class="navbar-header">
    <a class = "navbar-brand" href="#">Online Notes</a>
    <button type = "button" class = "navbar-toggle" data-target = "#navbarcollapse " data-toggle="collapse">
        <span class = "sr-only">Toggle navigation</span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
        <span class = "icon-bar"></span>
    </button>
    </div>
    <div class="navbar-collapse collapse" id="navbarcollapse">
        <ul class = "nav navbar-nav">
        <li class="active"><a href = "#">Profile</a></li>
        <li><a href = "#">Help</a></li>
        <li><a href = "#">Contact</a></li>
        <li ><a href = "#">My notes</a></li>
        </ul>
        <ul class = "nav navbar-nav navbar-right">
        <li><a href = "#">Hi <b>username</b></a></li>
        <li><a href = "#">Log out</a></li>
        </ul>
    </div>
    </div>  
    </nav>
      
      <!-- profile -->
      <div class = "container">
          <div class="row">
              <div class = "col-md-offset-3 col-md-6 ">
                  <h2><b>General Account Details:</b></h2>
          
                <div class = "table-responsive">
      <table class="table table-condensed table-bordered table-hover">
          <tr data-target = "#updateusername" data-toggle = "modal">
              <td><b>Username:</b></td>
              <td><b>value</b></td>
          </tr>
           <tr data-target = "#updateemail" data-toggle = "modal">
              <td><b>Email:</b></td>
              <td><b>value</b></td>
          </tr>
           <tr data-target = "#updatepassword" data-toggle = "modal">
              <td><b>Password:</b></td>
              <td><b>hidden</b></td>
          </tr>
          </table>
      </div>
              </div>
      </div>
      </div>
      
      
      
      <!--Update Email-->
      
           <form id="updateemailform" method = "post">
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="updateemail" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Please enter your new Email</strong></h4>
                </div>
                 <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name = "newemail" placeholder="Email">
                     </div>
                 <div class="modal-footer">
                  <button class="btn green">
                    Submit
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
          </div>
      </form>
      <!--Update usename-->
      
           <form id="updateusernameform" method = "post">
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="updateusername" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Please enter your new Username</strong></h4>
                </div>
                 <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name = "newusername" placeholder="Username">
                     </div>
                 <div class="modal-footer">
                  <button class="btn green">
                    Submit
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
          </div>
      </form>
              
            <!--Update password -->
      
        <form id="updatepasswordform" method = "post">
          <div class="container-fluid">
              <div class="row">
              <div class="col-xs-12">
                   <div id="updatepassword" class="modal">
          <div class="modal-dialog">
            <div class="modal-content">
                <div id="header" class="modal-header">
                <button class="close" data-dismiss="modal">&times;</button>
                    <h4><strong> Enter new password</strong></h4>
                </div>
                 <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" name = "currentpassword" placeholder="Current password">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name = "newpassword" placeholder="New password">
                     </div>
                     <div class="form-group">
                        <input type="text" class="form-control" name = "confirmnewpassword" placeholder="Confirm password">
                     </div>    
                 <div class="modal-footer">
                  <button class="btn green">
                    Submit
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
          </div>
      </form>
              
      
              
   
      
      <!-- footer -->
          <div class="footer">
                      <p>&copy All rights reserved by Sankalp</p>
          
            </div> 
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
query.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>