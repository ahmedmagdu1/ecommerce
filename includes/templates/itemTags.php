<?php
					$itemid = isset($_GET['itemid']) && is_numeric($_GET['itemid']) ?intval($_GET['itemid']): 'This Is not a Valid record';

								  $stmt4 = $con->prepare("SELECT * FROM items WHERE Item_ID = ? ");
								  $stmt4->execute(array($itemid));
								  $mItems = $stmt4->fetchAll();
								  foreach($mItems as $m){
									 
								  }
								  ?>
	<! DOCTYBE html>
 <html lang="ar-EG" itemscope itemtype="http://schema.org/Product">
    <head>
	    <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Place this data between the <head> tags of your website -->
		<title>Adsesta.com | <?php echo $m['Name'] ?></title>
		<!-- Meta Tags Goes here -->

		<meta name="description" content="<?php echo $m['Description'] ?>" />

 <meta name="keywords" content="شقق للبيع ,سيارات للبيع ,عقارات ,للبيع ,بيع وشراء ,بيع واشتري ,موقع بيع وشراء,مواقع اعلانات مجانية ,اعلانات مجانية ,المبوبة,
اعلان وظائف ,اعلانات,اعلانات تجارية ,اعلانات مبوبة ,وظائف مصر ,ابحث عن وظيفة ,شركات توظيف ,سيارات مستعملة ,وظائف خالية بالاسكندرية ,
وظائف خالية فى الاسكندرية ,سوق مصر ,selling sites ,sell furniture ,
sell clothes ,sell electronics ,business advertising ,advertising websites ,online advertisement ,ad sites ,
create ads ,free advertising ,local advertising ,buy and sell furniture ,buy and sell clothes ,buy sell ads ,سيارات ,مطلوب للعمل ,
المبوبة ,مطلوب موظفين ,الاعلان ,مطلوب,صور اعلانات ,اعلان,علانات,اعلانات,شركات توظيف ,
سيارات قديمة للبيع ,سيارات مستعملة ,سيارات مستعملة مصر ,اسعار السيارات المستعملة ,سوق السيارات المستعملة ,عقار,شقق,تسوق ملابس ,مواقع تسوق ,ت
سوق,شراء من الانترنت ,سيارات,اسعار السيارات ,عقارات,عربيات للبيع ,بيع وشراء ,عقارات للبيع ">
		<!-- Schema.org markup for Google+ -->
		<meta itemprop="name" content="<?php echo $m['Name'] ?>">
		<meta itemprop="description" content="<?php echo $m['Description'] ?>">
		<meta itemprop="image" content="http://adsesta.com/admin/uploads/items/<?php echo $m['itemimage']?> ">

		<!-- Twitter Card data -->
		<meta name="twitter:card" content="product">
		<meta name="twitter:site" content="@publisher_handle">
		<meta name="twitter:title" content="<?php echo $m['Name'] ?>">
		<meta name="twitter:description" content="<?php echo $m['Description'] ?>">
		<meta name="twitter:creator" content="@author_handle">
		<meta name="twitter:image" content="http://adsesta.com/admin/uploads/items/<?php echo $m['itemimage']?>">
		<meta name="twitter:data1" content="EGP <?php echo $m['Price'] ?>">
		<meta name="twitter:label1" content="Price">
		<meta name="twitter:data2" content="">
		<meta name="twitter:label2" content="Color">

		<!-- Open Graph data -->
		<meta property="og:title" content="<?php echo $m['Name'] ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://adsesta.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
		<meta property="og:image" content="http://adsesta.com/admin/uploads/items/<?php echo $m['itemimage']?>" />
		<meta property="og:description" content="<?php echo $m['Description'] ?>" />
		<meta property="og:site_name" content="Adsesta.com | Buy 7 Sell Anything Anywhere" />
		<meta property="og:price:amount" content="<?php echo $m['Price'] ?>" />
		<meta property="og:price:currency" content="EGP" />
<script type="application/ld+json">{
    "@id": "http://www.adsesta.com/index.php",
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "http://www.adsesta.com/index.php",
    "name": "Adsesta",
    "description": "Buy Or Sell Anything Anywhere",
    "potentialAction": [
        {
            "@context": "https://schema.org",
            "@type": "SearchAction",
            "target": "http://www.adsesta.com/={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    ]
}</script>
<script type="application/ld+json">{
    "@id": "http://www.adsesta.com/index.php",
    "@context": "https://schema.org",
    "@type": "Organization",
    "url": "http://www.adsesta.com/index.php",
    "name": "Adsesta",
    "description": "Buy Or Sell Anything Anywhere"
}</script>