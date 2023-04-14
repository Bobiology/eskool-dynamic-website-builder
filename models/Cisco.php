<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cisco_academy".
 *
 * @property string|null $activity_type certification, bootcamp, hackathon
 * @property string $status
 * @property int $activity_id
 * @property string $activity_name
 * @property string $description
 * @property string $created_on
 * @property string $event_date
 * @property string|null $application_link
 */
class Cisco extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{cisco}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_type', 'status', 'description', 'application_link'], 'string'],
            [['status', 'activity_name', 'description', 'event_date'], 'required'],
            [['created_on', 'event_date'], 'safe'],
            [['activity_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'activity_type' => 'Activity Type',
            'status' => 'Status',
            'activity_id' => 'Activity ID',
            'activity_name' => 'Activity Name',
            'description' => 'Description',
            'created_on' => 'Created On',
            'event_date' => 'Event Date',
            'application_link' => 'Application Link',
        ];
    }
}
