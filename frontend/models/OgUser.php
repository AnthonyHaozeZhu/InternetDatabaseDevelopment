<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "og_user".
 *
 * @property int $idOG_User
 * @property string $uName
 * @property string $uPwd
 * @property int $uPhone
 * @property string|null $uRname
 * @property int $uAuthority
 *
 * @property OgMessageboard[] $ogMessageboards
 * @property OgAuthority $uAuthority0
 */
class OgUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uName', 'uPwd', 'uPhone', 'uAuthority'], 'required'],
            [['uPhone', 'uAuthority'], 'integer'],
            [['uName', 'uPwd'], 'string', 'max' => 255],
            [['uRname'], 'string', 'max' => 30],
            [['uAuthority'], 'exist', 'skipOnError' => true, 'targetClass' => OgAuthority::className(), 'targetAttribute' => ['uAuthority' => 'userId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idOG_User' => 'Id Og  User',
            'uName' => 'U Name',
            'uPwd' => 'U Pwd',
            'uPhone' => 'U Phone',
            'uRname' => 'U Rname',
            'uAuthority' => 'U Authority',
        ];
    }

    /**
     * Gets query for [[OgMessageboards]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgMessageboards()
    {
        return $this->hasMany(OgMessageboard::className(), ['bUId' => 'idOG_User']);
    }

    /**
     * Gets query for [[UAuthority0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUAuthority0()
    {
        return $this->hasOne(OgAuthority::className(), ['userId' => 'uAuthority']);
    }
}
