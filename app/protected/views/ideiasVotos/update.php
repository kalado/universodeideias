<?php
$this->breadcrumbs=array(
	'Ideias Votoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List IdeiasVotos', 'url'=>array('index')),
	array('label'=>'Create IdeiasVotos', 'url'=>array('create')),
	array('label'=>'View IdeiasVotos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage IdeiasVotos', 'url'=>array('admin')),
);
?>

<h1>Update IdeiasVotos <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>