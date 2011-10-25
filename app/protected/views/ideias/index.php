<?php
$this->breadcrumbs=array(
	'Ideiases',
);

$this->menu=array(
	array('label'=>'Create Ideias', 'url'=>array('create')),
	array('label'=>'Manage Ideias', 'url'=>array('admin')),
);
?>

<h1>Ideiases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>