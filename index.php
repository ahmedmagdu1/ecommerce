<?php 
session_start();
$PageTitle       = 'Home';




 include 'init.php';

 ?>
<?php
if (isset($_SESSION['user'])){  				
					echo '<div class="container">';
						echo '	<div class="alert alert-success">';
						echo '		<div class="container-fluid">';
							echo '	  <div class="alert-icon">';
							echo '		';
							echo '	  </div>';
							echo '	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">';
							echo '		<span aria-hidden="true"><i class="fa fa-close"></i></span>';
							echo '	  </button><i class="fa fa-user fa-2x"></i>';
							echo $lang['signed_main'] ;
					
							echo '	</div> ';
						echo '	</div> ';
					echo '	</div> ';
				} else { echo
					'<div class="container">
		<div class="alert alert-info">
			<div class="container-fluid"><a href="login.php">

			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="fa fa-close"></i></span>
			  </button><i class="fa fa-info fa-2x"></i>
			   ' .$lang['sign_main'].'
			</a></div>
		</div>
	</div>'; 
				}
 ?>	
	  




<section>
	<div class="container">
		<div class="col-lg-12">
			<a class="btn btn-primary btn-lg btn-block" href="createad.php">
			<i class="fa fa-plus"></i> Create New Ad
			</a>
		</div>	
	</div>
</section>






<div class="container">


 <h3 class="text-center"><?php echo  $lang['c_sec'] ; ?><small> <?php echo  $lang['c_sec_d'] ; ?></small></h3>
 <hr>
  <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-all" id="one">
		<a href="#">
		<img class="image-responsive" src="layout/images/icons/electronics-01.png" />
            <h4>Electronics</h4>
            
			</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-xs" id="two">
		<a href="#">
		<img src="layout/images/icons/clothes&accessories-01.png" >
            <h4>Clothes & Accessories</h4>
            
			</a>
        </div>

        <!-- hr for only x-small/small viewports -->
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hrspacing"><hr class="hrcolor"></div>

        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-all" id="three">
		<a href="#">
		<img src="layout/images/icons/realestate-01.png" >
            <h4>Real Estate</h4>
            
			</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-md" id="four">
		<a href="#">
		<img src="layout/images/icons/Home&Kitchen-01.png" >
            <h4>Home & Kitchen</h4>
            
			</a>
        </div>

        <!-- hr for for all viewports -->
        <div class="col-xs-12 hrspacing"><hr class="hrcolor"></div>

        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-all" id="five">
		<a href="#">
		<img src="layout/images/icons/sports-01.png" >
            <h4>Sports Equipments</h4>
            
			</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-xs" id="six">
		<a href="#">
		<img src="layout/images/icons/services-01.png" >
            <h4>Services</h4>
            
			</a>
        </div>

        <!-- hr for only x-small/small viewports -->
        <div class="col-xs-12 col-sm-12 hidden-md hidden-lg hrspacing"><hr class="hrcolor"></div>

        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-all" id="seven">
		<a href="#">
		<img src="layout/images/icons/jobs-01.png" >
            <h4>Jobs</h4>
            
			</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-3 text-center vr-md" id="eight">
            <a href="#">
			<img src="layout/images/icons/motors-01.png" >
			<h4>Motors</h4>
            
			</a>
        </div>


    </div>
</div>

<div class="container">

 		
	
<hr>
		 
	<div class="row">	
<h3 class="text-center">Recent Ads <small> The Latest Ads</small></h3>	
		<?php $theLatest = getLatest("*","items","Item_Id",16);
								foreach ($theLatest as $item){
			echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ">';
				echo '<div class="card">';
echo '<span class="views"><i class="fa fa-eye"></i>' . $item['Views'] .' View This</span>';
					echo '<a class="btn btn-default item-card" href="items.php?itemid=' . $item['Item_Id'] . '"><img class="img-responsive item-image full-width object-fit_none" src="admin/uploads/items/' . $item['itemimage'] . '" alt="" />';
						echo '<span class="label label-success price-tag"><small>EGP </small>' . $item['Price'] .'</span>';
						echo '<div class="caption">';
							echo '<h4 class="text-center">' . $item['Name'] .'</h4>';

							
					echo '</div>';
				echo '</div></a>';
			echo '</div>';
		}
		?>		
	</div>	

	</div><!-- End Of Container -->
	
<?php
 include $tpl . 'footer.php'; ?>