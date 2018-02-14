<?php
session_start();
 $PageTitle =  'Category';
	include 'init.php'; 
	
	?>

	
		<ol class="breadcrumb blue">
		  <li><a href="index.php">Home</a></li>
		<?php 
		        echo'<li>';
				echo str_replace('-',' ', $_GET['pagename']);
				echo '</li>';
				?>
		</ol>
		<?php
		
if (isset($_SESSION['user'])){  
				
					echo '<div class="container">
		<div class="alert alert-info">
			<div class="container-fluid">
			  <div class="alert-icon">
				
			  </div>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"> <i class="fa fa-close"> </i></span>
			  </button><i class="fa fa-user fa-2x"></i><a href="#"> Welcome: ' . $_SESSION ['user'] .' You Can Create New Ads From here </a> 
			</div>
		</div>
	</div>
';
				} else { echo
					'<div class="container">
		<div class="alert alert-info">
			<div class="container-fluid">
			  <div class="alert-icon">
				
			  </div>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true"><i class="fa fa-close"></i></span>
			  </button>
			   <i class="fa fa-info fa-2x"></i> Please Signin or Create new Account to Create Ads...
			</div>
		</div>
	</div>'; 
				}
 ?>	

	<div class="container">
		<h1 class="text-center"><?php echo str_replace('-',' ', $_GET['pagename']);  ?></h1>
		<?php foreach (getItems('Cat_ID',$_GET['pageid']) as $item){
				echo '<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 ">';
				echo '<div class="card">';
echo '<span class="views"><i class="fa fa-eye"></i>' . $item['Views'] .' View This</span>';
					echo '<a class="btn btn-default item-card" href="items.php?itemid=' . $item['Item_Id'] . '"><img class=" item-image img-responsive full-width object-fit_none" src="admin/uploads/items/' . $item['itemimage'] . '" alt="" />';
						echo '<span class="label label-success price-tag"><small>EGP </small>' . $item['Price'] .'</span>';
						echo '<div class="caption">';
							echo '<h5 class="text-center">' . $item['Name'] .'</h5>';
							
					echo '</div>';
				echo '</div></a>';
			echo '</div>';
			
		
		}
		?>
	</div>
	</div>
	<!--
	<div class="container">
	<div class="row">
	
	<center>
	
	<ul class="pagination pagination-info">
	<li><a href="#"><</a></li>
	<li  class="active"><a href="#">1</a></li>
	<li><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li><a href="#">5</a></li>
	<li><a href="#">></a></li>
</ul>
	</center>
	
		</div>
	</div>
	
	-->
	
	
	
	
	
	
	
	
	
	
	
	
	<?php


$pageid = isset($_GET['pageid']) && is_numeric($_GET['pageid']) ?intval($_GET['pageid']): 'This Is not a Valid record';
$stmtvc = $con->prepare("UPDATE categories SET Views = Views + 1 WHERE ID = ?");
$stmtvc->execute(array($pageid));

 include $tpl . 'footer.php';




?>