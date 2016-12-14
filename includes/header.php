<!--[if lt IE 10]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<?php //include('includes/loader.php'); ?>
<?php //include('includes/responsive.php'); ?>
<?php
$links = array(null, null, null, null, null);
switch($fileName) {
    case 'ergonomics':
        $links[0] = 'active';
    break;
    case 'sports':
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
                        <li class="<?php echo $links[0]; ?>"><a id="nav_menu_ergonomics" href="/ergonomics">Ergonomics <span></span></a></li>
                        <li class="<?php echo $links[1]; ?>"><a id="nav_menu_sports" href="/sports">Sports <span></span></a></li>
                        <li class="<?php echo $links[2]; ?>"><a id="nav_menu_about" href="/about" role="button">About Us <span></span></a></li>
                        <li class="<?php echo $links[4]; ?>"><a id="nav_menu_quote" class="btn btn-sm" href="/project#fromNavbar">Start Your Project</a></li>
                        <li class="<?php echo $links[3]; ?> light-button"><a id="nav_menu_signup" href="/signup#fromNavbar" role="button">Sign Up</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
    </header>
    <!-- Header -->
