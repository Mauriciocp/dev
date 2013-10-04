<?php
/* @var $this PersonaSuscripcionesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Persona Suscripciones',
);

$this->menu=array(
	array('label'=>'Create PersonaSuscripciones', 'url'=>array('create')),
	array('label'=>'Manage PersonaSuscripciones', 'url'=>array('admin')),
);
?>

<h1>Persona Suscripciones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
