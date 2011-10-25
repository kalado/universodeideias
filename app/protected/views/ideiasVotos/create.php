<?php
$this->breadcrumbs=array(
	'Ideias Votoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List IdeiasVotos', 'url'=>array('index')),
	array('label'=>'Manage IdeiasVotos', 'url'=>array('admin')),
);
?>

<h1>Create IdeiasVotos</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>