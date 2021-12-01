<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ogrecordranking;

/**
 * OgrecordrankingSearch represents the model behind the search form of `frontend\models\Ogrecordranking`.
 */
class OgrecordrankingSearch extends Ogrecordranking
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sportsID', 'sportsYear', 'sportsAthletesID'], 'integer'],
            [['sports', 'sportsRecord'], 'safe'],
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
        $query = Ogrecordranking::find();

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
            'sportsID' => $this->sportsID,
            'sportsYear' => $this->sportsYear,
            'sportsAthletesID' => $this->sportsAthletesID,
        ]);

        $query->andFilterWhere(['like', 'sports', $this->sports])
            ->andFilterWhere(['like', 'sportsRecord', $this->sportsRecord]);

        return $dataProvider;
    }
}
