<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"[]>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US" xml:lang="en">
    <head>
        <!--
        Created by Artisteer v3.0.0.39952
        Base template (without user's data) checked by http://validator.w3.org : "This page is valid XHTML 1.0 Transitional"
        -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/my/clear_cool.ico" type="image/x-icon" />
        
        <?php 
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/style.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/form.css');
        
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/css/script.js');
        Yii::app()->clientScript->registerScriptFile("//ajax.googleapis.com/ajax/libs/mootools/1.1.1/mootools-yui-compressed.js");
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/main.js');
        ?>

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
        <div style="min-height: 100%; position:relative">
            <div class="header">
                <a href="http://www.markbryk.in"><img width="<?php echo $this->getUniqueId()=='site' && $this->action->Id=='index' ? '250': '100'; ?>" style="float:left" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/my/my_Logo2.png" /></a>
                <ul class="header-menu">
                    <li><a title="Home" href="http://www.markbryk.in/"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/my/home_icon2.png" /></a></li>
                    <li><a title="Twitter" href="http://twitter.com/markdotbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/twitter_32-2.png.png" /></a></li>
                    <li><a title="Facebook" href="http://www.facebook.com/andthefunkybunch/"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/facebook_32-2.png.png" /></a></li>
                    <li><a title="8tracks" href="http://8tracks.com/andthefunkybunch"> <img width="32" height="32" src="http://8tracks.com/images/badges/50_px_8chichlet_white_blueBG.png" style="border-radius:2px" /> </a></li>
                    <li><a title="Youtube" href="http://www.youtube.com/user/andthefunkybunch?feature=mhee"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/youtube_icon.png" /></a></li>
                    <li><a title="Github" href="http://github.com/mbryk"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/github.png" /></a></li>
                    <li><a title="Contact Me" href="/site/contact"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/contact_icon.png" /></a></li>
                    <li><a title="About" href="/site/page?view=about"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/help_icon.png" /></a></li>
                                                                                    <?php if ($this->getUniqueId()=='site' && $this->action->Id=='hillel'): ?> 
                    <li><a title="Go to co.nr" href="http://co.nr"><img width="32" height="32" alt="" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/icons/help_icon.png" /></a></li>
                                                                                    <?php endif ?>
                </ul>
            </div>
            <div class="main-container" <?php if($this->getUniqueId()=='site' && $this->action->Id=='index'): ?> style="padding-top:50px" <?php endif; ?>>
                <?php if(!strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')): ?>
                <div class="art-headerobject"></div>
                <?php endif; ?>
							<?php echo $content; ?>
            </div>
        </div>
    </body>
</html>
