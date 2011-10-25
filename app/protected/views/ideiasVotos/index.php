<?php
$this->breadcrumbs=array(
	'Ideias Votoses',
);

$this->menu=array(
	array('label'=>'Create IdeiasVotos', 'url'=>array('create')),
	array('label'=>'Manage IdeiasVotos', 'url'=>array('admin')),
);
?>

<h1>Ideias Votoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>