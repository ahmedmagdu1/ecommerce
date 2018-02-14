<?php 
	ob_start();
session_start();
	
	$PageTitle = 'Create Ads';
	
 include 'init.php'; 
 if (isset($_SESSION['user'])){
	
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			    $itemimageName = $_FILES['itemimage']['name'];
			   $itemimageSize = $_FILES['itemimage']['size'];
			   $itemimageTmp = $_FILES['itemimage']['tmp_name'];
			   $itemimageType = $_FILES['itemimage']['type'];
			   
			   $itemimageAllowedExtension = array("jpeg", "jpg", "png", "gif");
			   
			   $itemimageExtension = strtolower(end(explode('.',$itemimageName)));


	$formErrors = array();
	$name	   = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	$desc      = filter_var($_POST['desc'],FILTER_SANITIZE_STRING);
	$price 	   = filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
	$country   = filter_var($_POST['country'],FILTER_SANITIZE_STRING);
        $seller   = filter_var($_POST['seller'],FILTER_SANITIZE_STRING);
	$status    = filter_var($_POST['status'],FILTER_SANITIZE_NUMBER_INT);
	$category  = filter_var($_POST['category'],FILTER_SANITIZE_NUMBER_INT);
	
	if (strlen($name) < 4){
		$formErrors[] = 'Item name Must be At least 4 Characters';
	}
	if (strlen($desc) < 10){
		$formErrors[] = 'Item Description Must be At least 10 Characters';
	}
        if (strlen($desc) > 40){
		$formErrors[] = 'Item Description Must be At less Than 40 Characters';
	}
	if (strlen($price) < 1){
		$formErrors[] = 'Item Price Must be At least 1 number';
	}
	if (strlen($country) < 2){
		$formErrors[] = 'Country name Must be At least 2 Characters';
	}
        if (strlen($seller) < 2){
		$formErrors[] = 'Seller Place Must be At least 2 Characters';
	}
	if (empty($price)){
		$formErrors[] = 'Item Price Cant be Empty';
	}
	if (empty($status)){
		$formErrors[] = 'Item status Cant be Empty';
	}
	if (empty($category)){
		$formErrors[] = 'Item Category Cant be Empty';
	}

	 if(! empty($itemimageName) && ! in_array($itemimageExtension, $itemimageAllowedExtension)){
					  $formErrors[] = 'The Item Photo Extention is Not<strong> Allowed</strong></div>';
				  }
				   if ($itemimageSize > 4194304){
					  $formErrors[] = '<div class="alert alert-danger">Image Cant be Larger than<strong> 4 MB</strong></div>';
				  }
	 if(empty ($formErrors)){
		 
		 
			    $itemimage = rand(0,1000000000). '_'. $itemimageName;
						 move_uploaded_file($itemimageTmp, "admin/uploads/items//" . $itemimage);
						 
						
							    // insert categories info to database
								// ust for debuging & testing form  echo  $id . $user , $email . $name ;
								$stmt = $con->prepare(" INSERT INTO items 
								       ( Name , Description , Price , Country_made ,Views, seller, Status, Rating , Add_Date , Cat_ID , Sub_Cat_ID, Member_ID ,itemimage ) 
								VALUES ( :zname, :zdesc, :zprice, :zcountry,0, :zseller, :zstatus,0, now(), :zcategory,:zsubcategory, :zmember , :zitemimage) ");
								
								
								
								
								
								$stmt->execute(array(
								   'zname'    => $name,
								   'zdesc' 	  => $desc,
								   'zprice'   => $price,
								   'zcountry' => $country,
                                   'zseller' => $seller,
								   'zstatus'  => $status,
								   'zmember'  => $_SESSION['uid'],
								   'zcategory'     => $category,
								   'zsubcategory'     => $subcategory,
								   'zitemimage'     => $itemimage
								   
								   							   
								   ));
								// echo success message
								$theMsg = "<div class='alert alert-success'>" . $stmt->rowCount() . ' ' . 'Item Added Successfully</div>';	 
					             redirectHome ($theMsg, 'back');
					     
					   }
					   
	
}	 
 
 ?>
 
<div class="container">
<h1 class="title ">Create New Ad</h3>
<div class="card">
<div class="row">
	<div class="col-lg-12">
<?php 
								if (! empty ($formErrors)){
									foreach ($formErrors as $error){
										echo'<div class="alert alert-danger">' . $error . '</div>';
									}
								}
								
							?>
			<div class="card-header create-ad">
				
							
		
								
								
								
								<form class="formatic" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">

								<!-- Start Name Field -->
									<div class="form-group">
										<label class="control-label">Item Name</label>
											<div >
													<input type="text" 
													name="name" 
													class="form-control live-name" 
													placeholder="item Name" 
													autocomplete="off" 
													 />
											</div>
									</div>
									
									<!-- Start btn Field -->
									<!-- Start Name Field -->
									<div class="form-group">
										<label class="control-label">item describtion</label>
											<div >
													<input type="text" 
													name="desc" 
													class="form-control" 
													placeholder="item description" 
													autocomplete="off" 
													 />
											</div>
									</div>
									
									<!-- Start btn Field -->
									<!-- Start Name Field -->
									<div class="form-group">
										<label class="control-label">item Price</label>
											<div >
													<input type="text" 
													name="price" 
													class="form-control live-price" 
													placeholder="Item Price" 
													autocomplete="off" 
													 />
											</div>
									</div>
									
									<!-- Start btn Field -->
									<!-- Start Name Field -->
									<div class="form-group">
										<label class=" control-label">Country Of Made</label>
											<div >
													<input type="text" 
													name="country" 
													class="form-control" 
													placeholder="Country Of Made" 
													autocomplete="off" 
													 />
											</div>
									</div>
									<!-- Start btn Field -->
<!-- Start Name Field -->
									<div class="form-group">
										<label class=" control-label">Seller Country</label>
											<div >
													<select name="seller">
														<option value="0">...</option>
<option value="Alexandria">Alexandria</option>
														<option value="Aswan">Aswan</option>
														<option value="Asyut">Asyut</option>
														<option value="Beheira">Beheira</option>
														<option value="Cairo">Cairo</option>
														<option value="Dakahlia">Dakahlia</option>
														<option value="Faiyum">Faiyum</option>
														<option value="Gharbia">Gharbia</option>
														<option value="Giza">Giza</option>
														<option value="Ismailia">Ismailia</option>
														<option value="Kafr El Sheikh">Kafr El Sheikh</option>
														<option value="Luxor">Luxor</option>
														<option value="Matruh">Matruh</option>
														<option value="Minya">Minya</option>
														<option value="Monufia">Monufia</option>
														<option value="North Sinai">North Sinai</option>
														<option value="Port Said">Port Said</option>
														<option value="Qalyubia">Qalyubia</option>
														<option value="Qena">Qena</option>
														<option value="Red Sea">Red Sea</option>
														<option value="Sharqia">Sharqia</option>
														<option value="Sohag">Sohag</option>
														<option value="South Sinai">South Sinai</option>
														<option value="Suez">Suez</option>
														
													</select>
											</div>
									</div>

								
									<!-- Start Name Field -->
									<div class="form-group">
										<label class=" control-label">Status</label>
											<div >
													<select name="status">
														<option value="0">...</option>
														<option value="1">New</option>
														
														<option value="3">Used</option>
														
													</select>
											</div>
									</div>

					
									
									
										<div class="form-group">
										<label class=" control-label">Main Category</label>
											<div>
													<select name="category" onchange="showUser(this.value)">
														<option value="0">...</option>
												          <?php
														  $stmt2 = $con->prepare("SELECT * FROM categories WHERE parent = 0 ");
														  $stmt2->execute();
														  $cats = $stmt2->fetchAll();
														  foreach($cats as $cat){
															  echo "<option value='" . $cat['ID'] . "'>" .$cat['Name'] . "</option>";
														  }
														  ?>
													</select>
											</div>
									</div>





<div class="form-group">
										<label class=" control-label">Sub Category</label>
											
													
														
														<div id="txtHint"></div>
														
												        
													
											<?php echo $row['Name']; ?>
									</div>


									<!-- Start Profile Picture Field -->
								<div class="form-group">
									<label class="control-label">item Image</label>
										<div>
												<input type="file" name="itemimage" class="form-control "  />
										</div>
								</div>
								<!-- End Of Profile Picture Field -->
									<!-- Start btn Field -->
									<div class="form-group">
											<div class="search-i">
													<input type="submit" value="Add item" class="btn btn-success btn-md btn-block" />
											</div>
									</div>
									<!-- End Of btn Field -->
								</form>	
								
		
		</div>
		
	</div></div>

	
	
	
				
	
							
				
			</div>
	

	

						
						
					
					
					
				
		

	
	
	
	
	
	
	
	
	
</div>
 <?php } else { 
 header('Location: login.php');
 exit();
 }
 include $tpl . 'footer.php'; 
  ob_end_flush();
  ?>