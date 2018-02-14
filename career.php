<?php 
	ob_start();
session_start();
	
	$PageTitle = 'Login';
	if (isset($_SESSION['user'])){
	    header('Location: index.php'); // Redirect To Home Page
	}
 include 'init.php';

?>


<div class="container">
  <div class="row">

    <div class="card-item">

      <h2>السياسات و الشروط</h2>


<p>يرجى قراءة هذه البنود والشروط (“البنود”، “البنود والشروط”) بعناية قبل استخدام موقع ادسستا للاعلانات المجانية.</p>
<p>إن وصولك إلى الخدمة واستخدامها مرهون بموافقتك على هذه الشروط والامتثال لها.</p>
<p>تنطبق هذه البنود على جميع الزوار والمستخدمين وغيرهم ممن يدخلون الخدمة أو يستخدمونها.</p>

<hr>
<h4>الوصول الى الخدمة</h4>
<p>من خلال الوصول إلى الخدمة أو استخدامها، فإنك توافق على الالتزام بهذه الشروط. إذا كنت لا توافق مع أي جزء من الشروط ثم لا يجوز لك الوصول إلى الخدمة.</p>
<hr>
<h4>Terms and Condetion</h4>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
<hr>
<h4>Terms and Condetion</h4>
<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
   

     
    
    </div>
    
  </div>
</div>		
						
						
						<?php
 include $tpl . 'footer.php'; 
 ob_end_flush();
 ?>