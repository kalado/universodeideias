<?php
$this->breadcrumbs=array(
	'Ideias Updates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IdeiasUpdates', 'url'=>array('index')),
	array('label'=>'Create IdeiasUpdates', 'url'=>array('create')),
	array('label'=>'Update IdeiasUpdates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IdeiasUpdates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IdeiasUpdates', 'url'=>array('admin')),
);
?>

<h1>View IdeiasUpdates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuarios_id',
		'ideias_id',
		'descricao',
		'dtinicial',
		'_id',
	),
)); ?>