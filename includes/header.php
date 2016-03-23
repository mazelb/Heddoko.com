<!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php //include('includes/loader.php'); ?>
<?php //include('includes/responsive.php'); ?>

<?php
$links = array(null, null, null, null, null, null, null, null);
switch($fileName) {
	case 'product':
		$links[1] = 'active';
	break;
	case 'about':
		$links[2] = 'active';
	break;
	case 'signup':
		$links[3] = 'active';
	break;
	case 'quote':
		$links[4] = 'active';
	break;
}
?>
<!-- Header -->
<header itemscope itemtype="http://schema.org/WPHeader">
<!--Facebook like button -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<svg height="0" width="0">
  <filter id="fb-filter">
    <feColorMatrix type="hueRotate" values="292"/>
    <feColorMatrix type="saturate" values="5.5"/>
  </filter>
</svg>
<style>
  .fb-like{
    -webkit-filter: url(#fb-filter);
    filter: url(#fb-filter);
  }
</style>
<!-- end styling for facebook like button-->

	<nav class="navbar navbar-custom navbar-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
					<i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand" href="/">
					<img src="<?php echo $dir; ?>images/heddoko_logo.svg" alt="Heddoko">
				</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right navbar-main-collapse">
				<ul class="nav navbar-nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
					<li class="<?php echo $links[1]; ?>"><a id="nav_menu_product" href="/product">Product <span></span></a></li>
					<li class="<?php echo $links[2]; ?>"><a id="nav_menu_about" href="/about" role="button">About Us <span></span></a>
          <li class="">
              <a id="nav_menu_signup" href="/signup">
                  Sign Up <span></span>
              </a>
          </li>
           <li class="">
              <a id="nav_menu_quote" class="btn btn-sm" href="/quote">
                  Request a Quote 
              </a>
          </li>
					<li><a id="nav_menu_FR" href="/FR/"><img src="/images/flag_france_64.png" alt="Switch language to French" class="flag"> <span></span></a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container -->
	</nav>
</header>
<!-- Header -->
