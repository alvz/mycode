<?php
$this->breadcrumbs=array(
	'Tbl Users'=>array('index'),
	$model->id,
);

/**$this->menu=array(
	array('label'=>'List ', 'url'=>array('index')),
	array('label'=>'Create ', 'url'=>array('create')),
	array('label'=>'Update ', 'url'=>array('update', 'id'=>$model->)),
	array('label'=>'Delete ', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ', 'url'=>array('admin')),
);*/
?>

<h1>View TblUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
	),
)); ?>
