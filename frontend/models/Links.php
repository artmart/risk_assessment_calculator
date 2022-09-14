<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property int $user_id
 * @property string $link
 * @property string $email
 * @property string $client_name
 * @property int $status
 * @property string $capacity
 * @property string $overal_risk_score
 * @property string $date_submited
 * @property string $date_completed
 *
 * @property Results[] $results
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'email', 'client_name'], 'required'],
            [['user_id'], 'integer'],
            [['date_submited', 'date_completed'], 'safe'],
            [['email', 'client_name'], 'string', 'max' => 255],
            //[['capacity', 'overal_risk_score'], 'string', 'max' => 50],
            [['capacity', 'overal_risk_score'], 'number'],
            [['status'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'email' => 'Email',
            'client_name' => 'Client Name',
            'status' => 'Status',
            'capacity' => 'Capacity',
            'overal_risk_score' => 'Overal Risk Score',
            'date_submited' => 'Date Submited',
            'date_completed' => 'Date Completed',
        ];
    }

    /**
     * Gets query for [[Results]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getResults()
    {
        return $this->hasMany(Results::className(), ['link_id' => 'id']);
    }
    
    /*
    public function getHeadsofclaim()
    {
        return $this->hasMany(Headsofclaim::className(), ['case_id' => 'id'])->andWhere(['claim_type' =>1]);
    }
    */
}
