<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Courses;

/**
 * CoursesSearch represents the model behind the search form of `app\models\Courses`.
 */
class CoursesSearch extends Courses
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['course_code', 'course_name', 'course_description', 'date_created', 'date_modified', 'status', 'education_level'], 'safe'],
            [['modified_by'], 'number'],
            [['course_id'], 'integer'],
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
        $query = Courses::find();

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
            'date_created' => $this->date_created,
            'date_modified' => $this->date_modified,
            'modified_by' => $this->modified_by,
            'course_id' => $this->course_id,
        ]);

        $query->andFilterWhere(['ilike', 'course_code', $this->course_code])
            ->andFilterWhere(['ilike', 'course_name', $this->course_name])
            ->andFilterWhere(['ilike', 'course_description', $this->course_description])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'education_level', $this->education_level]);

        return $dataProvider;
    }
}
