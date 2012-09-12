<?php $this->beginContent('//layouts/main'); ?>

        <div id="sidebar" >
                <?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu');?>
        </div>

        <?php echo $content; ?>


<?php $this->endContent(); ?>