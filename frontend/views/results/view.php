<style>
th {
  width: 300px;
}
</style>

<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->full_name. " (".$model->email_address.") ";
$this->params['breadcrumbs'][] = ['label' => 'Results', 'url' => ['links/index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="results-view">

    <p>
        <?php // Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

    </p>
<div class="col-md-12 col-sm-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Results: <?= Html::encode($this->title) ?></h2>
    <ul class="nav navbar-right panel_toolbox">
      <!--<li> <a href="/invite" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i> Create New Invite</a></li>-->
      <?php // Html::a('<i class="fa fa-plus"></i> Create New Invite', ['create'], ['class' => 'btn btn-success', 'target'=>"_blank"]) ?>
              <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger btn-sm',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </ul>
    <div class="clearfix"></div>
  </div>

  <div class="x_content">
    <div class="table-responsive">
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            //'link_id',
            'calc_date',
            //'full_name',
            'email_address:email',
            'age',
            'relationship_status',
            //'number_of_dependents',
            [
                'attribute' => 'number_of_dependents',
                //'label'  => '',
                'value'  => function ($data) {
                    $arr_values = ['1'=>'0', '1.03'=>'1', '1.06'=>'2', '1.1'=>'3+'];         
                    return $arr_values[$data->number_of_dependents];   
                },
            ],  
            'employment_income',
            'pension_income',
            'investment_income',
            'other_income',
            'cash_savings',
            'pensions_including_sipps',
            'property_including_investment_properties',
            'investment_portfolios',
            'mortgages',
            'other_secured_loans',
            'credit_card_debt',
            'other_unsecured_loans',
            'rent_mortgage_payments',
            'utilities_electricity_water_internet_etc',
            'food',
            'debt_repayment',
            'other',
            /*'q1',
            'q2',
            'q3',
            'q4',
            'q5',
            'q6',
            'q7',
            'q8',
            'q9',
            'q10',
            'q11',
            'q12',
            'q13',
            'q14',*/
            'total_income',
            'total_assets',
            'total_liquid_assets',
            'total_liabilities',
            'total_current_liabilities',
            'total_monthly_spend',
            'total_annual_spend',
            //'rc',
            'rc_text',
            'rc_description',
            //'rt',
            'rt_text',
            //'composure',
            'composure_text',
            //'market',
            'market_text',
            'overall',
            'overal_text',
            'overll_description',
            'recomendation_text',
            'recomendation_description',
        ],
    ]) ?>
</div>
</div>
</div>
</div>

</div>
