<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ResultsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="results-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'link_id') ?>

    <?= $form->field($model, 'calc_date') ?>

    <?= $form->field($model, 'full_name') ?>

    <?php // echo $form->field($model, 'email_address') ?>

    <?php // echo $form->field($model, 'age') ?>

    <?php // echo $form->field($model, 'relationship_status') ?>

    <?php // echo $form->field($model, 'number_of_dependents') ?>

    <?php // echo $form->field($model, 'employment_income') ?>

    <?php // echo $form->field($model, 'pension_income') ?>

    <?php // echo $form->field($model, 'investment_income') ?>

    <?php // echo $form->field($model, 'other_income') ?>

    <?php // echo $form->field($model, 'cash_savings') ?>

    <?php // echo $form->field($model, 'pensions_including_sipps') ?>

    <?php // echo $form->field($model, 'property_including_investment_properties') ?>

    <?php // echo $form->field($model, 'investment_portfolios') ?>

    <?php // echo $form->field($model, 'mortgages') ?>

    <?php // echo $form->field($model, 'other_secured_loans') ?>

    <?php // echo $form->field($model, 'credit_card_debt') ?>

    <?php // echo $form->field($model, 'other_unsecured_loans') ?>

    <?php // echo $form->field($model, 'rent_mortgage_payments') ?>

    <?php // echo $form->field($model, 'utilities_electricity_water_internet_etc') ?>

    <?php // echo $form->field($model, 'food') ?>

    <?php // echo $form->field($model, 'debt_repayment') ?>

    <?php // echo $form->field($model, 'other') ?>

    <?php // echo $form->field($model, 'q1') ?>

    <?php // echo $form->field($model, 'q2') ?>

    <?php // echo $form->field($model, 'q3') ?>

    <?php // echo $form->field($model, 'q4') ?>

    <?php // echo $form->field($model, 'q5') ?>

    <?php // echo $form->field($model, 'q6') ?>

    <?php // echo $form->field($model, 'q7') ?>

    <?php // echo $form->field($model, 'q8') ?>

    <?php // echo $form->field($model, 'q9') ?>

    <?php // echo $form->field($model, 'q10') ?>

    <?php // echo $form->field($model, 'q11') ?>

    <?php // echo $form->field($model, 'q12') ?>

    <?php // echo $form->field($model, 'q13') ?>

    <?php // echo $form->field($model, 'q14') ?>

    <?php // echo $form->field($model, 'total_income') ?>

    <?php // echo $form->field($model, 'total_assets') ?>

    <?php // echo $form->field($model, 'total_liquid_assets') ?>

    <?php // echo $form->field($model, 'total_liabilities') ?>

    <?php // echo $form->field($model, 'total_current_liabilities') ?>

    <?php // echo $form->field($model, 'total_monthly_spend') ?>

    <?php // echo $form->field($model, 'total_annual_spend') ?>

    <?php // echo $form->field($model, 'rc') ?>

    <?php // echo $form->field($model, 'rc_text') ?>

    <?php // echo $form->field($model, 'rc_description') ?>

    <?php // echo $form->field($model, 'rt') ?>

    <?php // echo $form->field($model, 'rt_text') ?>

    <?php // echo $form->field($model, 'composure') ?>

    <?php // echo $form->field($model, 'composure_text') ?>

    <?php // echo $form->field($model, 'market') ?>

    <?php // echo $form->field($model, 'market_text') ?>

    <?php // echo $form->field($model, 'overall') ?>

    <?php // echo $form->field($model, 'overal_text') ?>

    <?php // echo $form->field($model, 'overll_description') ?>

    <?php // echo $form->field($model, 'recomendation_text') ?>

    <?php // echo $form->field($model, 'recomendation_description') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
