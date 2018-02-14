<?php 
	ob_start();
session_start();
	
	$PageTitle = 'Login';
	if (isset($_SESSION['user'])){
	    header('Location: index.php'); // Redirect To Home Page
	}
 include 'init.php';
 
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		
		$user = $_POST['username'];
		$pass = $_POST['password'];
		$hashedPass = sha1($pass);

		// Chec If The User Exist in Database
		
		$stmt = $con->prepare("SELECT 
		                            UserID, Username ,Password 
							  FROM 
							        users 
							  WHERE 
							        Username = ? 
							  AND 
							        Password = ? ");
		$stmt->execute(array($user, $hashedPass));
		
		$get = $stmt->fetch();

		$count = $stmt->rowCount();
		
		// If Count > 0 this mean the database record contain information about this record //
		if($count > 0) {
		    $_SESSION['user'] = $user; // Register Session Name
			$_SESSION['uid'] = $get['UserID']; // Register Session UID
			header('Location: index.php'); // Redirect to home Page
            exit();			
		}
	}

?>
<div class="container">
  <div class="row">

    <div class="main card-item">

      <h3>Please Log In, or <a href="registry.php">Sign Up</a></h3>
      <div class="row">
        <div class="fb-login">
          <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="true"></div>
        </div>
      </div>
      <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
      </div>

      <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-user"> </i>
										</span>
										<input type="text" name="username" class="form-control" placeholder="User Name..." required="required">
									</div></div>
 
		<div class="form-group">
		
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-unlock-alt"> </i>
										</span>
										<input type="password" name="password" placeholder="Password..." class="form-control" required="required" />
									</div></div>
									
        <div class="checkbox pull-right">
         <a class="pull-right" href="#">Forgot password?</a>
        </div>
		
        <button type="submit" class="btn btn btn-primary">
          Log In
        </button>
		
      </form>
    
    </div>
    
  </div>
</div>






						

					
						
						
				
						
						
						<?php
 include $tpl . 'footer.php'; 
 ob_end_flush();
 ?>