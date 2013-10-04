<?php
/* @var $this SuscripcionesController */
/* @var $model Suscripciones */

$this->breadcrumbs=array(
	'Suscripciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Suscripciones', 'url'=>array('index')),
	array('label'=>'Manage Suscripciones', 'url'=>array('admin')),
);
?>

<h1>Create Suscripciones</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>