<?php
Yii::app()->clientScript->registerScript(
   'myHideEffect',
   '$(".info").animate({opacity: 1.0}, 3000).fadeOut("slow");',
   CClientScript::POS_READY
);
?>
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="info">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

<?php $this->beginWidget('CActiveForm', array('htmlOptions'=>array('class'=>'form-horizontal'))) ; ?>
            <legend>Spamming Time</legend>
            <div class="control-group">
              <label class="control-label">Subject</label>
              <div class="controls">
                <?php echo CHtml::textField('subject','Reminder about your invitation from Stephen (Shlomo) Klapper', array('placeholder'=>'Subject', 'class'=>'span6')); ?><br>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Content</label>
              <div class="controls">
                <?php echo CHtml::textArea('body','This is a reminder that on June 4, Stephen (Shlomo) Klapper sent you an invitation to become part of their professional network at LinkedIn.', array('placeholder'=>'Body', 'class'=>'span8')); ?><br>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">From</label>
              <div class="controls">
                <?php echo CHtml::textField('from','', array('placeholder'=>'fake.email.address@gmail.com')); ?>
                  <a rel="tooltip" href="#" data-original-title="You can also type in format: <br> First Last &#60;_emailaddress_&#62; " >
                    <i class="icon-question-sign"></i>
                </a>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">To</label>
              <div class="controls">
                <?php echo CHtml::textField('to','', array('placeholder'=>'shlomo.klapper@gmail.com')); ?><br>
              </div>
            </div>         
            
            <div class="control-group">
            <label class="control-label">How Many?</label>
        <div class="controls">
            <?php echo CHtml::dropDownList('amount', '2', array('1'=>'1 (Just to mess with him)', '2'=>'2  (This is gonna be fun)', '3'=>'3  (Damn You Klapper)', '4'=>'4  (I\'ve had it with your shenanigans)')); ?>
        </div>
        </div>
            <?php echo CHtml::submitButton('Send It!', array('name'=>'submit', 'class'=>'btn btn-large btn-success')); ?>
<?php $this->endWidget(); ?>
        
