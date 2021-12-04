<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_messageboard".
 *
 * @property int $bId
 * @property int $bUId
 * @property string $bContent
 * @property string $bTime
 *
 * @property OgUser $bU
 */
class OgMessageboard extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_messageboard';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bId', 'bUId', 'bContent', 'bTime'], 'required'],
            [['bId', 'bUId'], 'integer'],
            [['bContent'], 'string'],
            [['bTime'], 'safe'],
            [['bId'], 'unique'],
            [['bUId'], 'exist'], //'skipOnError' => true, 'targetClass' => OgUser::className(), 'targetAttribute' => ['bUId' => 'idOG_User']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bId' => 'B ID',
            'bUId' => 'B U ID',
            'bContent' => 'B Content',
            'bTime' => 'B Time',
        ];
    }

    /**
     * Gets query for [[BU]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBU()
    {
        return $this->hasOne(OgUser::className(), ['idOG_User' => 'bUId']);
    }
}
