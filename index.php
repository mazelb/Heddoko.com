<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="en"
							  xmlns:og="http://ogp.me/ns#"
     						  xmlns:fb="https://www.facebook.com/2008/fbml"> <!--<![endif]-->
<head>

	<?php include('includes/meta.php'); ?>

	<?php $fileName =  str_replace('.php', '', basename($_SERVER['PHP_SELF']) ); ?>

	<link rel="stylesheet" href="css/index.css?20150922" />
</head>

<body id="page-top" class="template-<?php echo $fileName; ?>" itemscope itemtype="http://schema.org/WebPage">

<?php include('includes/header.php'); ?>

<?php include('includes/index/slider.php'); ?>

<?php include('includes/index/smartgarment.php'); ?>

<?php include('includes/index/seeitlive.php'); ?>

<?php include('includes/index/productbenefits.php'); ?>

<?php include('includes/index/featured.php'); ?>

<?php include('includes/index/partners.php'); ?>

<?php include('includes/index/subscribe.php'); ?>

<?php include('includes/footer.php'); ?>

<!-- page specific -->
<script src="js/index.js?20151013"></script>

</body>
</html>
