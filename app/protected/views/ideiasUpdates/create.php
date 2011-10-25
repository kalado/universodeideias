<?php
$this->breadcrumbs=array(
	'Ideias Updates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IdeiasUpdates', 'url'=>array('index')),
	array('label'=>'Manage IdeiasUpdates', 'url'=>array('admin')),
);
?>

<h1>Create IdeiasUpdates</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>