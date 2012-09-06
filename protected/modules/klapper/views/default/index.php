<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<div>
    Welcome to Klapper time!
</div>
<button class="btn btn-success">Test Button</button>
<?php $this->widget('bootstrap.widgets.BootButton', array(
    'label'=>'Primary',
    'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
    'size'=>'large', // '', 'large', 'small' or 'mini'
)); ?>
<?php $this->widget('bootstrap.widgets.BootLabel', array(
    'type'=>'success', // '', 'success', 'warning', 'important', 'info' or 'inverse'
    'label'=>'Success',
)); ?>