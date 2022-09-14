<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use frontend\models\Results;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ResultsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Results';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="results-index">

    <h1><?php // Html::encode($this->title) ?></h1>
    <p>
        <?php // echo Html::a('Create Results', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


<div class="col-md-12 col-sm-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Results</h2>
    <ul class="nav navbar-right panel_toolbox">
      <!--<li> <a href="/invite" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i> Create New Invite</a></li>-->
      <?php // Html::a('<i class="fa fa-plus"></i> Create New Invite', ['create'], ['class' => 'btn btn-success', 'target'=>"_blank"]) ?>
    </ul>
    <div class="clearfix"></div>
  </div>

  <div class="x_content">
    <div class="table-responsive">

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'tableheader'],
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'user_id',
            //'link_id',
            
            'full_name',
            'email_address:email',
            'age',
            'calc_date',
            //'relationship_status',
            //'number_of_dependents',
            //'employment_income',
            //'pension_income',
            //'investment_income',
            //'other_income',
            //'cash_savings',
            //'pensions_including_sipps',
            //'property_including_investment_properties',
            //'investment_portfolios',
            //'mortgages',
            //'other_secured_loans',
            //'credit_card_debt',
            //'other_unsecured_loans',
            //'rent_mortgage_payments',
            //'utilities_electricity_water_internet_etc',
            //'food',
            //'debt_repayment',
            //'other',
            //'q1',
            //'q2',
            //'q3',
            //'q4',
            //'q5',
            //'q6',
            //'q7',
            //'q8',
            //'q9',
            //'q10',
            //'q11',
            //'q12',
            //'q13',
            //'q14',
            //'total_income',
            //'total_assets',
            //'total_liquid_assets',
            //'total_liabilities',
            //'total_current_liabilities',
            //'total_monthly_spend',
            //'total_annual_spend',
            //'rc',
            //'rc_text',
            //'rc_description',
            //'rt',
            //'rt_text',
            //'composure',
            //'composure_text',
            //'market',
            //'market_text',
            //'overall',
            //'overal_text',
            //'overll_description',
            //'recomendation_text',
            //'recomendation_description',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Results $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
    
</div>
</div>
</div>
</div>


</div>
