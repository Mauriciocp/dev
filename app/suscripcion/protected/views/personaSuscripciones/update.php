<?php
/* @var $this PersonaSuscripcionesController */
/* @var $model PersonaSuscripciones */

$this->breadcrumbs=array(
	'Persona Suscripciones'=>array('index'),
        $model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonaSuscripciones', 'url'=>array('index')),
	array('label'=>'Create PersonaSuscripciones', 'url'=>array('create')),
	array('label'=>'View PersonaSuscripciones', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PersonaSuscripciones', 'url'=>array('admin')),
);
?>


<h1>Update PersonaSuscripciones <?php echo $model->id; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>