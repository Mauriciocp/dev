<?php
/* @var $this PersonasController */
/* @var $model Personas */

$this->breadcrumbs=array(
	'Personases'=>array('index'),
        $model->idPersona=>array('view','id'=>$model->idPersona),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personas', 'url'=>array('index')),
	array('label'=>'Create Personas', 'url'=>array('create')),
	array('label'=>'View Personas', 'url'=>array('view', 'id'=>$model->idPersona)),
	array('label'=>'Manage Personas', 'url'=>array('admin')),
);
?>


<h1>Update Personas <?php echo $model->idPersona; ?></h1>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>