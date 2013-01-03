<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'create-post-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldRow($model,'title', array('size'=>80,'maxlength'=>128)); ?>

    <?php echo $form->textAreaRow($model,'content',array('rows'=>10, 'cols'=>70)); ?>

    <?php echo $form->dropDownListRow($model,'status',Lookup::items('PostStatus')); ?>

    <?php echo $form->textFieldRow($model,'tags'); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton',array(
            'buttonType'=>'submit',
            'type'=>'primary',
            'label'=>'Submit',
        )); ?>

        <?php //echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->