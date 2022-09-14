<?php
use yii\helpers\Html;

$this->title = 'Create New Invite Link';
$this->params['breadcrumbs'][] = ['label' => 'Links', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="links-create">
<div class="col-md-12 col-sm-12">
<div class="x_panel">
  <div class="x_title">
    <h2><h1><?= Html::encode($this->title) ?></h1></h2>
    <div class="clearfix"></div>
  </div>
    <div class="x_content">
    <?= $this->render('_form', ['model' => $model]) ?>
    </div>
</div>
</div>
</div>