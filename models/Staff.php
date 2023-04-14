<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "staff".
 *
 * @property string|null $usr_email
 * @property string|null $usr_full_name
 * @property float|null $usr_phone_no
 * @property string|null $usr_roles
 * @property string $usr_staff_id
 * @property string|null $usr_status
 * @property string $usr_username
 * @property string|null $usr_title
 * @property string|null $usr_education_level
 */
class Staff extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{staff}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usr_staff_id', 'usr_username'], 'required'],
            [['usr_phone_no'], 'number'],
            [['usr_email', 'usr_full_name', 'usr_roles', 'usr_staff_id', 'usr_status', 'usr_username', 'usr_title', 'usr_education_level'], 'string', 'max' => 255],
            [['usr_id','usr_staff_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usr_id' => 'Usr ID',
            'usr_email' => 'Staff Email',
            'usr_full_name' => 'Staff Full Name',
            'usr_phone_no' => 'Staff Phone No',
            'usr_roles' => 'Staff Roles',
            'usr_staff_id' => 'Staff ID',
            'usr_status' => 'Staff Status',
            'usr_username' => 'Staff Username',
            'usr_title' => 'Staff Title',
            'usr_education_level' => 'Staff Education Level',
        ];
    }
}
