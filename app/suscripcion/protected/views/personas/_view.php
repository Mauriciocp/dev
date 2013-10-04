<?php
/* @var $this PersonasController */
/* @var $data Personas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPersona')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPersona), array('view', 'id'=>$data->idPersona)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correoElectronico')); ?>:</b>
	<?php echo CHtml::encode($data->correoElectronico); ?>
	<br />


</div>