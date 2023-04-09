<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "communications".
 *
 * @property int $comm_id
 * @property string $topic
 * @property string $message
 * @property string|null $communicated_by
 * @property string|null $status
 * @property string|null $communicated_on
 * @property string|null $created_on
 */
class Communications extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'communications';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['topic', 'message','communicated_by','status','communicated_on'], 'required'],
            [['message', 'communicated_by', 'status'], 'string'],
            [['communicated_on', 'created_on'], 'safe'],
            [['topic'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'comm_id' => 'Message ID',
            'topic' => 'Message Topic',
            'message' => 'Message',
            'communicated_by' => 'Communicated By',
            'status' => 'Message Status',
            'communicated_on' => 'Message Date',
            'created_on' => 'Created On',
        ];
    }
}
