<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Oguser;

/**
 * OguserSearch represents the model behind the search form of `backend\models\Oguser`.
 */
class OguserSearch extends Oguser
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idOG_User', 'uPhone', 'uAuthority'], 'integer'],
            [['uName', 'uPwd', 'uRname'], 'safe'],
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
        $query = Oguser::find();

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
            'idOG_User' => $this->idOG_User,
            'uPhone' => $this->uPhone,
            'uAuthority' => $this->uAuthority,
        ]);

        $query->andFilterWhere(['like', 'uName', $this->uName])
            ->andFilterWhere(['like', 'uPwd', $this->uPwd])
            ->andFilterWhere(['like', 'uRname', $this->uRname]);

        return $dataProvider;
    }
}
