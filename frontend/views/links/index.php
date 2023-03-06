<style>
td, th {
  text-align: center;
  vertical-align: middle;
}

.action-column{
    width: 75px;
}
</style>

<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
use frontend\models\Links;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;


$all_links = $dataProvider->query->all();
//$all_links_array = [];

$active_clients = 0;
$clients_pending = 0;
$clients_completed = 0;

    foreach($all_links as $l){
        //$all_links_array[$l->id] = $l->description;
        $active_clients = $active_clients+1;
        if($l->status=='Pending'){
             $clients_pending = $clients_pending+1;
        }
        if($l->status=='Completed'){
             $clients_completed = $clients_completed+1;
        }
    }

?>
<div class="links-index">
<!--
    <h1><?php // Html::encode($this->title) ?></h1>
    <p>
        <?php // Html::a('Create Links', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
 -->   
<div class="row">
<div class="col-lg-12">
<div class="top_tiles">
  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-caret-square-o-right"></i></div>
      <div class="count"><?=$active_clients;?></div>
      <h3>Active Clients</h3>
    </div>
  </div>
  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i></div>
      <div class="count"><?=$clients_pending;?></div>
      <h3>Clients Pending</h3>
    </div>
  </div>
  <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 ">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i></div>
      <div class="count"><?=$clients_completed;?></div>
      <h3>Clients Completed</h3>
    </div>
  </div>
</div>
</div>
</div>
<div class="clearfix"></div>

<div class="col-md-12 col-sm-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Results Summary</h2>
    <ul class="nav navbar-right panel_toolbox">
      <!--<li> <a href="/invite" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i> Create New Invite</a></li>-->
      <?= Html::a('<i class="fa fa-plus"></i> Create New Invite', ['create'], ['class' => 'btn btn-success', 'target'=>"_blank"]) ?>
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
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'client_name',
            //'user_id',
            'email:email',
            //'status',
            
            [
                'attribute' => 'status',
                'filter'=>['Pending'=>'Pending', 'Completed'=>'Completed'],
                'format' => 'raw',
                'value'=>  function($data) {
                        $arr_values = ['Pending'=>'alert-warning', 'Completed'=>'alert-primary'];
                        return '<div class="alert '.$arr_values[$data->status].' mb-0 p-1" role="alert">'.$data->status.'</div>';                      
                    }, 
            ],
            'date_completed',
            //'link',
            'capacity',
            'overal_risk_score',
            //'date_submited',
            //
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Links $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 },
                 'template'=>'{view}{delete}'
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>                      
                            
                    </div>	
                  </div>
                </div>
              </div>
</div>