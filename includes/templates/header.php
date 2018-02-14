	<?php
include 'common.php';

?>

				<?php
				
if($PageTitle == 'View Item') {
  include $tpl . 'itemTags.php';
} if($PageTitle == 'Category') {
  include $tpl . 'catTags.php';
}  if($PageTitle == 'Home') {
 include $tpl . 'generalTags.php';
}
	

?>		

		
		<link rel="icon" type="image/png" href="http://adsesta.com/layout/images/favicon.png" />
	    <link rel="stylesheet" href="<?php echo $css; ?>bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo $css; ?>font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo $css; ?>jquery-ui.css" />
		<link rel="stylesheet" href="<?php echo $css; ?>jquery.selectBoxIt.css" />		
		<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet"/>
		<link rel="stylesheet" href="<?php echo $css; ?>frontend.css" />
		<?php if($lang_file == 'lang.ar') {
		echo '<link rel="stylesheet" href="'. $css .'/bootstrap-rtl.min.css" />';
		}else{}   ?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5741666422544927",
    enable_page_level_ads: true
  });
</script>
<?php if($PageTitle == 'Create Ads') {
		echo '<script src="'.$js.'ajax.js"></script>'; }else {}?>
	</head>
    <body>	
	<?php 
	if (isset($_SESSION['user'])){ 

		echo'<div class="upper-bar">';
		echo'<div class="container">';

			echo'<div class="col-lg-12 hidden-xs ">';
			

				echo'<li style="list-style: none;" class="dropdown">';
				echo'	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language"> Lang</i>';
					echo'<span class="caret"></span></a>';
					echo'<ul class="dropdown-menu">';
					echo'  <li><a href="index.php?lang=en"><img src="layout/images/en.png" /> EN</a></li>';
					echo'	<li><a href="index.php?lang=ar"><img src="layout/images/ar.png" /> AR</a></li>';
					echo'</ul>';
					echo'Welcome '. $_SESSION['user'] .'';
					echo'<a href="createad.php"><i class="fa fa-plus"></i> Create new Ad</a>';
					echo'<a href="profile.php"><i class="fa fa-cog"></i> My Account</a>';
				echo'<a href="logout.php"><i class="fa fa-sign-out"></i> Sign Out</a>';

				echo'</li>';
			echo'</div>';





echo'<div class="col-lg-12 hidden-lg hidden-md hidden-sm">';
			

				echo'<li style="list-style: none;" class="dropdown">';
				echo'	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language"> </i>';
					echo'<span class="caret"></span></a>';
					echo'<ul class="dropdown-menu">';
					echo'  <li><a href="index.php?lang=en"><img src="layout/images/en.png" /> EN</a></li>';
					echo'	<li><a href="index.php?lang=ar"><img src="layout/images/ar.png" /> AR</a></li>';
					echo'</ul>';
					
					echo'<a href="createad.php"><i class="fa fa-plus fa-2x"> </i></a>';
					echo'<a href="profile.php"><i class="fa fa-cog fa-2x"> </i></a>';
				echo'<a href="logout.php"><i class="fa fa-sign-out fa-2x"> </i></a>';

				echo'</li>';
			echo'</div>';

		echo'</div>';
	echo'</div>	';
	
	}else{
		echo'<div class="upper-bar">';
		echo'<div class="container">';

			echo'<div class="col-lg-12 hidden-xs  ">';
			

				echo'<li style="list-style: none;" class="dropdown">';
				echo'	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language"> Lang</i>';
					echo'<span class="caret"></span></a>';
					echo'<ul class="dropdown-menu">';
					echo'  <li><a href="index.php?lang=en"><img src="layout/images/en.png" /> EN</a></li>';
					echo'	<li><a href="index.php?lang=ar"><img src="layout/images/ar.png" /> AR</a></li>';
					echo'</ul>';
					echo'<a href="login.php"><i class="fa fa-user"> Sign In</i></a>';
				echo'<a href="registry.php"><i class="fa fa-user-plus"> Sign Up</i></a>';
				echo'</li>';
			echo'</div>';



echo'<div class="col-lg-12 hidden-lg hidden-md hidden-sm  ">';
			

				echo'<li style="list-style: none;" class="dropdown">';
				echo'	<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-language fa-2x"> </i>';
					echo'<span class="caret"></span></a>';
					echo'<ul class="dropdown-menu">';
					echo'  <li><a href="index.php?lang=en"><img src="layout/images/en.png" /> EN</a></li>';
					echo'	<li><a href="index.php?lang=ar"><img src="layout/images/ar.png" /> AR</a></li>';
					echo'</ul>';
					echo'<a href="login.php"><i class="fa fa-user fa-2x"> </i></a>';
				echo'<a href="registry.php"><i class="fa fa-user-plus fa-2x"> </i></a>';
				echo'</li>';
			echo'</div>';



		echo'</div>';
	echo'</div>	'; 
	} ?>


























 <nav class="navbar navbar-default ">          
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" 
	  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>		
      </button>	  <a href="index.php">
      <img class="navbar-brand" src="layout/images/logo.png" href="index.php"/></a>
    </div>	  			 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">       
      <ul class="nav navbar-nav navbar-right">
	
		<li class="header-li"><a href="createad.php"><span><i class="fa fa-plus  head-ico"></i></span><p> Create Ad</p></a></li>
		<li class="header-li"><a href="profile.php"><span><i class="fa fa-user-circle  head-ico"></i></span><p> My Account</p></a></li>
      		<li class="dropdown dropdown-large">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-th  head-ico"></i></span><p> Categories</p></a>
				
				<ul class="dropdown-menu dropdown-menu-large row">
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><a href="categories.php?pageid=9&pagename=Electronics">Electronics</a></li>
<li><a href="#">TV's & Screen's</a></li>
							<li><a href="#">Mobiles</a></li>
							<li><a href="#">Mobile Accrssories</a></li>
							<li><a href="#">Computers</a></li>
							<li><a href="#">Computer Accrssories</a></li>
							<li><a href="#">Printer & Scanner</a></li>
							<li class="divider"></li>
							
							<li class="dropdown-header"><a href="categories.php?pageid=10&pagename=Home-&-Kitchine">Home & Kitchen</a></li>
							<li><a href="#">Kitchen Supplies</a></li>
							<li><a href="#">Home Furniture</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><a href="categories.php?pageid=13&pagename=Real-Estate">Real Estate</a></li>
							<li><a href="#">Appartments</a></li>
							<li><a href="#">Villas</a></li>
							<li><a href="#">Chalet</a></li>
							<li><a href="#">Shops</a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><a href="categories.php?pageid=26&pagename=Clothes-&-Accessories">Clothes & Accessories</a></li>
							<li><a href="#">men Clothes</a></li>
							<li><a href="#">Women Clothes</a></li>
							<li><a href="#">Shoes</a></li>
							<li><a href="#">Accessories</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><a href="categories.php?pageid=25&pagename=Jobs">Jobs</a></li>
							<li><a href="#">Accounting</a></li>
							<li><a href="#">Art & Design</a></li>
							<li><a href="#">Marketing</a></li>
							<li><a href="#">Information Technology</a></li>
							<li><a href="#">Puplic relations</a></li>
							<li><a href="#">Sales</a></li>
<li class="divider"></li>
							<li class="dropdown-header"><a href="categories.php?pageid=27&pagename=Services">services</a></li>
							<li><a href="#">Cleaning</a></li>
							<li><a href="#">Security</a></li>
						</ul>
					</li>
					<li class="col-sm-3">
						<ul>
							<li class="dropdown-header"><a href="categories.php?pageid=14&pagename=Sports-Equipments">Sports Equipments</a></li>
							<li><a href="#">Soft Sports Equipments</a></li>
							<li><a href="#">Heavy Sports Equipments</a></li>
							<li class="divider"></li>
							<li class="dropdown-header"><a href="categories.php?pageid=23&pagename=Motors">Motors</a></li>
							<li><a href="#">Cars</a></li>
							<li><a href="#">Motor Cycles</a></li>
							<li><a href="#">buses & Trucks</a></li>
                                                        <li><a href="#">Yachts</a></li>
						</ul>
					</li>
				</ul>
				
			</li>
	  </ul>  	
    </div>
  </div> 
</nav>
