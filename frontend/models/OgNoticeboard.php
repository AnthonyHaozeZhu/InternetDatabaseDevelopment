<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_noticeboard".
 *
 * @property int $nId
 * @property int $bManager
 * @property string|null $bContent
 * @property string|null $bTime
 */
class OgNoticeboard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_noticeboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bManager'], 'required'],
            [['bManager'], 'integer'],
            [['bContent'], 'string'],
            [['bTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nId' => 'N ID',
            'bManager' => 'B Manager',
            'bContent' => 'B Content',
            'bTime' => 'B Time',
        ];
    }
}
