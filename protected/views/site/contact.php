<h1 class="title">Contact Me</h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<hr class="style-one">
<p style="text-align: center">
If there's something strange in your neighborhood, Who ya gonna call?
</p>
<br>

<div class="commentForm">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<?php echo $form->errorSummary($model); ?>
        <fieldset>
            
		<?php //echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name', array('class'=>'nameField')); ?>
		<?php echo $form->error($model,'name'); ?>

		<?php //echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email', array('class'=>'emailField')); ?>
		<?php echo $form->error($model,'email'); ?>

		<?php //echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128, 'class'=>'subjectField')); ?>
		<?php echo $form->error($model,'subject'); ?>

		<?php //echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50, 'class'=>'commentField')); ?>
		<?php echo $form->error($model,'body'); ?>

            <hr class="style-one">

	<?php if(0):if(CCaptcha::checkRequirements()): ?>
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint">Please enter the letters as they are shown in the image above.
		<br/>Letters are not case-sensitive.</div>
		<?php echo $form->error($model,'verifyCode'); ?>
	<?php endif;endif; ?>

		<?php echo CHtml::submitButton('Submit', array('class'=>'sendButton')); ?>
        </fieldset>

<?php $this->endWidget(); ?>
</div>
<?php endif; ?>

<?php Yii::app()->clientScript->registerCssFile(Yii::app()->theme->baseUrl.'/css/form.css',CClientScript::POS_HEAD);