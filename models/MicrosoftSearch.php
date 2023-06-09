<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Microsoft;

/**
 * MicrosoftSearch represents the model behind the search form of `app\models\Microsoft`.
 */
class MicrosoftSearch extends Microsoft
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['activity_id'], 'integer'],
            [['activity_name', 'description', 'created_on', 'event_date', 'application_link', 'activity_type', 'status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Microsoft::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'activity_id' => $this->activity_id,
            'created_on' => $this->created_on,
            'event_date' => $this->event_date,
        ]);

        $query->andFilterWhere(['ilike', 'activity_name', $this->activity_name])
            ->andFilterWhere(['ilike', 'description', $this->description])
            ->andFilterWhere(['ilike', 'application_link', $this->application_link])
            ->andFilterWhere(['ilike', 'activity_type', $this->activity_type])
            ->andFilterWhere(['ilike', 'status', $this->status]);

        return $dataProvider;
    }
}
