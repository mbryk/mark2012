Spamming time!
<?php $this->beginWidget('CActiveForm') ; ?>
<?php echo CHtml::textField('subject','', array('placeholder'=>'subject', 'class'=>'span3')); ?><br>
<?php echo CHtml::textArea('body','', array('placeholder'=>'content', 'class'=>'span6')); ?><br>
<?php echo CHtml::textField('from','', array('placeholder'=>'From:')); ?><br>
<?php echo CHtml::textField('to','', array('placeholder'=>'To:')); ?><br>

<?php echo CHtml::submitButton('Send It!', array('name'=>'submit', 'class'=>'btn btn-large btn-success'));
$this->endWidget(); ?>
        
