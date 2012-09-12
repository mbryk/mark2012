<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<!-- <?php $this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Primary',
    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // '', 'large', 'small' or 'mini'
));
$this->widget('bootstrap.widgets.BootLabel', array(
    'type'=>'success', // '', 'success', 'warning', 'important', 'info' or 'inverse'
    'label'=>'Success',
)); ?> -->
<hr>
<?php echo CHtml::link('Go Spam Him!', '/klapper/default/spam', array('class'=>'btn btn-inverse btn-large')); ?>