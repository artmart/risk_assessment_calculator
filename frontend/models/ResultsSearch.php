<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Results;

/**
 * ResultsSearch represents the model behind the search form of `frontend\models\Results`.
 */
class ResultsSearch extends Results
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'link_id', 'age', 'q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10', 'q11', 'q12', 'q13', 'q14'], 'integer'],
            [['calc_date', 'full_name', 'email_address', 'relationship_status', 'number_of_dependents', 'rc_text', 'rc_description', 'rt_text', 'composure_text', 'market_text', 'overal_text', 'overll_description', 'recomendation_text', 'recomendation_description'], 'safe'],
            [['employment_income', 'pension_income', 'investment_income', 'other_income', 'cash_savings', 'pensions_including_sipps', 'property_including_investment_properties', 'investment_portfolios', 'mortgages', 'other_secured_loans', 'credit_card_debt', 'other_unsecured_loans', 'rent_mortgage_payments', 'utilities_electricity_water_internet_etc', 'food', 'debt_repayment', 'other', 'total_income', 'total_assets', 'total_liquid_assets', 'total_liabilities', 'total_current_liabilities', 'total_monthly_spend', 'total_annual_spend', 'rc', 'rt', 'composure', 'market', 'overall'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Results::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'link_id' => $this->link_id,
            'calc_date' => $this->calc_date,
            'age' => $this->age,
            'employment_income' => $this->employment_income,
            'pension_income' => $this->pension_income,
            'investment_income' => $this->investment_income,
            'other_income' => $this->other_income,
            'cash_savings' => $this->cash_savings,
            'pensions_including_sipps' => $this->pensions_including_sipps,
            'property_including_investment_properties' => $this->property_including_investment_properties,
            'investment_portfolios' => $this->investment_portfolios,
            'mortgages' => $this->mortgages,
            'other_secured_loans' => $this->other_secured_loans,
            'credit_card_debt' => $this->credit_card_debt,
            'other_unsecured_loans' => $this->other_unsecured_loans,
            'rent_mortgage_payments' => $this->rent_mortgage_payments,
            'utilities_electricity_water_internet_etc' => $this->utilities_electricity_water_internet_etc,
            'food' => $this->food,
            'debt_repayment' => $this->debt_repayment,
            'other' => $this->other,
            'q1' => $this->q1,
            'q2' => $this->q2,
            'q3' => $this->q3,
            'q4' => $this->q4,
            'q5' => $this->q5,
            'q6' => $this->q6,
            'q7' => $this->q7,
            'q8' => $this->q8,
            'q9' => $this->q9,
            'q10' => $this->q10,
            'q11' => $this->q11,
            'q12' => $this->q12,
            'q13' => $this->q13,
            'q14' => $this->q14,
            'total_income' => $this->total_income,
            'total_assets' => $this->total_assets,
            'total_liquid_assets' => $this->total_liquid_assets,
            'total_liabilities' => $this->total_liabilities,
            'total_current_liabilities' => $this->total_current_liabilities,
            'total_monthly_spend' => $this->total_monthly_spend,
            'total_annual_spend' => $this->total_annual_spend,
            'rc' => $this->rc,
            'rt' => $this->rt,
            'composure' => $this->composure,
            'market' => $this->market,
            'overall' => $this->overall,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'email_address', $this->email_address])
            ->andFilterWhere(['like', 'relationship_status', $this->relationship_status])
            ->andFilterWhere(['like', 'number_of_dependents', $this->number_of_dependents])
            ->andFilterWhere(['like', 'rc_text', $this->rc_text])
            ->andFilterWhere(['like', 'rc_description', $this->rc_description])
            ->andFilterWhere(['like', 'rt_text', $this->rt_text])
            ->andFilterWhere(['like', 'composure_text', $this->composure_text])
            ->andFilterWhere(['like', 'market_text', $this->market_text])
            ->andFilterWhere(['like', 'overal_text', $this->overal_text])
            ->andFilterWhere(['like', 'overll_description', $this->overll_description])
            ->andFilterWhere(['like', 'recomendation_text', $this->recomendation_text])
            ->andFilterWhere(['like', 'recomendation_description', $this->recomendation_description]);

        return $dataProvider;
    }
}
