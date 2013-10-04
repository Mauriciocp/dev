<?php
/* @var $this SuscripcionesController */
/* @var $model Suscripciones */

$this->breadcrumbs=array(
	'Suscripciones'=>array('index'),
        $model->idSuscripcion=>array('view','id'=>$model->idSuscripcion),
	'Update',
);

$this->menu=array(
	array('label'=>'List Suscripciones', 'url'=>array('index')),
	array('label'=>'Create Suscripciones', 'url'=>array('create')),
	array('label'=>'View Suscripciones', 'url'=>array('view', 'id'=>$model->idSuscripcion)),
	array('label'=>'Manage Suscripciones', 'url'=>array('admin')),
);
?>


<h1>Update Suscripciones <?php echo $model->idSuscripcion; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>