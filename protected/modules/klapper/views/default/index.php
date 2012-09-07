<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<div>
    Welcome to Klapper time!
</div>
<?php $this->beginWidget('CActiveForm');
$this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Primary',
    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // '', 'large', 'small' or 'mini'
));
$this->widget('bootstrap.widgets.BootLabel', array(
    'type'=>'success', // '', 'success', 'warning', 'important', 'info' or 'inverse'
    'label'=>'Success',
)); ?><hr>
<?php echo CHtml::submitButton('Go Spam Him!', array('class'=>'btn btn-inverse btn-large', 'name'=>'spam'));
$this->endWidget();