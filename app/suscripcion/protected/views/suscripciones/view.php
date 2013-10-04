<?php
/* @var $this SuscripcionesController */
/* @var $model Suscripciones */

$this->breadcrumbs=array(
	'Suscripciones'=>array('index'),
	$model->idSuscripcion,
);

$this->menu=array(
	array('label'=>'List Suscripciones', 'url'=>array('index')),
	array('label'=>'Create Suscripciones', 'url'=>array('create')),
	array('label'=>'Update Suscripciones', 'url'=>array('update', 'id'=>$model->idSuscripcion)),	
        array('label'=>'Delete Suscripciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSuscripcion),'confirm'=>'Are you sure you want to delete this item?')),	
        array('label'=>'Manage Suscripciones', 'url'=>array('admin')),
);
?>

<h1>View Suscripciones # <?php echo $model->idSuscripcion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSuscripcion',
		'nombre',
		'estado',
	),
)); ?>
