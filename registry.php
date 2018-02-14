<?php 
	ob_start();
session_start();
 $PageTitle =  'Create New Account';
 include 'init.php';
	if (isset($_SESSION['user'])){
	    header('Location: index.php'); // Redirect To Home Page
	}
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){          // request form from button only not from http request
			   //Get VArible From The Form
			   
			   $user  =  $_POST['username'];
			   $hashPass  =  sha1($_POST['password']);
			   $email =  $_POST['email'];
			   $name  =  $_POST['full'];
			   $phone  =  $_POST['phone'];
			   // form validate
			      $formErrors = array(); 
				  if (strlen($user) < 4){
					  $formErrors[] = '<div class="alert alert-danger">User Name Cant Be Less Than<strong> 4 Characters</strong></div>';
				  }
				  if (strlen($user) > 25){
					  $formErrors[] = 'User Name Cant Be More Than<strong> 25 Characters</strong></div>';
				  }
				  if (strlen($hashPass) < 6){
					  $formErrors[] = 'Password Cant Be Less Than<strong> 6 Characters</strong></div>';
				  }
				  if (empty($user)){
					  $formErrors[] = 'User Name Cant Be<strong> Empty</strong></div>';
				  }
				  if (empty($name)){
					  $formErrors[] = 'Name Cant Be<strong> Empty</strong></div>';
				  }
				  if (empty($email)){
					  $formErrors[] = 'Email Cant Be<strong> Empty</strong></div>';
				  }
				   foreach($formErrors as $error){
					   echo '<div class="container"><div class="alert alert-danger">' . $error . '</div></div>';
				   }
				   
				   
				     if(empty ($formErrors)){
						 
						 // Check If User Exist In Database
						 
						 $check = checkItem("Username", "users", $user);
						 if ($check == 1) {
							 echo '<div class="container"><div class="alert alert-danger">Sorry User Name Is Exist</div></div>';
						 } else{
							    // insert user info to database
								// ust for debuging & testing form  echo  $id . $user , $email . $name ;
								$stmt = $con->prepare("INSERT INTO users ( UserName , Password , Email , FullName, RegStatus,TrustStatus, Date, Phone, avatar) 
								VALUES (:zuser, :zpass, :zemail, :zname, 1,0, now(), :zphone, 0) ");
								$stmt->execute(array(
								   'zuser' => $user,
								   'zpass' => $hashPass,
								   'zemail' => $email,
								   'zname' => $name,
								   'zphone' => $phone
								));
								// echo success message
								$theMsg = "<div class='container'><div class='alert alert-success'>" . $stmt->rowCount() . ' ' . 'Account Created Successfully<a href="login.php"> Login From here</a></div></div>';	 
					             echo $theMsg;
					   }  
					        
					   }
				   
				   
			 		   
		   
		   	



$to = "ahmedmagdu1@gmail.com, info@adsesta.com";
$subject = "Account Created Successfuly";

$message = "
<html>
<head>
<title>Your Account Created Successfuly</title>
<style>
body {
background:#f5f5f5;

}
.th{
padding: 5px 30px 5px 0px;
}
.box{
  background-color:#fff;
   max-width: 441px;
   margin: 0 auto;
   border-radius: 5px;
   padding: 5px 15px 15px 15px;
}
.logo{
margin: 20px 20px 10px 20px;
padding: 0 0 0 0 ;
height: 40px
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
.btn {
    background-color: #008CBA;
    border: 2px solid #008CBA;
    color: white ;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
	border-radius: 4px;
	width: 83%;
}

tr:hover{background-color:#f5f5f5}
.foot {
text-align:center;
margin: 5px 0 0px 0px;
font-size: 15px;

}
.foot a{

text-decoration:none;
color:#787878;
}

</style>
</head>
<body>
<div class='box'>
<img class='logo' src='http://www.adsesta.com/layout/images/logo.png' />
<p> Hello $user </p>
<p>We Are Happy To Join <a href='http://www.adsesta.com'>adsesta.com</a>
<p>Your Account Created Successfuly on <a href='http://www.adsesta.com'>adsesta.com</a></p>
<p>Now Your Can Login To Your Account</p>
<a class='btn' href='http://www.adsesta.com/login.php'>Login From here</a>
<p>Also Your Can Edit Or Delete Your<a href='http://www.adsesta.com/profile.php'> account page</a></p>
<table class='table'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Phone Number</th>
</tr>
<tr>
<td> $user</td>
<td> $name</td>
<td> $email</td>
<td> $phone</td>
</tr>
</table>
</div>
<p class='foot'><a href='http://www.adsesta.com'>adsesta.com</a></p>

</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: Adsesta.com <info@adsesta.com>' . "\r\n";
'Reply-To: <info@adsesta.com>' . "\r\n" .

mail($to,$subject,$message,$headers,'-finfo@adsesta.com');
mail($email,$subject,$message,$headers,'-finfo@adsesta.com');
}
?>
<div class="container">
  <div class="col-lg-12">

    <div class="main card-item">

      <h3>Please Sign Up, or <a href="login.php">Log In</a></h3>
      <!--<div class="row">
        <div class="fb-login">
          <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>
-->
      <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>" autocomplete="on">
        <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-user"> </i>
										</span>
										<input type="text" name="username" class="form-control" placeholder="User Name..." required>
									</div></div>
 
									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-unlock-alt"> </i>
										</span>
										<input type="password" name="password" placeholder="Password..." class="form-control" required/>
									</div></div>
									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-envelope"> </i>
										</span>
										<input type="email" name="email" class="form-control" placeholder="Email..." required >
									</div></div>
									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-users"> </i>
										</span>
										<input type="text" name="full" placeholder="Full Name..." class="form-control" required="required"  />
									</div></div>
									<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-phone"> </i>
										</span>
										<input type="number" name="phone" placeholder="Phone Number..." class="form-control" required="required"  />
									</div></div>
									
        <div class="checkbox pull-right">
         <a class="pull-right" href="login.php">Or Log In From Here</a>
        </div>
		
        <button type="submit" class="btn btn btn-primary">
          Sign Up
        </button>
		
      </form>
    
    </div>
    
  </div>
</div>					
						<?php

 include $tpl . 'footer.php';
 ob_end_flush();
 ?>