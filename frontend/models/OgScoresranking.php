<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_scoresranking".
 *
 * @property int $rID
 * @property string $goldRank
 * @property string $medalsRank
 */
class OgScoresranking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_scoresranking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goldRank', 'medalsRank'], 'required'],
            [['goldRank', 'medalsRank'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rID' => 'R ID',
            'goldRank' => 'Gold Rank',
            'medalsRank' => 'Medals Rank',
        ];
    }
}
