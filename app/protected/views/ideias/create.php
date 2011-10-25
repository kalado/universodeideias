<?php
$this->breadcrumbs=array(
	'Ideiases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ideias', 'url'=>array('index')),
	array('label'=>'Manage Ideias', 'url'=>array('admin')),
);
?>

<h1>Create Ideias</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>