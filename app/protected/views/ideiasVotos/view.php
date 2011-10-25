<?php
$this->breadcrumbs=array(
	'Ideias Votoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List IdeiasVotos', 'url'=>array('index')),
	array('label'=>'Create IdeiasVotos', 'url'=>array('create')),
	array('label'=>'Update IdeiasVotos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete IdeiasVotos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage IdeiasVotos', 'url'=>array('admin')),
);
?>

<h1>View IdeiasVotos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'usuarios_id',
		'ideias_id',
		'voto',
		'data',
		'_id',
	),
)); ?>