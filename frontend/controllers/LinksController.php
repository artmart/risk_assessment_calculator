<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Links;
use frontend\models\LinksSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\helpers\Html;
use yii\helpers\Url;

/**
 * LinksController implements the CRUD actions for Links model.
 */
class LinksController extends Controller
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
                    //'only' => ['calculate', 'show', 'index'],
                    'rules' => [
                        [
                            'actions' => [],
                            'allow' => true,
                            'roles' => ['?'],
                        ],
                        [
                            'actions' => ['create', 'index', 'view', 'delete'],
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
     * Lists all Links models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new LinksSearch();
        
        $user_group = Yii::$app->user->identity->user_group; 
        if($user_group==2){$searchModel->user_id = Yii::$app->user->id;} 
        
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Links model.
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

    /**
     * Creates a new Links model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Links();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->status = 'Pending';
                $model->capacity = '';
                $model->overal_risk_score = '';
                $user_id = $model->user_id;
         
            //'date_submited' => 'Date Submited',
           // 'date_completed' => 'Date Completed',
                
                
                if($model->save()){
                  
                $link_id = $model->id; 
                $link = 'results/calculate?u='.$user_id.'&l='.$link_id;
                $model->date_submited = date("Y-m-d h:i:s");
                //$model->date_completed
                    
                $model->save();
                            
                $subject = 'Risk Profiling Assessment';
                $body = Url::to(['results/calculate?u='.$user_id.'&l='.$link_id], true);  //linl
                /*        
                $body = 'Dear Sir or Madam <br /><br /> 
                        You have been invited to complete a risk profiling assessment. This should take no longer than 10 minutes to complete and can be accessed via smartphone, tablet or PC.
                        <br /><br />
                        Please find your unique access link below: <br />
                         <a href="'.Url::to(['results/calculate?u='.$user_id.'&l='.$link_id], true).'">Risk Profiling Assessment</a> '.   
                       // Html::a('Risk Profiling Assessment', [Url::to(['results/calculate'], true), 'u'=>$user_id, 'l'=>$link_id]).
                        ' <br /><br />Many thanks';
                */
        
                if(Self::sendEmail($model->email, $subject, $body)) {
                    Yii::$app->session->setFlash('success', 'Your message sent successfully.');
                   //return '<div class="alert alert-success alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>Your message sent successfully</div>';
                } else {
                    Yii::$app->session->setFlash('error', 'There was an error sending your message. Please try again.');
                    //echo '<div class="alert alert-warning alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>There was an error sending your message. Please try again</div>';
                }
                      
                     return $this->redirect(['view', 'id' => $model->id]);
                }else {
                    var_dump($model->errors);
                //echo '<div class="alert alert-warning alert-dismissible "><button type="button" class="close" data-dismiss="alert">&times;</button>There was an error sending your message. Please try again</div>';
            }

            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
    
    
    
    public function sendEmail($email, $subject, $body)
    {
        \Yii::$app->mailer->htmlLayout = "layouts/html_invite";
        return Yii::$app->mailer->compose('layouts/html_invite', ['content'=>$body])
            ->setTo($email)
            //->setFrom([$email => 'sales@poppinco.co'])
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->params['senderName']])
            //->setReplyTo([$this->email => $this->name])
            ->setSubject($subject)
            //->setTextBody($body)
            ->setHtmlBody($body)
            ->send();
    }
    
    
    public function sendEmail1()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'email' => $this->email,
        ]);

        if (!$user) {
            return false;
        }
        
        if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
            if (!$user->save()) {
                return false;
            }
        }

        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            ->setFrom([Yii::$app->params['supportEmail'] => Yii::$app->name . ' robot'])
            ->setTo($this->email)
            ->setSubject('Password reset for ' . Yii::$app->name)
            ->send();
    }

    /**
     * Updates an existing Links model.
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
     * Deletes an existing Links model.
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
     * Finds the Links model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Links the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Links::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
