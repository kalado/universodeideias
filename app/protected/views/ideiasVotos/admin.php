<?php
$this->breadcrumbs=array(
	'Ideias Votoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List IdeiasVotos', 'url'=>array('index')),
	array('label'=>'Create IdeiasVotos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('ideias-votos-grid', {
		data: $(this).serialize()
	});
	return false;
});
");

?>

<h1>Manage Ideias Votoses</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ideias-votos-grid',
	'dataProvider'=>new EMongoDocumentDataProvider($model->search(), array(
		'sort'=>array(
			'attributes'=>array(
				'id',
				'usuarios_id',
				'ideias_id',
				'voto',
				'data',
				'_id',
			),
		),
	)),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'usuarios_id',
		'ideias_id',
		'voto',
		'data',
		'_id',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>