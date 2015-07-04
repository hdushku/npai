<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property integer $id
 * @property string $role_name
 * @property integer $role_value
 *
 * @property TblUser[] $tblUsers
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_name', 'role_value'], 'required'],
            [['role_value'], 'integer'],
            [['role_name'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'role_name' => Yii::t('app', 'Role Name'),
            'role_value' => Yii::t('app', 'Role Value'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblUsers()
    {
        return $this->hasMany(TblUser::className(), ['role_id' => 'id']);
    }
}
