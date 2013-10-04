<?php
/* @var $this PersonaSuscripcionesController */
/* @var $model PersonaSuscripciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'persona-suscripciones-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personas_idPersona'); ?>
		<?php echo $form->textField($model,'personas_idPersona'); ?>
		<?php echo $form->error($model,'personas_idPersona'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'suscripciones_idSuscripcion'); ?>
		<?php echo $form->textField($model,'suscripciones_idSuscripcion'); ?>
		<?php echo $form->error($model,'suscripciones_idSuscripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->