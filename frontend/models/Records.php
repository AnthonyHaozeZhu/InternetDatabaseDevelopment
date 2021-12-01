<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "records".
 *
 * @property string $sports
 * @property string|null $sportsRecord
 * @property int|null $sportsYear
 * @property string|null $aName
 * @property string|null $aCountry
 * @property string|null $alsRetired
 */
class Records extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'records';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sports'], 'required'],
            [['sportsYear'], 'integer'],
            [['sports', 'sportsRecord', 'aName', 'aCountry', 'alsRetired'], 'string', 'max' => 255],
            [['sports'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sports' => '运动名称',
            'sportsRecord' => '世界纪录',
            'sportsYear' => '记录创造日期',
            'aName' => '纪录保持者姓名',
            'aCountry' => '纪录保持者国籍',
            'alsRetired' => '是否退役',
        ];
    }
}
