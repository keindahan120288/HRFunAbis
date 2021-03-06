<?php
/* @var $this PersonelMandaysController */
/* @var $model PersonelMandays */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personel-mandays-form',
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
			<?php echo $form->labelEx($model,'month'); ?>
			<?php echo $form->dropDownList($model,'month',$model->getPeriodOptions(), array('empty'=>'pilih periode bulan')); ?>
			<?php echo $form->error($model,'month'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php
			$year = array();
			for ($i=-1; $i < 4; $i++) { 
				$year[date('Y',time())+$i] = date('Y',time()) + $i;
			}
			echo $form->dropDownList($model,'year',$year, array('empty'=>'pilih tahun')); 
		?>
		<?php echo $form->error($model,'year'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'mandays'); ?>
		<?php echo $form->textField($model,'mandays'); ?>
		<?php echo $form->error($model,'mandays'); ?>
	</div>

	<div class="row buttons">
		<div class="form-actions">
		<?php /*echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); */?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>'Submit')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->