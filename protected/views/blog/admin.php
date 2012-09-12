<h1>Manage Posts</h1>
Sort Method on Main Page:
<?php $form = $this->beginWidget('CActiveForm') ?>
<?php $sortdata = array(); foreach (BlogSort::model()->findAll() as $sort) $sortdata[$sort->name]= $sort->name; ?> 
<?php echo CHtml::dropDownList('attribute',BlogSort::model()->findByAttributes(array('active'=>1))->name, $sortdata)?>
<?php echo CHtml::submitButton('Set Sort Method', array('name'=>'sort')) ?>
    <?php $this->endWidget(); ?>   

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'name'=>'title',
			'type'=>'raw',
		),
		array(
			'name'=>'status',
			'value'=>'Lookup::item("PostStatus",$data->status)',
			'filter'=>Lookup::items('PostStatus'),
		),
                array(
                        'class' => 'phaEditColumn',
                        'name' => 'create_time',                        
                        'filter'=>false,
                        'actionUrl' => array('admin'),
                ),
		array(
			'class'=>'CButtonColumn',
                        'template'=>'{update}{delete}',
		),
	),
)); ?>
