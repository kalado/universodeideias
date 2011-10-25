<?php
$this->breadcrumbs=array(
	'Ideiases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Ideias', 'url'=>array('index')),
	array('label'=>'Create Ideias', 'url'=>array('create')),
	array('label'=>'Update Ideias', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Ideias', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ideias', 'url'=>array('admin')),
);
?>

<h1>View Ideias #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'dtinicial',
		'_id',
	),
)); ?>