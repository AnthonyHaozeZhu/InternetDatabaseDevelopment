<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Records;

/**
 * RecordsSearch represents the model behind the search form of `frontend\models\Records`.
 */
class RecordsSearch extends Records
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sports', 'sportsRecord', 'aName', 'aCountry', 'alsRetired'], 'safe'],
            [['sportsYear'], 'integer'],
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
        $query = Records::find();

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
            'sportsYear' => $this->sportsYear,
        ]);

        $query->andFilterWhere(['like', 'sports', $this->sports])
            ->andFilterWhere(['like', 'sportsRecord', $this->sportsRecord])
            ->andFilterWhere(['like', 'aName', $this->aName])
            ->andFilterWhere(['like', 'aCountry', $this->aCountry])
            ->andFilterWhere(['like', 'alsRetired', $this->alsRetired]);

        return $dataProvider;
    }
}
