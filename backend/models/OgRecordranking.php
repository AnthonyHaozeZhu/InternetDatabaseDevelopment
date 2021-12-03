<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "og_recordranking".
 *
 * @property int $sportsID
 * @property string $sports
 * @property string $sportsRecord
 * @property int $sportsYear
 * @property int $sportsAthletesID
 *
 * @property OgHistorialscore $ogHistorialscore
 * @property OgSports $ogSports
 * @property OgAthletes $sportsAthletes
 * @property OgYearog $sportsYear0
 */
class OgRecordranking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_recordranking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sports', 'sportsRecord', 'sportsYear', 'sportsAthletesID'], 'required'],
            [['sportsYear', 'sportsAthletesID'], 'integer'],
            [['sports', 'sportsRecord'], 'string', 'max' => 255],
            [['sportsYear'], 'exist', 'skipOnError' => true, 'targetClass' => OgYearog::className(), 'targetAttribute' => ['sportsYear' => 'year']],
            [['sportsAthletesID'], 'exist', 'skipOnError' => true, 'targetClass' => OgAthletes::className(), 'targetAttribute' => ['sportsAthletesID' => 'aID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sportsID' => 'Sports ID',
            'sports' => 'Sports',
            'sportsRecord' => 'Sports Record',
            'sportsYear' => 'Sports Year',
            'sportsAthletesID' => 'Sports Athletes ID',
        ];
    }

    /**
     * Gets query for [[OgHistorialscore]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgHistorialscore()
    {
        return $this->hasOne(OgHistorialscore::className(), ['hSportsID' => 'sportsID']);
    }

    /**
     * Gets query for [[OgSports]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgSports()
    {
        return $this->hasOne(OgSports::className(), ['sSportsID' => 'sportsID']);
    }

    /**
     * Gets query for [[SportsAthletes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSportsAthletes()
    {
        return $this->hasOne(OgAthletes::className(), ['aID' => 'sportsAthletesID']);
    }

    /**
     * Gets query for [[SportsYear0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSportsYear0()
    {
        return $this->hasOne(OgYearog::className(), ['year' => 'sportsYear']);
    }
}
