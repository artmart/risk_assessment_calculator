<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="links-form">
    <?php $form = ActiveForm::begin(); ?>
    
    <?php // echo $form->field($model, 'user_id')->textInput() 
    if($model->isNewRecord){$user_id = Yii::$app->user->id;}else{$user_id = $model->user_id;}
    echo $form->field($model, 'user_id')->hiddenInput(['value'=>$user_id])->label(false); 
    ?>
<div class="row">

<div class="col-lg-6">


    <?php //echo $form->field($model, 'link')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'client_name')->textInput(['maxlength' => true]) ?>
</div>
<div class="col-lg-4">
    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?php // echo $form->field($model, 'status')->textInput() ?>

    <?php // echo $form->field($model, 'capacity')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'overal_risk_score')->textInput(['maxlength' => true]) ?>

    <?php // echo $form->field($model, 'date_submited')->textInput() ?>

    <?php // echo $form->field($model, 'date_completed')->textInput() ?>
</div>
<div class="col-lg-2">
    <div class="form-group pt-4">
        <?= Html::submitButton('Create', ['class' => 'btn btn-success w-100']) ?>
    </div>
</div>
</div>
    <?php ActiveForm::end(); ?>
</div>
<hr />
<br />