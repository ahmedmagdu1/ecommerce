<?php
 /* this model like 'MVC 'Model' View Controler System Developed Using PHP **
 /*CaTegories => [ Manage | Edit | Ubdate | Add | Insert | Delete | Stats] **
 ** And If you want more category add from template page with if & else Condetion */
	ob_start();
	session_start();
	if (isset($_SESSION['user'])){
		$PageTitle = 'Delete Profile';

		include 'init.php';
		$action = isset($_GET['action']) ? $_GET['action'] : 'Manage';
		// Start manage Page
		if ($action == 'Manage'){ // Manage Page 
		
		
		
		$getUser = $con->prepare("SELECT * FROM users WHERE UserName = ? LIMIT 1");
$getUser->execute(array($_SESSION['user']));
$info = $getUser->fetch();
		?>
	
		<div class="container">
		
		<div class="col-lg-9" >
		
						<div class="card-item">
		<div class="card-header myaccount">
		<a href="profile.php?action=Edit" class='btn btn-success '><i class='fa fa-edit'></i> Edit</a>
		<a href="profile.php?action=Delete" class='btn btn-danger  confirm'><i class='fa fa-remove'></i> Delete</a>
			<h2 class="title ">My Information</h2>
			
			<ul class="list-unstyled ">
			<li class="title">
			<i class="fa fa-unlock-alt fa-fw"></i>
			<span><b>Login Name: </b></span><?php echo $info['UserName']; ?></li>
			<li class="title">
			<i class="fa fa-unlock-alt fa-fw"></i>
			<span><b>User ID: </b></span><?php echo $info['UserID']; ?></li>
			
			
			<li class="title">
			<i class="fa fa-envelope-o fa-fw"></i>
			<span><b>Email: </b></span><?php echo $info['Email']; ?></li>
			<li class="title">
			<i class="fa fa-user fa-fw"></i>
			<span><b>Full Name: </b></span><?php echo $info['FullName']; ?></li>
			<li class="title">
			<i class="fa fa-phone fa-fw"></i>
			<span><b>Phonr Number: </b></span><?php echo $info['Phone']; ?></li>
			<li class="title">
			<i class="fa fa-calendar fa-fw"></i>
			<span><b>Registration Date: </b></span><?php echo $info['Date']; ?></li>
			</ul>
		</div>
	
	</div>
	</div>
	
	
	
	
		<div class="col-lg-3" >

		<div class="card-item">
					<img class="img-responsive  full-width object-fit_none" src="admin/uploads/avatars/<?php echo $info['avatar'] ?>" alt="" />
						
						
							<h5 class="text-center">profile Picture</h5>
							
				
		</div>
	</div>
	</div>
	
	
	
	
	
	
	
	
	
	<div class="container">
		
		<div class="col-lg-12" >
		<div class="item-card">
		<div class="card-header text-center">
			<h3 class="title ">My Ads</h3>
			<p class="category">This Is My Ads</p>
		</div>
	<?php foreach (getItems('member_ID',$info['UserID']) as $item){
				echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ">';
				echo '<div class="card">';
					echo '<a class="btn btn-default item-card" href="items.php?itemid=' . $item['Item_Id'] . '"><img class="img-responsive item-image full-width object-fit_none" src="admin/uploads/items/' . $item['itemimage'] . '" alt="" />';
						
						echo '<div class="caption">';
							echo '<h5 class="text-center">' . $item['Name'] .'</h5>';
							echo '<p class="text-center">' . $item['Price'] .'</p>';
							echo '<p class="date">' . $item['Add_Date'] .'</p>';
							
					echo '</div>';
				echo '</div></a>';
			echo '</div>';
			
		
		}
		?>
	</div>
	</div></div>
	
	
	
	
	
		<?php
		}  elseif ($action == 'Edit'){ // Edit Page 
		
				$stmt = $con->prepare("SELECT * FROM users WHERE UserName = ? LIMIT 1");
				$stmt->execute(array($_SESSION['user']));
				$row = $stmt->fetch();
		$count = $stmt->rowCount();
		if ($stmt->rowCount() > 0) { ?>	
					<div class="container">
							<form class="formatic" action="?action=Update" method="POST" enctype="multipart/form-data">
							<h1 class="text-center">Edit Member</h1>
							<h3 class="text-center">Edit Profile Information & Click Save<h3>
							<hr>
							<!-- Start User Name Field -->
							<input type="hidden" name="userid" value="<?php echo $row['UserID'] ?>" />
								<div class="form-group">
									<label class="col-md-2 control-label">User Name </label>
										<div class="col-md-10">
												<input type="text" name="username" class="form-control" value="<?php echo $row['UserName'] ?>" autocomplete="off" required="required" />
										</div>
								</div>
								<!-- End Of User Name Field -->
								<!-- Start User Name Field -->
								<div class="form-group">
									<label class="col-md-2 control-label">Password</label>
										<div class="col-md-10">
										<input type="hidden" name="oldpassword" value="<?php echo $row['Password'] ?>" />
												<input type="Password" name="newpassword" class="form-control" placeholder="If you Won't Change Your Password Leave It Empty" autocomplete="new-password" />
										</div>
								</div>
								<!-- End Of User Name Field -->
								<!-- Start User Name Field -->
								<div class="form-group">
									<label class="col-md-2 control-label">Email</label>
										<div class="col-md-10">
												<input type="Email" name="email" value="<?php echo $row['Email'] ?>" class="form-control" required="required" />
										</div>
								</div>
								<!-- End Of User Name Field -->
								<!-- Start User Name Field -->
								<div class="form-group">
									<label class="col-md-2 control-label">Full Name</label>
										<div class="col-md-10">
												<input type="text" name="full" value="<?php echo $row['FullName'] ?>" class="form-control" required="required" />
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Phone Number</label>
										<div class="col-md-10">
												<input type="text" name="phone" value="<?php echo $row['Phone'] ?>" class="form-control" required="required" />
										</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Profile Picture</label>
										<div class="col-md-10">
												<input type="file"  name="avatar" value="admin/uploads/avatars/<?php echo $row['avatar'] ?>" class="form-control "  />
										</div>
								</div>
								<!-- End Of User Name Field -->
								<!-- Start User Name Field -->
								<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
												<input type="submit" value="Save" class="btn btn-primary btn-block" />
										</div>
								</div>
								<!-- End Of User Name Field -->
							</form>	
							
					</div>
		
		<?php	
		   } else{
			   echo 'there is no such ID';
		   }
	


		}elseif ($action == 'Update'){  // Update Page 
			echo "<h1 class='text-center'>Update Member</h1>"; // Update Header h1
			echo "<div class='container'>";
           if ($_SERVER['REQUEST_METHOD'] == 'POST'){          // request form from button only not from http request
			   //Get Varible From The Form
			   $avatarName = $_FILES['avatar']['name'];
			   $avatarSize = $_FILES['avatar']['size'];
			   $avatarTmp = $_FILES['avatar']['tmp_name'];
			   $avatarType = $_FILES['avatar']['type'];
			   
			   $avatarAllowedExtension = array("jpeg", "jpg", "png", "gif");
			   
			   $avatarExtension = strtolower(end(explode('.',$avatarName)));
			   
			   
			   
			   $id    =  $_POST['userid'];
			   $user  =  $_POST['username'];
			   $email =  $_POST['email'];
			   $name  =  $_POST['full'];
			   $phone  =  $_POST['phone'];
			   
			   // Password Trick
			   $pass = '';
			   if (empty($_POST['newpassword'])){
				   $pass = $_POST['oldpassword'];
			   } else {
				   $pass = sha1($_POST['newpassword']);
			   }
			   
			   // form validate
			      $formErrors = array(); 
				  if (strlen($user) < 4){
					  $formErrors[] = '<div class="alert alert-danger">User Name Cant Be Less Than<strong> 4 Characters</strong></div>';
				  }
				  if (strlen($user) > 25){
					  $formErrors[] = '<div class="alert alert-danger">User Name Cant Be More Than<strong> 25 Characters</strong></div>';
				  }
				  
				  if (empty($user)){
					  $formErrors[] = '<div class="alert alert-danger">User Name Cant Be<strong> Empty</strong></div>';
				  }
				  if (empty($name)){
					  $formErrors[] = '<div class="alert alert-danger">Name Cant Be<strong> Empty</strong></div>';
				  }
				  if (empty($email)){
					  $formErrors[] = '<div class="alert alert-danger">Email Cant Be<strong> Empty</strong></div>';
				  }
				  if ($avatarSize > 4194304){
					  $formErrors[] = '<div class="alert alert-danger">Image Cant be Larger than<strong> 4 MB</strong></div>';
				  }
				   foreach($formErrors as $error){
					   echo $error .'<br/>';
				   }
				   
				   $avatar = rand(0,1000000000). '_'. $avatarName;
						 move_uploaded_file($avatarTmp, "admin/uploads/avatars//" . $avatar);
						 
				     // if there is no errors procced the update operation
				     if(empty ($formErrors)){
						// just for testing form  echo  $id . $user , $email . $name ;
			            //update the database
			            $stmt = $con->prepare("UPDATE users SET UserName = ? , Email = ? , Phone= ? , FullName= ? , Password= ? , avatar= ? WHERE UserID = ? ");
			            $stmt->execute(array($user, $email, $phone , $name, $pass,  $avatar, $id ));
	                    // echo success message
                        $theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' ' . 'Record Updated Successfully</div>';	 
			             redirectHome ($theMsg, 'back');
					   
					   }
				   
				   
			 		   
		   }else {
			   echo 'Sorry You Cant Browse This Page Directly';
			   
		   }
		   echo "</div>";
			
			
			

		} elseif ($action =='Delete'){ // Delete Member Page
					echo "<h1 class='text-center'>Deleting Member</h1>"; // Delete Header h1
					echo "<div class='container'>";
					
					$stmt = $con->prepare("SELECT * FROM users WHERE UserName = ? LIMIT 1");
					$stmt->execute(array($_SESSION['user']));
					$count = $stmt->rowCount();
					if ($stmt->rowCount() > 0) { 
					$stmt = $con->prepare("DELETE FROM users WHERE UserName= :zuser");
					$stmt->bindParam(":zuser", $_SESSION['user']);
					$stmt->execute();
					$theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' ' . 'Record Deleted Successfully</div>';
					header ('Location: logout.php');
					
					 echo "</div>";
					}	else {
						echo 'There Is No ID Match Your Record';
						
					}
		} 
		
	
	

		include $tpl . 'footer.php';
	  /*  echo 'Welcome' . ' ' . $_SESSION['Username']; */
	} else{
		echo 'You Are Not Authorized to View This Page';
		header ('Location: login.php');		
		exit();
	}
		ob_end_flush();
/* end of Table to view the content code  */	