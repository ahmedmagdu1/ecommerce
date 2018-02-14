<?php
$stmtall = $con->prepare("UPDATE views_counter SET views = views + 1 WHERE pages = 'puplic'");
$stmtall->execute();

$stmtall = $con->prepare("UPDATE views_counter SET views = views + 1 WHERE pages = '$PageTitle'");
$stmtall->execute();


?>
<div class="container">    
  <div class="row">


<div id="status">
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

  </div>
</div>

    <div class="col-lg-12">

      <div class="col-md-3">
	  	  <h4>Adesta</h4>
        <ul class="list-unstyled">
          <li><a href="about-adsesta.php">About adesta</a></li>
          <li><a href="terms-&-condetion.php">terms & condetion</a></li>
          <li><a href="privacy-policy.php">privacy policy</a></li>
	  <li><a href="faq.php">FAQ</a></li>
          <li><a href="site-map.php">Site map</a></li>
        </ul>
      </div>
      <div class="col-md-3">
	  	  <h4>Categories</h4>
        <ul class="list-unstyled">
           <?php
				foreach (getCat() as $cats){					
				echo '
				<li>
					<a href="categories.php?pageid=' . $cats['ID'] . '&pagename=' . str_replace(' ','-', $cats['Name']) . '">
					' . $cats['Name'] . '
					</a>

				</li>';
				
				} ?>      
        </ul>
      </div>
      <div class="col-md-3">
	  	  <h4>Community</h4>
        <ul class="list-unstyled">
          <li><a href="career.php">Career</a></li>

          <li><a href="#">Contact Us</a></li>                      
        </ul>
<h4>Create Ads</h4>
        <ul class="list-unstyled">
        <?php  if (isset($_SESSION['user'])){
?>
<li><a href="profile.php">My Account</a></li>
<li><a href="createad.php">Create Ad</a></li>
<?php
}else { ?> <li><a href="login.php">Signin</a></li>
          <li><a href="registry.php">Crete new Account</a></li> <?php } ?>                      
        </ul>
      </div>
      <div class="col-md-3">
	  <h4>Follow Us On</h4>
        <ul class="list-unstyled">
          <li>
		  Follow Us On Social networks
		  </li>
          <li>  <a href="https://www.facebook.com/adsestacom/" target="_blank"><button class="btn btn-default btn-fb ">
					<i class="fa fa-facebook"></i>
				</button></a>
				<a href="#"><button class="btn btn-default btn-tw ">
					<i class="fa fa-twitter"></i>
				</button></a>
				<a href="#"><button class="btn btn-default btn-go ">
					<i class="fa fa-google"></i>
				</button></a>
				<a href="#"><button class="btn btn-default btn-yt">
					<i class="fa fa-youtube"></i>
				</button></a>
				</li>                 
        </ul>

      </div>  
    </div>

  <div class="text-center">
        <p>© 2017 adesta. All rights reserved</p>
  </div>
</div>
	<script src="<?php echo $js; ?>jquery.min.js"></script>
	<script src="<?php echo $js; ?>jquery-ui.min.js"></script>
	<script src="<?php echo $js; ?>jquery.selectBoxIt.min.js"></script>
	<script src="<?php echo $js; ?>bootstrap.min.js"></script>
	<script src="<?php echo $js; ?>frontend.js"></script>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '218904168307310',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=218904168307310";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100559690-1', 'auto');
  ga('send', 'pageview');

</script>
   </body>  

 </html>