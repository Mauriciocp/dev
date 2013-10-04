<?php
/* @var $this SuscripcionesController */
/* @var $data Suscripciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSuscripcion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSuscripcion), array('view', 'id'=>$data->idSuscripcion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />


</div>