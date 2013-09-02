<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your page name</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        
        <!-- ///////////////////////////////////////////////////////////////////
        Stylesheet 
        /////////////////////////////////////////////////////////////////////-->
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen"  />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" media="screen"  />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/prettyPhoto.css">
        <!-- SLIDERS -->
		<link rel="stylesheet" href="css/royalslider.css">
        <link rel="stylesheet" href="css/rs-default-inverted.css">
		<!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
        <!--[if IE 9]><link rel="stylesheet" href="css/ie9.css" type="text/css" media="screen" /><![endif]-->
        <!--[if IE 8]><link rel="stylesheet" href="css/ie8.css" type="text/css" media="screen" /><![endif]-->
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

<body>
        <div id="page">
            <!-- ///////////////////////////////////////////////////////////////////
            Wrapper top -> Header + Blue area (slider, page name)
            /////////////////////////////////////////////////////////////////////-->
            <section id="wrapper_top">
                
                <div id="shadow_header_container">
                    <!-- // Header (logo + menu) // -->
                    <header>
                        <div class="container">
                            <div id="logo" class="pull-left">
                                <a href="<?php echo Yii::app()->baseUrl; ?>/index.php"><img src="images/logo.png" alt="your logo goes here ! "></a>
                            </div><!-- end #logo -->
                            <nav class="pull-right navmenu">
                                <ul class="unstyled sf-menu">
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=/site/login" class="btn-menu">Login</a>
                                        <ul class="unstyled">
                                            <li>
                                                <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=site/logout">Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=project/" class="btn-menu">Projects</a>
                                            <ul class="unstyled">
                                                <li><a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=project/create">Create New Project</a></li>
                                                
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=user/" class="btn-menu">Users</a>
                                            
                                    </li>
                                    <li>
                                        <a href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=user/create/" class="btn-menu">Sign Up</a>
                                            
                                    </li>
                                    <li><a href="contact.html" class="btn-menu">Contact</a></li>
                                </ul>
                            </nav><!-- end nav -->
                        </div><!-- end .container -->
                    </header><!-- end header -->
                </div><!-- end #shadow_header_container -->
            </section><!-- end #wrapper_top -->
            
            
            
            <!-- ///////////////////////////////////////////////////////////////////
            Main container
            /////////////////////////////////////////////////////////////////////-->
            <section id="wrapper_main_container">
                
                <div id="main_container" class="container">
                    <div class="row">
                        <div class="span12">
                            <?php if(isset($this->breadcrumbs)):?>
                            <?php $this->widget('zii.widgets.CBreadcrumbs', array('links'=>$this->breadcrumbs,)); ?><!-- breadcrumbs -->
                            <?php endif?>
                            
                            <?php echo $content; ?>
                        </div>
                        
                       
                    </div><!-- end .row -->
                </div><!-- end #main_container -->
                
                <!-- ///////////////////////////////////////////////////////////////////
                Bottom area (widgets)
                /////////////////////////////////////////////////////////////////////-->
                <div id="wrapper_bottom_area">
                   
                </div><!-- end #wrapper_bottom_area -->
                
            </section><!-- end #wrapper_main_container -->

            
            
            <!-- ///////////////////////////////////////////////////////////////////
            Bottom navigation + Social icons
            /////////////////////////////////////////////////////////////////////-->
            <section id="wrapper_bottom_navigation">
                
                <div id="bottom_navigation" class="container">
                    <nav>
                        <ul class="unstyled">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="portfolio_4col.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="sitemap.html">Sitemap</a></li>
                        </ul>
                    </nav>
                    
                    <div class="social_icons_footer">
                        <div class="pull-right">
                            <a href="#" data-tip="top" data-original-title="Join us on facebook"><img src="images/icons_social/facebook.png" alt="facebook icon"  height="22" width="22" class="a_social_icon  facebook"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on twitter"><img src="images/icons_social/twitter.png" alt="twitter icon" height="22" width="22" class="a_social_icon twitter"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on google +"><img src="images/icons_social/gplus.png" alt="gplus icon"  height="22" width="22" class="a_social_icon gplus"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on youtube"><img src="images/icons_social/youtube.png" alt="youtube icon"  height="22" width="22" class="a_social_icon youtube"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on vimeo"><img src="images/icons_social/vimeo.png" alt="vimeo icon"  height="22" width="22" class="a_social_icon vimeo"></a>
                            <a href="#" data-tip="top" data-original-title="Subscribe our rss feed"><img src="images/icons_social/rss.png" alt="rss icon"  height="22" width="22" class="a_social_icon rss"></a>
                            <!-- disabled // choose yours !
                            <a href="#" data-original-title=""><img src="images/icons_social/addthis.png" alt="addthis icon"  height="22" width="22" class="a_social_icon addthis"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on behance"><img src="images/icons_social/behance.png" alt="behance icon"  height="22" width="22" class="a_social_icon behance"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on blogger"><img src="images/icons_social/blogger.png" alt="blogger icon"  height="22" width="22" class="a_social_icon blogger"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on digg"><img src="images/icons_social/digg.png" alt="digg icon"  height="22" width="22" class="a_social_icon digg"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on dribbble"><img src="images/icons_social/dribbble.png" alt="dribbble icon"  height="22" width="22" class="a_social_icon dribbble"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on flickr"><img src="images/icons_social/flickr.png" alt="flickr icon"  height="22" width="22" class="a_social_icon flickr"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on instagram"><img src="images/icons_social/instagram.png" alt="instagram icon"  height="22" width="22" class="a_social_icon instagram"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on lastfm"><img src="images/icons_social/lastfm.png" alt="lastfm icon"  height="22" width="22" class="a_social_icon lastfm"></a>
                            <a href="#" data-original-title=""><img src="images/icons_social/like.png" alt="like icon"  height="22" width="22" class="a_social_icon like"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on linkedin"><img src="images/icons_social/linkedin.png" alt="linkedin icon"  height="22" width="22" class="a_social_icon linkedin"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on livejournal"><img src="images/icons_social/livejournal.png" alt="livejournal icon"  height="22" width="22" class="a_social_icon livejournal"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on myspace"><img src="images/icons_social/myspace.png" alt="myspace icon"  height="22" width="22" class="a_social_icon myspace"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on paypal"><img src="images/icons_social/paypal.png" alt="paypal icon"  height="22" width="22" class="a_social_icon paypal"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on picasa"><img src="images/icons_social/picasa.png" alt="picasa icon"  height="22" width="22" class="a_social_icon picasa"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on reddit"><img src="images/icons_social/reddit.png" alt="reddit icon"  height="22" width="22" class="a_social_icon reddit"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on sharethis"><img src="images/icons_social/sharethis.png" alt="sharethis icon"  height="22" width="22" class="a_social_icon sharethis"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on skype"><img src="images/icons_social/skype.png" alt="skype icon"  height="22" width="22" class="a_social_icon skype"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on spotify"><img src="images/icons_social/spotify.png" alt="spotify icon"  height="22" width="22" class="a_social_icon spotify"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on stumbleupon"><img src="images/icons_social/stumbleupon.png" alt="stumbleupon icon"  height="22" width="22" class="a_social_icon stumbleupon"></a>
                            <a href="#" data-tip="top" data-original-title="Join us on tumblr"><img src="images/icons_social/tumblr.png" alt="tumblr icon"  height="22" width="22" class="a_social_icon tumblr"></a>
                            <a href="#" data-tip="top" data-original-title="Follow us on wordpress"><img src="images/icons_social/wordpress.png" alt="wordpress icon"  height="22" width="22" class="a_social_icon wordpress"></a>
                            -->
                        </div>
                    </div><!-- end .social_icons -->
                </div><!-- end #bottom_navigation -->
                
            </section><!-- end #wrapper_bottom_navigation -->
            
            
            <!-- ///////////////////////////////////////////////////////////////////
            Footer
            /////////////////////////////////////////////////////////////////////-->
            <section id="wrapper_footer">
                
                <footer class="container text_shadow">
                    <p><strong>Sun Rising</strong> &#169; 2012 All rights reserved | Designed by <a href="http://bit.ly/SARKnL">F&#178; </a></p>
                    
                    <!-- ///////////////////////////////////////////////////////////////////
                    Javascript files
                    /////////////////////////////////////////////////////////////////////-->
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                    <script type="text/javascript" src="js/superfish.js" ></script>
                    <script type="text/javascript" src="js/jquery.royalslider.min.js" ></script>
                    <script type="text/javascript" src="js/bootstrap.min.js" ></script>
                    <script type="text/javascript" src="js/jquery.prettyPhoto.js" ></script>
                    <script type="text/javascript" src="js/jquery.isotope.min.js" ></script>
					<script type="text/javascript" src="js/jquery.tweet.js" ></script>
                    <script type="text/javascript" src="js/main.js" ></script>
                </footer><!-- end #footer -->
                
            </section><!-- end #wrapper_footer -->
        </div><!-- end #page -->
    </body>
</html>

    
<?php 
/*
<div id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
*/
?>