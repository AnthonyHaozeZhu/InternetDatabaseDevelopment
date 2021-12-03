<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "og_yearog".
 *
 * @property int $year
 * @property string $country
 * @property string $hostCity
 * @property int $scoresRankID
 *
 * @property OgRecordranking[] $ogRecordrankings
 * @property OgScoresranking $scoresRank
 */
class OgYearog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_yearog';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'hostCity', 'scoresRankID'], 'required'],
            [['scoresRankID'], 'integer'],
            [['country', 'hostCity'], 'string', 'max' => 255],
            [['scoresRankID'], 'exist', 'skipOnError' => true, 'targetClass' => OgScoresranking::className(), 'targetAttribute' => ['scoresRankID' => 'rID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'year' => 'Year',
            'country' => 'Country',
            'hostCity' => 'Host City',
            'scoresRankID' => 'Scores Rank ID',
        ];
    }

    /**
     * Gets query for [[OgRecordrankings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgRecordrankings()
    {
        return $this->hasMany(OgRecordranking::className(), ['sportsYear' => 'year']);
    }

    /**
     * Gets query for [[ScoresRank]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getScoresRank()
    {
        return $this->hasOne(OgScoresranking::className(), ['rID' => 'scoresRankID']);
    }
}
