<?php

namespace frontend\models;
use backend\models\User;
use Yii;

/**
 * This is the model class for table "results".
 *
 * @property int $id
 * @property int $user_id
 * @property int $link_id
 * @property string $calc_date
 * @property string $full_name
 * @property string $email_address
 * @property int $age
 * @property string $relationship_status
 * @property string $number_of_dependents
 * @property float $employment_income
 * @property float $pension_income
 * @property float $investment_income
 * @property float $other_income
 * @property float $cash_savings
 * @property float $pensions_including_sipps
 * @property float $property_including_investment_properties
 * @property float $investment_portfolios
 * @property float $mortgages
 * @property float $other_secured_loans
 * @property float $credit_card_debt
 * @property float $other_unsecured_loans
 * @property float $rent_mortgage_payments
 * @property float $utilities_electricity_water_internet_etc
 * @property float $food
 * @property float $debt_repayment
 * @property float $other
 * @property int $q1
 * @property int $q2
 * @property int $q3
 * @property int $q4
 * @property int $q5
 * @property int $q6
 * @property int $q7
 * @property int $q8
 * @property int $q9
 * @property int $q10
 * @property int $q11
 * @property int $q12
 * @property int $q13
 * @property int $q14
 * @property float $total_income
 * @property float $total_assets
 * @property float $total_liquid_assets
 * @property float $total_liabilities
 * @property float $total_current_liabilities
 * @property float $total_monthly_spend
 * @property float $total_annual_spend
 * @property float $rc
 * @property string $rc_text
 * @property string $rc_description
 * @property float $rt
 * @property string $rt_text
 * @property float $composure
 * @property string $composure_text
 * @property float $market
 * @property string $market_text
 * @property float $overall
 * @property string $overal_text
 * @property string $overll_description
 * @property string $recomendation_text
 * @property string $recomendation_description
 *
 * @property Links $link
 * @property User $user
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'link_id', 'full_name', 'email_address', 'age', 'relationship_status', 'number_of_dependents', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14', 'rc_text', 'rc_description', 'rt_text', 'composure_text', 'market_text', 'overal_text', 'overll_description', 'recomendation_text', 'recomendation_description'], 'required'],
            [['user_id', 'link_id', 'age', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14'], 'integer'],
            [['calc_date'], 'safe'],
            [['employment_income', 'pension_income', 'investment_income', 'other_income', 'cash_savings', 'pensions_including_sipps', 'property_including_investment_properties', 'investment_portfolios', 'mortgages', 'other_secured_loans', 'credit_card_debt', 'other_unsecured_loans', 'rent_mortgage_payments', 'utilities_electricity_water_internet_etc', 'food', 'debt_repayment', 'other', 'total_income', 'total_assets', 'total_liquid_assets', 'total_liabilities', 'total_current_liabilities', 'total_monthly_spend', 'total_annual_spend', 'rc', 'rt', 'composure', 'market', 'overall'], 'number'],
            [['full_name', 'email_address'], 'string', 'max' => 255],
            [['relationship_status'], 'string', 'max' => 100],
            [['number_of_dependents'], 'string', 'max' => 5],
            [['rc_text', 'rt_text', 'composure_text', 'market_text', 'overal_text', 'recomendation_text'], 'string', 'max' => 50],
            [['rc_description', 'overll_description', 'recomendation_description'], 'string', 'max' => 1000],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['link_id'], 'exist', 'skipOnError' => true, 'targetClass' => Links::className(), 'targetAttribute' => ['link_id' => 'id']],
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
            'link_id' => 'Link ID',
            'calc_date' => 'Calc Date',
            'full_name' => 'Full Name',
            'email_address' => 'Email Address',
            'age' => 'Age',
            'relationship_status' => 'Relationship Status',
            'number_of_dependents' => 'Number Of Dependents',
            'employment_income' => 'Employment Income',
            'pension_income' => 'Pension Income',
            'investment_income' => 'Investment Income',
            'other_income' => 'Other Income',
            'cash_savings' => 'Cash Savings',
            'pensions_including_sipps' => 'Pensions Including Sipps',
            'property_including_investment_properties' => 'Property Including Investment Properties',
            'investment_portfolios' => 'Investment Portfolios',
            'mortgages' => 'Mortgages',
            'other_secured_loans' => 'Other Secured Loans',
            'credit_card_debt' => 'Credit Card Debt',
            'other_unsecured_loans' => 'Other Unsecured Loans',
            'rent_mortgage_payments' => 'Rent Mortgage Payments',
            'utilities_electricity_water_internet_etc' => 'Utilities Electricity Water Internet Etc',
            'food' => 'Food',
            'debt_repayment' => 'Debt Repayment',
            'other' => 'Other',
            'q1' => 'Q 1',
            'q2' => 'Q 2',
            'q3' => 'Q 3',
            'q4' => 'Q 4',
            'q5' => 'Q 5',
            'q6' => 'Q 6',
            'q7' => 'Q 7',
            'q8' => 'Q 8',
            'q9' => 'Q 9',
            'q10' => 'Q 10',
            'q11' => 'Q 11',
            'q12' => 'Q 12',
            'q13' => 'Q 13',
            'q14' => 'Q 14',
            'total_income' => 'Total Income',
            'total_assets' => 'Total Assets',
            'total_liquid_assets' => 'Total Liquid Assets',
            'total_liabilities' => 'Total Liabilities',
            'total_current_liabilities' => 'Total Current Liabilities',
            'total_monthly_spend' => 'Total Monthly Spend',
            'total_annual_spend' => 'Total Annual Spend',
            'rc' => 'Rc',
            'rc_text' => 'Rc Text',
            'rc_description' => 'Rc Description',
            'rt' => 'Rt',
            'rt_text' => 'Rt Text',
            'composure' => 'Composure',
            'composure_text' => 'Composure Text',
            'market' => 'Market',
            'market_text' => 'Market Text',
            'overall' => 'Overall',
            'overal_text' => 'Overal Text',
            'overll_description' => 'Overll Description',
            'recomendation_text' => 'Recomendation Text',
            'recomendation_description' => 'Recomendation Description',
        ];
    }

    /**
     * Gets query for [[Link]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLink()
    {
        return $this->hasOne(Links::className(), ['id' => 'link_id']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
