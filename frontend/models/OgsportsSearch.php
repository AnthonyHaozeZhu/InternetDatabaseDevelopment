<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Ogsports;

/**
 * OgsportsSearch represents the model behind the search form of `frontend\models\Ogsports`.
 */
class OgsportsSearch extends Ogsports
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sSportsID', 'sFoundTime'], 'integer'],
            [['sSports'], 'safe'],
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
        $query = Ogsports::find();

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
            'sSportsID' => $this->sSportsID,
            'sFoundTime' => $this->sFoundTime,
        ]);

        $query->andFilterWhere(['like', 'sSports', $this->sSports]);

        return $dataProvider;
    }
}
