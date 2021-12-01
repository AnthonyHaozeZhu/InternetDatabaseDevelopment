<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_ssportsid".
 *
 * @property int $smallSportsID
 * @property string|null $rsmallSports
 * @property int|null $sSportsID
 */
class OgSsportsid extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_ssportsid';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smallSportsID'], 'required'],
            [['smallSportsID', 'sSportsID'], 'integer'],
            [['rsmallSports'], 'string', 'max' => 255],
            [['smallSportsID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'smallSportsID' => 'Small Sports ID',
            'rsmallSports' => 'Rsmall Sports',
            'sSportsID' => 'S Sports ID',
        ];
    }
}
