<?php
$this->pageTitle=Yii::app()->name . ' - Contact Us';
$this->breadcrumbs=array(
        'Contact',
);
?>
<div class="grid_16">
    <h1>Contact Us</h1>
</div>
<div class="clear"></div>

<div class="grid_7 prefix_3">

    <?php if(Yii::app()->user->hasFlash('contact')): ?>

    <div class="flash-success">
            <?php echo Yii::app()->user->getFlash('contact'); ?>
    </div>

    <?php else: ?>

    <p>
        If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="form">

            <?php $form=$this->beginWidget('CActiveForm', array(
                    'htmlOptions'=>array('class'=>'uniForm')
            )); ?>

        <p class="note">Fields with <span class="required">*</span> are required.</p>

            <?php echo $form->errorSummary($model); ?>

        <div class="ctrlHolder">
                <?php echo $form->labelEx($model,'name'); ?>
                <?php echo $form->textField($model,'name', array('class'=>'textInput')); ?>
        </div>

        <div class="ctrlHolder">
                <?php echo $form->labelEx($model,'email'); ?>
                <?php echo $form->textField($model,'email', array('class'=>'textInput')); ?>
        </div>

        <div class="ctrlHolder">
                <?php echo $form->labelEx($model,'subject'); ?>
                <?php echo $form->textField($model,'subject',array('class'=>'textInput', 'size'=>60,'maxlength'=>128)); ?>
        </div>

        <div class="ctrlHolder">
                <?php echo $form->labelEx($model,'body'); ?>
                <?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
        </div>

            <?php if(extension_loaded('gd')): ?>
        <div class="ctrlHolder">
                    <?php echo $form->labelEx($model,'verifyCode'); ?>
            <div>
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model,'verifyCode'); ?>
            </div>
            <div class="hint">Please enter the letters as they are shown in the image above.
                <br/>Letters are not case-sensitive.</div>
        </div>
            <?php endif; ?>

        <div class="row buttons">
                <?php echo CHtml::submitButton('Submit'); ?>
        </div>

            <?php $this->endWidget(); ?>

    </div><!-- form -->

    <?php endif; ?>
</div>