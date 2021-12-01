<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sports".
 *
 * @property int $smallSportsID
 * @property string|null $rsmallSports
 * @property string|null $sSports
 * @property int|null $sFoundTime
 */
class Sports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['smallSportsID'], 'required'],
            [['smallSportsID', 'sFoundTime'], 'integer'],
            [['rsmallSports', 'sSports'], 'string', 'max' => 255],
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
            'rsmallSports' => '项目名称',
            'sSports' => '所属大项',
            'sFoundTime' => '项目成立时间',
        ];
    }
}
