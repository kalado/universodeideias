<?php
$this->breadcrumbs=array(
	'Ideias Updates',
);

$this->menu=array(
	array('label'=>'Create IdeiasUpdates', 'url'=>array('create')),
	array('label'=>'Manage IdeiasUpdates', 'url'=>array('admin')),
);
?>

<h1>Ideias Updates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>