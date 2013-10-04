<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personases'=>array('index'),
	$model->idPersona,
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'Update Personas', 'url'=>array('update', 'id'=>$model->idPersona)),	
        array('label'=>'Delete Personas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPersona),'confirm'=>'Are you sure you want to delete this item?')),	
        array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>

<h1>View Personas # <?php echo $model->idPersona; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idPersona',
		'nombre',
		'apellido',
		'correoElectronico',
	),
)); ?>
