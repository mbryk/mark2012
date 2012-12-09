<h1 class="title">The Mark Quiz</h1>
<hr class="style-three">
    <?php $this->beginWidget('CActiveForm'); ?>

<h3>Mark Bryk is ...</h3>
    <?php echo CHtml::checkBoxList('answer', '', $data, array('checkAll'=>'All of \'em', 'checkAllLast'=>true, 'labelOptions'=>array('style'=>'display:inline;padding:20px'))) ?>

<?php echo CHtml::submitButton('Got it!', array('id'=>'my-cool-button')); ?>

<?php $this->endWidget(); ?>


<?php Yii::app()->clientscript->registerCssFile(Yii::app()->theme->baseUrl.'/css/cool_button.css', CClientScript::POS_HEAD); ?>