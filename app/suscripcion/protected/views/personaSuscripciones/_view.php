<?php
/* @var $this PersonaSuscripcionesController */
/* @var $data PersonaSuscripciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personas_idPersona')); ?>:</b>
	<?php echo CHtml::encode($data->personas_idPersona); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('suscripciones_idSuscripcion')); ?>:</b>
	<?php echo CHtml::encode($data->suscripciones_idSuscripcion); ?>
	<br />


</div>