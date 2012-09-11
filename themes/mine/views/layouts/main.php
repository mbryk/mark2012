<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
    <head>
        <!--
        Created by Artisteer v3.0.0.39952
        Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
        -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>

        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="screen, projection" />
        <link href="../assets/css/bootstrap.css" rel="stylesheet">
        <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">		
        
        <!-- <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/form.css" type="text/css" media="screen, projection" /> -->
        <!--[if IE 6]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie6.css" type="text/css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.ie7.css" type="text/css" media="screen" /><![endif]-->

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/script.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33169527-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>        
    </head>
    <body>
	<?php if ($this->getUniqueId()=='site' && $this->action->Id=='index'): ?>
		<div id="art-page-background-glare-wrapper">
			<div id="art-page-background-glare"></div>
		</div>
	<?php endif; ?>	
        <div id="art-main">
                <div class="cleared reset-box"></div>
					<div class="art-bar art-nav">
						<div class="art-nav-outer">
							<div class="art-nav-wrapper">
								<div class="art-nav-inner">
        									<p>
                                                                                    <a href="http://twitter.com/markdotbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/twitter_32-2.png" /></a>
                                                                                    <a href="http://www.facebook.com/andthefunkybunch/"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/facebook_32-2.png" /></a>
                                                                                    <a href="http://github.com/mbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/github.png" /></a>
                                                                                    <a href="http://www.youtube.com/user/andthefunkybunch?feature=mhee"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/youtube.png" /></a>
                                                                                </p>                                                                    
									<?php
										$this->widget('application.components.ArtMenu', array(
											'cls' => 'art-hmenu',
											'prelinklabel' => '<span class="l"></span><span class="r"></span><span class="t">',
											'postlinklabel' => '</span>',
											'items' => array(
												array('label' => 'Home', 'url' => array('/site/index')),
												array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
												array('label' => 'Contact', 'url' => array('/site/contact')),
												array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
												array('label' => 'Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
											),
										));
									?>
								</div>
							</div>
						</div>
					</div>
            <div class="cleared reset-box"></div>
	<?php if ($this->getUniqueId()=='site' && $this->action->Id=='index'): ?>		
            <div class="art-header">
                <div class="art-header-position">
                <div class="art-header-wrapper">
					<div class="cleared reset-box"></div>
                    <div class="art-header-inner">
                        <div class="art-headerobject"></div>
                        <div class="art-logo">
                            <h1 class="art-logo-name"><a href="#"><?php echo isset(Yii::app()->params['art-logo-name']) ? Yii::app()->params['art-logo-name'] : Yii::app()->name; ?></a></h1>
                            <h2 class="art-logo-text"><?php echo Yii::app()->params['art-logo-text']; ?></h2>
                        </div>
                    </div>
                </div>
				</div>
			</div>
            <?php endif; ?>
            <div class="cleared reset-box"></div>
			
			<div class="art-box art-sheet">
				<div class="art-box-body art-sheet-body">
					<div class="art-layout-wrapper">
						<div class="art-content-layout">
							<div class="art-content-layout-row">
								<!-- removed sidebar HTML and set aside -->
								<!-- goes before ..."art-layout-cell art-content" in page.html original -->
								<!-- Main content goes here -->
								<?php echo $content; ?>
                                                                
							</div>
							<div class="cleared"></div>
						</div> <div class="cleared"></div>


                                                </div>
                    </div>
				</div>
			</div> <div class="cleared"></div>
			<div class="cleared"></div>
		</div>
    </body>
</html>
