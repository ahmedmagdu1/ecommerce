<?php 
	ob_start();
session_start();
	
	$PageTitle = 'faq';
	
 include 'init.php';

?>
<div class="container">
  <div class="row">

    <div class="card-item">

      <h2>الاسئلة الاكثر شيوعا</h2>

<h4>هل يمكنني اضافة اكثر من اعلان ؟</h4>
<p>الاجابة : نعم يمكنك اضافة عدد لا نهائي من الاعلانات المبوبة </p>
<hr>
<h4>هل يمكنني اضافة اعلانات مميزة ؟</h4>
<p>الاجابة : في الوقت الحالي لا, نحن نعمل على ذلك حيث يعمل المختصون على تطويربيئة عمل الموقع </p>

   

     
    
    </div>
    
  </div>
</div>






						

					
						
						
				
						
						
						<?php
 include $tpl . 'footer.php'; 
 ob_end_flush();
 ?>