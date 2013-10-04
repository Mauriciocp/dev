<?php
/* @var $this PersonaSuscripcionesController */
/* @var $model PersonaSuscripciones */

$this->breadcrumbs=array(
	'Persona Suscripciones'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PersonaSuscripciones', 'url'=>array('index')),
	array('label'=>'Create PersonaSuscripciones', 'url'=>array('create')),
	array('label'=>'Update PersonaSuscripciones', 'url'=>array('update', 'id'=>$model->id)),	
        array('label'=>'Delete PersonaSuscripciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),	
        array('label'=>'Manage PersonaSuscripciones', 'url'=>array('admin')),
);
?>

<h1>View PersonaSuscripciones # <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'personas_idPersona',
		'suscripciones_idSuscripcion',
	),
)); ?>
