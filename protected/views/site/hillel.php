<div style="position:relative; margin: 0 auto; width: 500px; padding-top:30px">
    <a href="<?php echo Yii::app()->theme->baseUrl ?>/images/my/hillel.JPG" rel="shadowbox[Doofus]" title="Master Doofus">
        <span style="position:absolute;left:45px;font-size: 75px;font-family: GoodDogRegular, Helvetica, sans-serif;color:#005580;">I am a doofus!</span>
        <img src="<?php echo Yii::app()->theme->baseUrl ?>/images/my/hillel.JPG" width="400" style=" border-radius:30px; -moz-border-radius: 10px; "/>
    </a>
    <a href="<?php echo Yii::app()->theme->baseUrl ?>/images/my/hillel2.JPG" rel="shadowbox[Doofus]" title="Tall Doofus" style="display:none"></a>
    <a href="http://nobarack08.files.wordpress.com/2010/02/doofus.jpg" rel="shadowbox[Doofus]" title="My Royal Doofusness" style="display:none"></a>
</div>

<?php
        Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/js/shadowbox.js',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/shadowbox.css',CClientScript::POS_HEAD);
        Yii::app()->clientScript->registerScript('startGallery', 'jQuery(document).ready(function($){
            Shadowbox.init({displayNav:true, continuous:true});});', CClientScript::POS_HEAD)?>



