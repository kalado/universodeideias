<?php
$this->breadcrumbs=array(
	'Ideias Updates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IdeiasUpdates', 'url'=>array('index')),
	array('label'=>'Create IdeiasUpdates', 'url'=>array('create')),
	array('label'=>'View IdeiasUpdates', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IdeiasUpdates', 'url'=>array('admin')),
);
?>

<h1>Update IdeiasUpdates <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>