<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_athletes".
 *
 * @property int $aID
 * @property string $aName
 * @property string $aCountry
 * @property int $alsRetired
 *
 * @property OgRecordranking[] $ogRecordrankings
 */
class OgAthletes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_athletes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aName', 'aCountry', 'alsRetired'], 'required'],
            [['alsRetired'], 'integer'],
            [['aName', 'aCountry'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'aID' => 'A ID',
            'aName' => 'A Name',
            'aCountry' => 'A Country',
            'alsRetired' => 'Als Retired',
        ];
    }

    /**
     * Gets query for [[OgRecordrankings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgRecordrankings()
    {
        return $this->hasMany(OgRecordranking::className(), ['sportsAthletesID' => 'aID']);
    }
}
