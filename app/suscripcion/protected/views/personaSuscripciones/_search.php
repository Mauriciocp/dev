<?php
/* @var $this PersonaSuscripcionesController */
/* @var $model PersonaSuscripciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'personas_idPersona'); ?>
		<?php echo $form->textField($model,'personas_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'suscripciones_idSuscripcion'); ?>
		<?php echo $form->textField($model,'suscripciones_idSuscripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->