<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "og_sports".
 *
 * @property int $sSportsID
 * @property string $sSports
 * @property int $sFoundTime
 */
class OgSports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_sports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sSports', 'sFoundTime'], 'required'],
            [['sFoundTime'], 'integer'],
            [['sSports'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sSportsID' => 'S Sports ID',
            'sSports' => 'S Sports',
            'sFoundTime' => 'S Found Time',
        ];
    }
}
