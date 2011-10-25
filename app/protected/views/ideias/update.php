<?php
$this->breadcrumbs=array(
	'Ideiases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ideias', 'url'=>array('index')),
	array('label'=>'Create Ideias', 'url'=>array('create')),
	array('label'=>'View Ideias', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Ideias', 'url'=>array('admin')),
);
?>

<h1>Update Ideias <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>