<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Results */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="results-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'link_id')->textInput() ?>

    <?= $form->field($model, 'calc_date')->textInput() ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'relationship_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_dependents')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'employment_income')->textInput() ?>

    <?= $form->field($model, 'pension_income')->textInput() ?>

    <?= $form->field($model, 'investment_income')->textInput() ?>

    <?= $form->field($model, 'other_income')->textInput() ?>

    <?= $form->field($model, 'cash_savings')->textInput() ?>

    <?= $form->field($model, 'pensions_including_sipps')->textInput() ?>

    <?= $form->field($model, 'property_including_investment_properties')->textInput() ?>

    <?= $form->field($model, 'investment_portfolios')->textInput() ?>

    <?= $form->field($model, 'mortgages')->textInput() ?>

    <?= $form->field($model, 'other_secured_loans')->textInput() ?>

    <?= $form->field($model, 'credit_card_debt')->textInput() ?>

    <?= $form->field($model, 'other_unsecured_loans')->textInput() ?>

    <?= $form->field($model, 'rent_mortgage_payments')->textInput() ?>

    <?= $form->field($model, 'utilities_electricity_water_internet_etc')->textInput() ?>

    <?= $form->field($model, 'food')->textInput() ?>

    <?= $form->field($model, 'debt_repayment')->textInput() ?>

    <?= $form->field($model, 'other')->textInput() ?>

    <?= $form->field($model, 'q1')->textInput() ?>

    <?= $form->field($model, 'q2')->textInput() ?>

    <?= $form->field($model, 'q3')->textInput() ?>

    <?= $form->field($model, 'q4')->textInput() ?>

    <?= $form->field($model, 'q5')->textInput() ?>

    <?= $form->field($model, 'q6')->textInput() ?>

    <?= $form->field($model, 'q7')->textInput() ?>

    <?= $form->field($model, 'q8')->textInput() ?>

    <?= $form->field($model, 'q9')->textInput() ?>

    <?= $form->field($model, 'q10')->textInput() ?>

    <?= $form->field($model, 'q11')->textInput() ?>

    <?= $form->field($model, 'q12')->textInput() ?>

    <?= $form->field($model, 'q13')->textInput() ?>

    <?= $form->field($model, 'q14')->textInput() ?>

    <?= $form->field($model, 'total_income')->textInput() ?>

    <?= $form->field($model, 'total_assets')->textInput() ?>

    <?= $form->field($model, 'total_liquid_assets')->textInput() ?>

    <?= $form->field($model, 'total_liabilities')->textInput() ?>

    <?= $form->field($model, 'total_current_liabilities')->textInput() ?>

    <?= $form->field($model, 'total_monthly_spend')->textInput() ?>

    <?= $form->field($model, 'total_annual_spend')->textInput() ?>

    <?= $form->field($model, 'rc')->textInput() ?>

    <?= $form->field($model, 'rc_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rc_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rt')->textInput() ?>

    <?= $form->field($model, 'rt_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'composure')->textInput() ?>

    <?= $form->field($model, 'composure_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'market')->textInput() ?>

    <?= $form->field($model, 'market_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'overall')->textInput() ?>

    <?= $form->field($model, 'overal_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'overll_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recomendation_text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recomendation_description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
