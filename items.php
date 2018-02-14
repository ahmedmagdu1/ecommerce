<?php 
session_start();

	
 $PageTitle =  'View Item';

 include 'init.php'; 

$itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ?intval($_GET['itemid']): 'This Is not a Valid record';
					$stmt = $con->prepare("SELECT * FROM items WHERE Item_Id = ? ");
					$stmt->execute(array($itemid));
					$count = $stmt->rowCount();
					if ($count > 0){
					$item = $stmt->fetch();

					

 ?>
 
<div class="container latest">

<div class="row">
	<div class="col-lg-12" >

		<div class="card-item ">
<h1 class=""><?php echo $item['Name'] ?> <?php if($item['Status'] == "3"){echo ' <span class="label label-warning item-lable">Used</span>';}else{echo' <span class="label label-success item-lable">New</span>';} ?></h1>
	<fieldset id='demo1' class="rating ">
                        
                        
                        
                       
                        <input class="stars" type="radio" id="star5" name="rating" value="5" />
                        <label class = "full" for="star5" title="5 stars"></label>
<input class="stars" type="radio" id="star4" name="rating" value="4" />
                        <label class = "full" for="star4" title="4 stars"></label>
<input class="stars" type="radio" id="star3" name="rating" value="3" />
                        <label class = "full" for="star3" title="3 stars"></label>
<input class="stars" type="radio" id="star2" name="rating" value="2" />
                        <label class = "full" for="star2" title="2 stars"></label>
 <input class="stars" type="radio" id="star1" name="rating" value="1" />
                        <label class = "full" for="star1" title="1 star"></label>

 
                    </fieldset>	
	<h5> <?php echo $item['Description']; ?> </h5>
	</div>
</div>
</div>
	
	
	
	
	

<div class="row">
	<div class="col-md-5" >

		<div class="card-item ">
					<a href="/admin/uploads/items/<?php echo $item['itemimage'];?>"><img id="myImg" class="img-responsive full-width view-image object-fit_none" src="admin/uploads/items/<?php echo $item['itemimage'];?>" alt="<?php echo $item['Name']; ?>" /></a>
						
			<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>			
		</div>
	</div>
	
	
	<div class="col-md-7" >

			<div class="card-item ">
		<h2 class=""><?php echo $item['Name'] ?><?php if($item['Status'] == "3"){echo ' <span class="label label-warning item-lable">Used</span>';}else{echo' <span class="label label-success item-lable">New</span>';} ?></h2>
			
					<div class="card-header myaccount">
					

	

			

				



			<ul class="list-unstyled ">
			
			
			
			<li class="title">
			<i class="fa fa-hand-o-right fa-fw"></i>
			<span><b>Item Name: </b></span><?php echo $item['Name'] ?></li>
			<li class="title">
			<i class="fa fa-address-card fa-fw"></i>
			<span><b>Description: </b></span><?php echo $item['Description'] ?></li>
			<li class="title">
			<i class="fa fa-globe fa-fw"></i>
			<span><b>Country Of Made: </b></span><?php echo $item['Country_made'] ?></li>
<li class="title">
			<i class="fa fa-map-marker fa-fw"></i>
			<span><b>Seller location: </b></span><?php echo $item['seller'] ?></li>
			<li class="title">
			<i class="fa fa-calendar fa-fw"></i>
			<span><b>Added Date: </b></span><?php echo $item['Add_Date']; ?></li>
			<li class="title">
			<i class="fa fa-money fa-fw"></i>
			<span><b>item price: </b></span><?php echo $item['Price']; ?></li>
			
			</ul>
		</div>	
	<div  >
	
	
	<?php
						$stmt2 = $con->prepare("SELECT * FROM users WHERE UserID = ?");
				$stmt2->execute(array($item['Member_ID']));
				$users = $stmt2->fetch()
 ?>
 
		<div class="row">

			<div class="col-md-6 ">
				<div class="cta">				
					
					<a href="mailto:<?php echo $users['Email'] ?>" class="btn btn-primary btn-block btn-cta "><i class="fa fa-envelope fa-3x "></i> Send Email</a>
				</div>
			</div>
			<div class="col-md-6 ">
				<div class="cta">			
					<a href="tel:<?php echo $users['Phone'] ?>" class="btn btn-success  btn-cta btn-block  "><i class="fa fa-phone fa-3x "></i> Call Now</a>
					
				</div>
			</div>
		</div>	

		</div>
	</div>
<span class="views"><i class="fa fa-eye"> </i> Views <?php echo $item['Views']; ?></span>
</div>
</div>
	
		
	


<div class="row">
	<div class="col-lg-12" >

		<div class="card-item ">
<h1 class=""><?php echo $item['Name'] ?> <?php if($item['Status'] == "3"){echo ' <span class="label label-warning item-lable">Used</span>';}else{echo' <span class="label label-success item-lable">New</span>';} ?></h1>
	
	<h4> <?php echo $item['specifications']; ?> </h4>
	</div>
</div>


	<!-- Contenedor Principal -->

					<div class="container">
						<div class="col-lg-12" >
<!--<div id="status">
<!--<fb:login-button scope="public_profile,email" onlogin="checkLoginState();">
</fb:login-button>-->
<div class="fb-send" data-href="http://www.adsesta.com"></div>
<div
  class="fb-like"
  data-share="true"
  data-width="450"
  data-show-faces="false">
</div>
  </div>
<div class="row">
			
			<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="5"></div>
			</div>
</div>
	
</div>

	


<?php
$stmtv = $con->prepare("UPDATE items SET Views = Views + 1 WHERE Item_Id = {$item['Item_Id']}");
$stmtv->execute();
					}			else { 
 header('Location: login.php');
 exit();
 }
 
 include $tpl . 'footer.php'; 
 ob_end_flush(); ?>