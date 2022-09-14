<?php
use yii\helpers\Html;
use yii\widgets\DetailView;

//use yii\helpers\Html;
use yii\helpers\Url;

$this->title = $model->id;
$link = Html::a('Link', [Url::to(['results/calculate'], true), 'u'=>$model->user_id, 'l'=>$model->id, 'target'=>'_blank']);
// 'results/calculate?u='.$model->user_id.'&l='.$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => 'Link', 'url' => [$link]];  // $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="links-view">
    <h3>
    The invitation link for <strong><?=$model->client_name;?></strong> was created and sent to <strong><?=$model->email;?></strong>.
    <?php // Html::encode($this->title) ?>
    </h3>
    <p>
    
        <?php // Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php /* Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) */ ?>
    </p>

<?php /*    
<div class="col-md-12 col-sm-12">
<div class="x_panel">
  <div class="x_title">
    <h2>Link Details</h2>
    <ul class="nav navbar-right panel_toolbox">
      <!--<li> <a href="/invite" target="_blank" class="btn btn-success"><i class="fa fa-plus"></i> Create New Invite</a></li>-->
      <?php // Html::a('<i class="fa fa-plus"></i> Create New Invite', ['create'], ['class' => 'btn btn-success', 'target'=>"_blank"]) ?>
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
            //'link',
            'email:email',
            'client_name',
            'status',
            'capacity',
            'overal_risk_score',
            'date_submited',
            'date_completed',
        ],
    ]) ?>
    </div>
    </div>
    </div>
    </div>
 */ ?>
 
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
<?php 
$dataProvider = new \yii\data\ActiveDataProvider(['query' => $model->getResults(), 
                                                  'pagination' =>  ['pageSize' => 10],]);
$resultscount = $dataProvider->getTotalCount();
$all_results = $dataProvider->query->all();

if($resultscount>0){ ?>
  <?=  \yii\grid\GridView::widget(['dataProvider' => $dataProvider, 'options' => ['class' => 'tableheader'], 'columns' => ['full_name', 'email_address', 'age', 'calc_date',   
          //['attribute' => 'calc_date', 'format' =>'raw', 'value'=>function() {return  '<span class="glyphicon glyphicon-gbp"></span>'.number_format($hc_model->quantum, 2);}],
          //['attribute' => 'claimant_cost', 'format' =>'raw', 'value'=>function($hc_model) {return  '<span class="glyphicon glyphicon-gbp"></span>'.number_format($hc_model->claimant_cost, 2);}],
          //['attribute' => 'defendant_cost', 'format' =>'raw', 'value'=>function($hc_model) {return  '<span class="glyphicon glyphicon-gbp"></span>'.number_format($hc_model->defendant_cost, 2);}],
          ['class' => 'yii\grid\ActionColumn', 'template' => '{view}{delete}', 
            'urlCreator' => function ($action, $model, $key, $index){return Url::to(['results/'.$action, 'id' => $model->id]);}
          ],
      ]
  ]);
}?>
</div>
</div>
</div>
</div>  
    
    
    
    

</div>
