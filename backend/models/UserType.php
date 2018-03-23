<?php

namespace backend\models;

use Yii;
use common\models\User;
/**
 * This is the model class for table "user_type".
 *
 * @property int $id
 * @property int $user_type_name
 * @property int $user_type_value
 */
class UserType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_type_name', 'user_type_value'], 'required'],
            [['user_type_name', 'user_type_value'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_type_name' => 'User Type Name',
            'user_type_value' => 'User Type Value',
        ];
    }
	/**
* @return \yii\db\ActiveQuery
*/
public function getUsers()
{
return $this->hasMany(User::className(), ['user_type_id' => 'user_type_value']);
}
}