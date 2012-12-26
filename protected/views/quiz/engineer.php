<h1 class="title">The Mark Quiz</h1>
<hr class="style-three">
    <?php $this->beginWidget('CActiveForm'); ?>

<h3>Mark Bryk is ...</h3>
    <?php //echo CHtml::checkBoxList('answer', '', $data, array('checkAll'=>'All of \'em', 'checkAllLast'=>true, 'labelOptions'=>array('style'=>'display:inline;padding:20px;font-family:"Brush Script MT", cursive;font-size:30px;line-height:40px'))) ?>

<div class="cool_checks" style="padding: 20px 0;">
<?php echo CHtml::checkBox('answer[]', false, array('class'=>'regular-checkbox big-checkbox', 'id'=>'checkbox-2-1', 'value'=>'1')) ?>
<label for="checkbox-2-1">Beautiful</label>
<?php echo CHtml::checkBox('answer[]', false, array('class'=>'regular-checkbox big-checkbox', 'id'=>'checkbox-2-2', 'value'=>'2')) ?>
<label for="checkbox-2-2">Fascinating</label>
<?php echo CHtml::checkBox('answer[]', false, array('class'=>'regular-checkbox big-checkbox', 'id'=>'checkbox-2-3', 'value'=>'3')) ?>
<label for="checkbox-2-3">Weird</label>
<?php echo CHtml::checkBox('answer[]', false, array('class'=>'regular-checkbox big-checkbox', 'id'=>'checkbox-2-4', 'value'=>'4')) ?>
<label for="checkbox-2-4">Surprising</label>
</div>

<!--<div class="roundedOne">
        <?php echo CHtml::checkBox('answer[]', false, array('value'=>'1', 'id'=>'roundedOne', 'style'=>'visibility:hidden')); ?>
        <label for="roundedOne"></label>
</div>
<div class="roundedOne">
        <?php echo CHtml::checkBox('answer[]', false, array('value'=>'2', 'id'=>'answer_2', 'style'=>'visibility:hidden')); ?>
        <label for="answer_2"></label>
</div>-->

<?php echo CHtml::submitButton('Got it!', array('id'=>'my-cool-button')); ?>

<?php $this->endWidget(); ?>

<?php Yii::app()->clientscript->registerCssFile(Yii::app()->theme->baseUrl.'/css/cool_button.css', CClientScript::POS_HEAD); ?>
<?php Yii::app()->clientscript->registerCssFile(Yii::app()->theme->baseUrl.'/css/special/inputs.css', CClientScript::POS_HEAD); ?>