<?php

/* =======================================
Defines directory for images, css, scripts, titles, and descriptions
======================================= */
$dir = array_filter(explode("/", $_SERVER['PHP_SELF']));

// General helper class.
// $helperPath = count($dir) == 2 ? '../php/HeddokoHelperClass.php' : 'php/HeddokoHelperClass.php';
// include_once $helperPath;
include_once realpath(__DIR__) .'/../php/HeddokoHelperClass.php';

if (count($dir) > 1)
{
	switch($dir[1])
    {
		case 'product':
			$title = '| Real-time biomechanics for ergonomics and sports';
			$description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

		case 'about':
			$title = '| Real-time biomechanics for ergonomics and sports';
			// $description = 'Who we are: makers of smart clothing';
            $description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

		case 'press':
			$title = '| Real-time biomechanics for ergonomics and sports';
			$description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

		case 'faq':
			$title = '| Real-time biomechanics for ergonomics and sports';
			// $description = 'If you have questions regarding our smart compression suit or '.
            //     'athelete management system and how they works, don\'t hesitate to ask!';
            $description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

		case 'signup':
			$title = '| Real-time biomechanics for ergonomics and sports';
			$description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

		case '404':
			$title = '| Page not found.';
			$description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
		break;

        default:
            $title = '';
            $description = 'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
	}
	$dir = '/../';
} else {
	$title = '| Real-time biomechanics for ergonomics and sports';
    // $description =  'Heddoko empowers perfection in human movement. The only fitness wearable '.
    //                 'technology to provide real-time 3D corrective feedback.';
    $description =  'A wearable motion capture system that captures and analyzes human movement data to reduce the risk of injury and improve performance.';
	$dir = '/';
} ?>
<!-- Meta -->
<meta charset="utf-8">
<meta name="keywords" content="smart compression suit, smart clothing, motion tracking, motion capture, mocap, athlete management system" />
<meta name="description" content="<?php echo $description; ?>">
<meta name="author" content="">
<meta name="p:domain_verify" content="fc3c9cbdd7425794cf665b51fdbc88e4">

<title>Heddoko <?= $title; ?></title>

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicons -->
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $dir; ?>images/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $dir; ?>images/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $dir; ?>images/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $dir; ?>images/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $dir; ?>images/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $dir; ?>images/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $dir; ?>images/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $dir; ?>images/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $dir; ?>images/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $dir; ?>images/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $dir; ?>images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $dir; ?>images/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $dir; ?>images/favicon-16x16.png">
<link rel="manifest" href="<?php echo $dir; ?>images/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php echo $dir; ?>images/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<!-- facebook -->
<meta property="og:title" content="Heddoko <?php echo $title; ?>" />
<meta property="og:type" content="website" />
<meta property="og:url" content="heddoko.com<?php echo $dir; ?>" />
<meta property="og:site_name" content="Heddoko"/>
<meta property="og:image" content="http://heddoko.com/images/android-icon-48x48.png" />
<meta property="og:description" content="<?php echo $description; ?>" />
<!-- end facebook -->


<!--Twitter Card -->
<meta name="twitter:card" content="<?php echo $description;?>" />
<meta name="twitter:site" content="@heddoko" />
<meta name="twitter:title" content="Heddoko <?php echo $title;?>" />
<meta name="twitter:description" content="<?php echo $description;?>" />
<meta name="twitter:image" content="http://heddoko.com/images/android-icon-48x48.png" />
<!--end twitter-->

<!-- Custom Google Web Font -->
<link href="<?php echo $dir; ?>font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="<?php echo $dir; ?>css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo $dir; ?>css/style.css" rel="stylesheet">
<link href="<?php echo $dir; ?>js/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="<?php echo $dir; ?>js/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>css/component.css" />

<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="<?php echo $dir; ?>css/font.css" />

<!--[if lt IE 9]>
  	<script src="<?php echo $dir; ?>/js/libs/html5shiv.js"></script>
      <script src="<?php echo $dir; ?>./js/libs/respond.js"></script>
<![endif]-->

<link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="/css/select2-bootstrap.min.css">

<!-- Style Switch -->
<link rel="stylesheet" href="<?php echo $dir; ?>css/colors/heddoko.css" />
<link rel="stylesheet" href="<?php echo $dir; ?>css/defaults.css?20160405" />
<link rel="stylesheet" href="<?php echo $dir; ?>css/v2.css?20160406.1" />
<link rel="stylesheet" href="<?php echo $dir; ?>css/v2-responsive.css?20160406.1" />

<!-- WEBFONTS -->
<!-- insert script here -->

<!-- HOT JAR -->
<!-- Hotjar Tracking Code for www.heddoko.com -->
<script>
    (function(f,b){
        var c;
        f.hj=f.hj||function(){(f.hj.q=f.hj.q||[]).push(arguments)};
        f._hjSettings={hjid:35601, hjsv:4};
        c=b.createElement("script");c.async=1;
        c.src="//static.hotjar.com/c/hotjar-"+f._hjSettings.hjid+".js?sv="+f._hjSettings.hjsv;
        b.getElementsByTagName("head")[0].appendChild(c);
    })(window,document);
</script>
