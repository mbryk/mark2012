<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
    <head>
        <!--
        Created by Artisteer v3.0.0.39952
        Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
        -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/clear_cool.ico" type="image/x-icon" />

        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" type="text/css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shadowbox.css" />

        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/script.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/mootools/1.1.1/mootools-yui-compressed.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/shadowbox.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/main.js"></script>
        
        <script type="text/javascript">
            Shadowbox.init({
    displayNav:         true,
    continuous:         true
});
        </script>        
        
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
        <div id="art-main">
                <div class="cleared reset-box"></div>
					<div class="art-bar art-nav">
						<div class="art-nav-outer">
							<div class="art-nav-wrapper">
								<div class="art-nav-inner">
                                                                        <a href="http://www.markbryk.in"><img width="<?php echo $this->getUniqueId()=='site' && $this->action->Id=='index' ? '250': '100'; ?>" style="float:left" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/my_Logo2.png" /></a>
                                                                    <ul class="art-hmenu">
                                                                                    <li><a title="Home" href="http://www.markbryk.in/"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/home_icon2.png" /></a></li>
                                                                                    <li><a title="Twitter" href="http://twitter.com/markdotbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/twitter_32-2.png" /></a></li>
                                                                                    <li><a title="Facebook" href="http://www.facebook.com/andthefunkybunch/"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/facebook_32-2.png" /></a></li>
                                                                                    <li><a title="8tracks" href="http://8tracks.com/andthefunkybunch"> <img width="32" height="32" src="http://8tracks.com/images/badges/50_px_8chichlet_white_blueBG.png" /> </a></li>
                                                                                    <li><a title="Youtube" href="http://www.youtube.com/user/andthefunkybunch?feature=mhee"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/youtube.png" /></a></li>
                                                                                    <li><a title="Github" href="http://github.com/mbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/github.png" /></a></li>
                                                                                    <li><a title="Contact Me" href="/site/contact"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/contact_icon.png" /></a></li>
                                                                                    <li><a title="About" href="/site/page?view=about"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/help_icon.png" /></a></li>
                                                                                    <?php if ($this->getUniqueId()=='site' && $this->action->Id=='hillel'): ?> 
                                                                                        <li><a title="Go to co.nr" href="http://co.nr"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/css/images/my/help_icon.png" /></a></li>
                                                                                    <?php endif ?>
                                                                                    <!--<h1 class="art-logo-name"><a href="#"><?php echo isset(Yii::app()->params['art-logo-name']) ? Yii::app()->params['art-logo-name'] : Yii::app()->name; ?></a></h1>
                                                                                    <h2 class="art-logo-text"><?php echo Yii::app()->params['art-logo-text']; ?></h2>-->
                                                                    </ul>
								</div>
                                                            
							</div>
						</div>
					</div>
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
