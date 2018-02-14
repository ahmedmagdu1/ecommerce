<?php
					$catid = isset($_GET['pageid']) && is_numeric($_GET['pageid']) ?intval($_GET['pageid']): 'This Is not a Valid record';

								  $stmt5 = $con->prepare("SELECT * FROM categories WHERE ID = ? ");
								  $stmt5->execute(array($catid));
								  $mCats = $stmt5->fetchAll();
								  foreach($mCats as $cats){
									 
								  }
								  ?>

		
		<!-- Update your html tag to include the itemscope and itemtype attributes. -->
<html lang="ar-EG" itemscope itemtype="http://schema.org/Article">

<!-- Place this data between the <head> tags of your website -->
<title><?php echo $cats['Name'] ?></title>
<meta name="description" content="<?php echo $cats['Describtion'] ?>" />

 <meta name="keywords" content="شقق للبيع ,سيارات للبيع ,عقارات ,للبيع ,بيع وشراء ,بيع واشتري ,موقع بيع وشراء,مواقع اعلانات مجانية ,اعلانات مجانية ,المبوبة,
اعلان وظائف ,اعلانات,اعلانات تجارية ,اعلانات مبوبة ,وظائف مصر ,ابحث عن وظيفة ,شركات توظيف ,سيارات مستعملة ,وظائف خالية بالاسكندرية ,
وظائف خالية فى الاسكندرية ,سوق مصر ,selling sites ,sell furniture ,
sell clothes ,sell electronics ,business advertising ,advertising websites ,online advertisement ,ad sites ,
create ads ,free advertising ,local advertising ,buy and sell furniture ,buy and sell clothes ,buy sell ads ,سيارات ,مطلوب للعمل ,
المبوبة ,مطلوب موظفين ,الاعلان ,مطلوب,صور اعلانات ,اعلان,علانات,اعلانات,شركات توظيف ,
سيارات قديمة للبيع ,سيارات مستعملة ,سيارات مستعملة مصر ,اسعار السيارات المستعملة ,سوق السيارات المستعملة ,عقار,شقق,تسوق ملابس ,مواقع تسوق ,ت
سوق,شراء من الانترنت ,سيارات,اسعار السيارات ,عقارات,عربيات للبيع ,بيع وشراء ,عقارات للبيع ">
<!-- Schema.org markup for Google+ -->
<meta itemprop="name" content="<?php echo $cats['Name'] ?>">
<meta itemprop="description" content="<?php echo $cats['Describtion'] ?>">
<meta itemprop="image" content="http://adsesta.com/layout/images/adsesta.com.jpg">

<!-- Twitter Card data -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="<?php echo $cats['Name'] ?>">
<meta name="twitter:description" content="<?php echo $cats['Describtion'] ?>">
<meta name="twitter:creator" content="@adsesta.com">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image:src" content="http://adsesta.com/layout/images/adsesta.com.jpg">

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo $cats['Name'] ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://www.adsesta.com<?php echo $_SERVER['REQUEST_URI']; ?>" />
<meta property="og:image" content="http://adsesta.com/layout/images/adsesta.com.jpg" />
<meta property="og:description" content="<?php echo $cats['Describtion'] ?>" />
<meta property="og:site_name" content="adsesta.com" />
<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" />
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
