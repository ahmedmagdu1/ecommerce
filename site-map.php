<?php 
	ob_start();
session_start();
 include 'init.php';
?>
<div class="container" style="ul{ list-style:none; }">
	<div class="row">
		<div class="col-lg-3 col-xs-6">
                <h3>Pages:</h3>
    	        <ul>
                <li><a href="index.php"><strong>Adsesta</strong></a></li>   
                
                <ul>
<li><a href="about-adsesta.php">About ADSesta.com</a></li>
<li><a href="terms-&-condetion.php">Terms & Condetions</a></li>
<li><a href="privacy-policy.php">Privacy Policy</a></li>
<li><a href="faq.php">fAQ</a></li>
</ul>
    	        </ul>   
		</div>
<div class="col-lg-3 col-xs-6">
                <h3>Categories:</h3>
    	        <ul>
                <li><a href="categories.php?pageid=9&pagename=Electronics"><strong>Electronics</strong></a></li>   
                <li><a href="categories.php?pageid=10&pagename=Home-&-Kitchine"><strong>Home & Kitchine</strong></a></li>
                <li><a href="categories.php?pageid=13&pagename=Real-Estate"><strong>Real Estate</strong></a></li>   
                <li><a href="categories.php?pageid=14&pagename=Sports-Equipments"><strong>Sports Equipments</strong></a></li>
                <li><a href="categories.php?pageid=23&pagename=Motors"><strong>Motors</strong></a></li>   
                <li><a href="categories.php?pageid=25&pagename=Jobs"><strong>Jobs</strong></a></li>
                <li><a href="categories.php?pageid=26&pagename=Clothes-&-Accessories"><strong>Clothes & Accessories</strong></a></li>   
                <li><a href="categories.php?pageid=27&pagename=Services"><strong>Services</strong></a></li>

                <ul><li><a href="#">Subpage 1</a></li><li><a href="#">Subpage 2</a></li><li><a href="#">Subpage 3</a></li><li><a href="#">Subpage 4</a>
                </li></ul>
                <li><a href="#"><strong>Portfolio</strong></a></li>
                <ul><li><a href="#">Subpage 1</a></li><li><a href="#">Subpage 2</a></li></ul>
    	        </ul>   
		</div>
<div class="col-lg-3 col-xs-6">
                <h3>Comunity:</h3>
    	        <ul>
                <li><a href="career.php"><strong>Career</strong></a></li>   
                <li><a href="#"><strong>Contact Us</strong></a></li>
    	        </ul>   
		</div>



	</div>
</div>

					<?php
 include $tpl . 'footer.php'; 
 ob_end_flush();
 ?>