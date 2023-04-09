<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "activities".
 *
 * @property int $id
 * @property string|null $activity_name
 * @property string|null $description
 * @property string|null $activity_date
 * @property string|null $status
 * @property string|null $created_on
 */
class Activities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'activities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description','activity_date', 'activity_name','status'], 'required']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'activity_name' => 'Activity Name',
            'description' => 'Description',
            'activity_date' => 'Activity Date',
            'status' => 'Activity Status',
        ];
    }
}
