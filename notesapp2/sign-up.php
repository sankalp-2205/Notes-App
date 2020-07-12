<?php
    session_start();
    include('connection.php');
    $nousername ="<p><strong>Enter the username</strong></p>";
    $usernamealreadyexist = "<p><strong>Username already taken</strong></p>";
    $noemail = "<p><strong>Enter the email </strong></p>";
    $invalidemail= "<p><strong><strong>Please enter a valid email </strong></p>";
    $emailalreadyexist = "<p><strong>Account already exists with this email id</strong></p>";
    $nopassword = "<p><strong>Enter the password</strong></p>";
    $nopassword2 = "<p><strong>Fill the confirm password field </strong></p>";
    $invalidpassword = "<p><strong>Password Invalid: Should have atleast 6 charecters,atleast 1 captial letter and atleast 1 digit</strong></p>";
    $passworddidnotmatch = "<p><strong>Passwords did not match</strong></p>";

    //error checks

    if(empty($_POST["username"]))
    {
        $errors.= $nousername;
    }
       if(empty($_POST["email"]))
    {
        $errors .= $noemail;
    }
        else
        {
            $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $errors .= $invalidemail;
            }
        }
        if(empty($_POST["password"]))
        {
            $errors .= $nopassword;
        }
    elseif(!(strlen($_POST["password"])>6 and preg_match('/[A-Z]/',$_POST["password"]) and preg_match('/[0-9]/',$_POST["password"])))
    {
        $errors .= $invalidpassword;
    }
    else
    {
        if(empty($_POST["password2"]))
        {
            $errors .= $nopassword2;
        }
            elseif($_POST["password"] !== $_POST["password2"])
             {
                 $errors .= $passworddidnotmatch;
             }
        }
    $username = $_POST["username"];
    $password = $_POST["password"];
    if($errors)
    {
        $message = "<div class='alert alert-danger'>" .$errors. "</div>"; 
        echo $message;
    }

        // no errors found
        else
        {
       $username = $link ->real_escape_string($username); 
        $password = $link ->real_escape_string($password);
        $password = md5($password);
        $email = $link ->real_escape_string($email);
            
            // verifying existing username
        $sql = "SELECT * FROM users WHERE username = '$username'";
        if($result = $link ->query($sql))
        {
            if($result->num_rows > 0)
            {
                echo "<div class = 'alert alert-danger'>The username already exist</div>";
            exit;
            }
        }
        else
        {
            echo "<div class = 'alert alert-danger'>Unable to run username query</div>";
        }
            
            // verifying existing email
            
        $sql = "SELECT * FROM users WHERE email = '$email'";
         if($result = $link ->query($sql))
        {
            if($result->num_rows > 0)
            {
                echo "<div class = 'alert alert-danger'>The email is already registered</div>";
            exit;
            }
        }
        else
        {
            echo "<div class = 'alert alert-danger'>Unable to run email query</div>";
        }
            
            //activation code
            
            $activation_code = bin2hex(openssl_random_pseudo_bytes(16));
            $sql = "INSERT INTO users (username, email, password, activation ) VALUES ('$username','$email', '$password', '$activation_code')";
            if($link->query($sql))
            {
                //sending mail 
                
                $message = "<p>Click on the link below to register your account on the online notes app</p>";
                $message .= "http://websh.offyoucode.co.uk/notes%20app/activation.php?email=".urlencode($email). "&key=$activation_code";
                $header = "Content-type : text/html;";
                
                    $sent_mail = mail($email, "Confirm your registration", $message, $header);
                     if($sent_mail)
                    {
                        echo "<div class = 'alert alert-success'>Click on the link sent to your email address to register your account</div>";
                    }
                    else
                    {
                        echo "<div class = 'alert alert-danger'>Unable to register right now. Please try later</div>";
                    }
                
            }
            else{
                echo "<div class = 'alert alert-danger'>Unable to run mail sending query</div>";
                    
            }
    
        }
    
?>
     