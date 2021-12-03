<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Ogssportsid;

/**
 * OgssportsidSearch represents the model behind the search form of `backend\models\Ogssportsid`.
 */
class OgssportsidSearch extends Ogssportsid
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smallSportsID', 'sSportsID'], 'integer'],
            [['rsmallSports'], 'safe'],
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
        $query = Ogssportsid::find();

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
            'smallSportsID' => $this->smallSportsID,
            'sSportsID' => $this->sSportsID,
        ]);

        $query->andFilterWhere(['like', 'rsmallSports', $this->rsmallSports]);

        return $dataProvider;
    }
}
