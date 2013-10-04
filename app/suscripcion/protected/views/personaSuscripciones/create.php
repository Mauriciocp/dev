<?php
/* @var $this PersonaSuscripcionesController */
/* @var $model PersonaSuscripciones */

$this->breadcrumbs=array(
	'Persona Suscripciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonaSuscripciones', 'url'=>array('index')),
	array('label'=>'Manage PersonaSuscripciones', 'url'=>array('admin')),
);
?>

<h1>Create PersonaSuscripciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>