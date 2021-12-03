<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "og_authority".
 *
 * @property int $userId
 * @property int $isManager
 *
 * @property OgUser[] $ogUsers
 */
class OgAuthority extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_authority';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isManager'], 'required'],
            [['isManager'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'User ID',
            'isManager' => 'Is Manager',
        ];
    }

    /**
     * Gets query for [[OgUsers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgUsers()
    {
        return $this->hasMany(OgUser::className(), ['uAuthority' => 'userId']);
    }
}
