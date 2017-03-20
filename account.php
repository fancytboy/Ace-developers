<?php require "include/function.php"; ?>
<?php require "include/global.php"; ?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="Assets/nivo-slider/nivo-slider.css" />
        <link rel="stylesheet" type="text/css" href="Assets/nivo-slider/themes/default/default.css" />
        <script type="text/javascript" src="Assets/nivo-slider/jquery.js"></script>
        <script type="text/javascript" src="Assets/nivo-slider/jquery.nivo.slider.js"></script>
        <style>
            body{margin:0; padding:0; top:0; bottom:0; font-family:candara;}
            a{text-decoration:none;}
            fieldset{width:93%; border: 1px solid transparent; border-top: 1px solid #ccc;}
            label{font-size:12px; color:#626669;}
            .container{margin:5%; margin-left: 10%; width:80%; height:600px;}
            .signup{border:1px solid #ccc; width:40%; height: 600px; box-shadow:0px 4px 8px 0px #ccc;}
            .signup h3{margin-left: 20px; color: #626669;}
            .signup h4{text-align:center; color: #626669;}
            .signup img{width:100%; height: 50px;}
            input[type='radio']{margin-left:10px; font-size:12px;}
            input[type='text']{width:43%; height: 35px; margin-bottom: 10px; margin-left:7px; padding-left:10px; font-size:12px;}
            input[type='email'],input[type='password'],input[type='tel']{width:95%; height:35px; margin:7px; padding-left:10px; font-size:12px;}
            input[type='text']:focus{border: 2px solid #ccc; box-shadow:0px 4px 8px 0px #ccc;}
            input[type='text']:focus{width:43%; height:35px; margin-bottom: 10px; margin-left:7px; padding-left:10px; font-size:12px;}
            input[type='email']:focus, input[type='password']:focus, input[type='tel']:focus{border: 2px solid #ccc; box-shadow:0px 4px 8px 0px #ccc;}
            .signbtn{margin-left:15px; background-color: #335C88;width:90%;height:40px; color:#fff; font-size:16px; border: none;}
            .signbtn:hover{background-color:#fff; border:1px solid  #335C88; color: #335C88; transition:0.5s}
            .split{height:500px; margin-top:13%; margin-left:80px;}
            .login{border:1px solid #ccc; width:35%; height: 500px; box-shadow:0px 4px 8px 0px #ccc;}
            .login h3{margin-left: 20px; color: #626669;}
            .login h4{text-align:center; color: #626669; font-size:12px;}
            .login input[type="text"]:focus, input[type="password"]:focus{border: 2px solid #ccc; box-shadow:0px 4px 8px 0px #ccc;}
            .login p{text-align:center; color: #626669; font-size:12px;}
            .login p a{color: #626669; text-decoration:underline;}
            .login p a:hover{font-size: 16px;}
            .login img{width:100%; height: 50px;}
            .loginbtn{margin-left:100px; background-color: #335C88;width:50%;height:40px; color:#fff; font-size:16px; border: none;}
            .loginbtn:hover{background-color:#fff; border:1px solid  #335C88; color: #335C88; transition:0.5s;}
        </style>
    </head>
    <body> 
        <div class="container">
            <div class="signup" style="float:left;">
                <h3>Sign Up</h3>
                <h4>Not yet a member, create an account</h4>
<!--
                <img src="Assets/img/icons/fb.png"> 
                <img src="Assets/img/icons/google.png"> 
-->
                <form method="post">
                    <fieldset>
                        <legend style="text-align:center;margin-left:45%; color:#626669;">OR</legend>
                        <input type="radio" name="ini" value="Mr"><label>Mr</label>
                        <input type="radio" name="ini" value="Miss"><label>Miss</label>
                        <input type="radio" name="ini" value="Mrs"><label>Mrs</label><br /><br />
                        <input type="text" name="fname" placeholder="First Name" style="margin-left:7px;" required>
                        <input type="text" name="lname" placeholder="Last Name" required><br />
                        <input type="email" name="email" placeholder="Email Address" required><br />
                        <input type="tel" name="p_no" placeholder="Phone Number" required><br />
                        <input type="password" placeholder="Password" name="password" required><br />
                        <input type="password" placeholder="Confirm Password" name="re_password" required><br /><br />
                        <input type="submit" value="Sign Up" class="signbtn" name="submit">
						<?php
							if(isset($_POST['email']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['p_no']) && isset($_POST['password']) && isset($_REQUEST['submit'])){
								$ini = $_POST['ini'];
								$fname = mysqli_real_escape_string($conn , htmlentities($_POST['fname']));
								$lname = mysqli_real_escape_string($conn , htmlentities($_POST['lname']));
								$phone = mysqli_real_escape_string($conn , htmlentities($_POST['p_no']));
								$email = mysqli_real_escape_string($conn , htmlentities($_POST['email']));
								$pass = mysqli_real_escape_string($conn , $_POST['password']);
								$data = array($ini , $fname , $lname , $email , $phone , $pass);
								$finally = _REG($data);
								if($finally === true){
									echo "<script>alert('REGIS SUCESS')</script>";
								}else{
									echo '<script>alert("An error as Occurred! '. $finally .' ")</script>';
								}
							}
						?>
<!--                        <h4>Already a member? Then Login in the next section</h4>-->
                    </fieldset>
                </form>
            </div>
            <img src="Assets/img/icons/split.jpg" class="split">
            <div class="login" style="float:right;">
                <h3>Log In</h3>
                <h4>Already a member, login</h4>
                <form method="post">
                    <!--                        Add user and lock icon to it if you want-->
                    <input type="text" name="user_name" placeholder="Username" style="width:80%; height:40px; margin-left:35px; padding-left:10px; font-size:12px;"><br/>
                    <input type="password" name="pass_word" placeholder="Password" style="width:80%; height:40px; margin-left:35px; padding-left:10px; font-size:12px;"><br/><br />
                    <input type="submit" value="Log In" class="loginbtn" name="login">
					<?php
						if(isset($_POST['user_name']) && isset($_POST['pass_word']) && isset($_REQUEST['login'])){
							$user = mysqli_real_escape_string($conn , htmlentities($_POST['user_name']));
							$pass = mysqli_real_escape_string($conn , htmlentities($_POST['pass_word']));
							$data = array($user , $pass);
							$finally = _LOG($data);
							if($finally === true){
								echo "<script>alert('LOGIN SUCESS')</script>";
							}elseif($finally === false){
								echo "<script>alert('LOGIN FAILED')</script>";
							}else{
								echo '<script>alert("An error as Occurred! '. $finally .' ")</script>';
							}
						}
					?>
                    <p><a href="#">Forgotten password?</a></p>
<!--                    <fieldset>-->
<!--                        <legend style="text-align:center;margin-left:45%; color:#626669;">OR</legend>-->
<!--
                        <img src="Assets/img/icons/fb.png"> 
                        <img src="Assets/img/icons/google.png"> 
                        <img src="Assets/img/icons/fb.png"> 
-->
<!--                        <h4>Not yet a member? Then signup in the previous section</h4>-->
<!--                    </fieldset>-->
                </form>
            </div>
        </div>
	<script>
		window.fbAsyncInit = function() {
      FB.init({
        appId: "APP_ID",
        xfbml: true,
        version: "v2.6"
      });

    };

    (function(d, s, id){
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) { return; }
       js = d.createElement(s); js.id = id;
       js.src = "//connect.facebook.net/en_US/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

  </script>
<div class="fb-messengermessageus" 
  messenger_app_id="1645220495748555" 
  page_id="1645220495748555"
  color="white"
  size="xlarge" style="position: fixed;
    bottom: 0;
    right: 0;" >
</div> 
    </body>
</html>