<?php
/* @var $this BusinessController */
/* @var $model Business */

$this->breadcrumbs=array(
	'Businesses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Business', 'url'=>array('index')),
	array('label'=>'Create Business', 'url'=>array('create')),
	array('label'=>'Update Business', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Business', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Business', 'url'=>array('admin')),
	array('label'=>'Add Review', 'url'=>array('review/create', 'bid'=>$model->id)),
);
?>

<h1>View Business #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'type',
		'address',
		'geolocation',
		'rating',
		'google_id',
		'update_date',
		'create_date',
	),
)); ?>
