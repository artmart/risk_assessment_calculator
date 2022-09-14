<?php

namespace frontend\controllers;

use frontend\models\Results;
use frontend\models\ResultsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * ResultsController implements the CRUD actions for Results model.
 */
class ResultsController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'only' => ['calculate', 'show', 'index'],
                    'rules' => [
                        [
                            'actions' => ['calculate1'],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [
                            'actions' => ['logout', 'calculate', 'show', 'index'],
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
                
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Results models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ResultsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Results model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    
    public function actionCalculate()
    {
        $this->layout = 'public';
        return $this->render('calculate', [
            //'model' => $this->findModel($id),
        ]);
    }
    
    
    
    
    public function actionShow()
    {
        return $this->renderPartial('report');
        /*
        $model = new UserContactForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            
            $subject = 'Reported ad from the user '. $model->name;
            $body = 'The user '. $model->name.' reported the '.   Html::a('Ad', [Url::to(['ads/view'], true), 'id'=>$model->ad_id, 'slug'=>'slug']).' posted in Eurosante.com <br /><br />';
            $body .= $model->body.'<br />';
            $body .= 'Contact email: '. $model->email.'<br />';
            $body .= 'Contact Tel: '. $model->phone.'<br />';
    
            if(Self::sendEmail(Yii::$app->params['senderEmail'], $subject, $body)) {
               echo '<div class="alert alert-success alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>'.Yii::t('ad', 'Your message sent successfully').'</div>';
            } else {
                echo '<div class="alert alert-warning alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>'.Yii::t('ad', 'There was an error sending your message. Please try again').'</div>';
            }
        } else {
            echo '<div class="alert alert-warning alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>'.Yii::t('ad', 'There was an error sending your message. Please try again').'</div>';
        }
        
        */
    }
    
    
    public function sendEmail($email, $subject, $body)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$email => 'empire.poppinco.co'])
            //->setReplyTo([$this->email => $this->name])
            ->setSubject($subject)
            //->setTextBody($body)
            ->setHtmlBody($body)
            ->send();
    }

    /**
     * Creates a new Results model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Results();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Results model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Results model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Results model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Results the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Results::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
