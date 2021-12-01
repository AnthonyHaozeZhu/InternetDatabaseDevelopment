<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property int $rID
 * @property int|null $year
 * @property string|null $country
 * @property string|null $hostCity
 * @property string|null $goldRank
 * @property string|null $medalsRank
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rID'], 'required'],
            [['rID', 'year'], 'integer'],
            [['country', 'hostCity', 'goldRank', 'medalsRank'], 'string', 'max' => 255],
            [['rID'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rID' => '届数',
            'year' => '举办年份',
            'country' => '举办国家',
            'hostCity' => '城市',
            'goldRank' => '金牌榜',
            'medalsRank' => '奖牌榜',
        ];
    }
}
