<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Staff;

/**
 * StaffSearch represents the model behind the search form of `app\models\Staff`.
 */
class StaffSearch extends Staff
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usr_id', 'user_types_id', 'usr_created_by', 'usr_modified_by', 'usr_phone_no'], 'number'],
            [['usr_auth_salt', 'usr_date_created', 'usr_date_modified', 'usr_email', 'usr_full_name', 'usr_last_login', 'usr_roles', 'usr_session_expiry', 'usr_staff_id', 'usr_status', 'usr_username', 'usr_title', 'usr_education_level'], 'safe'],
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
        $query = Staff::find();

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
            'usr_id' => $this->usr_id,
            'user_types_id' => $this->user_types_id,
            'usr_created_by' => $this->usr_created_by,
            'usr_date_created' => $this->usr_date_created,
            'usr_date_modified' => $this->usr_date_modified,
            'usr_last_login' => $this->usr_last_login,
            'usr_modified_by' => $this->usr_modified_by,
            'usr_phone_no' => $this->usr_phone_no,
            'usr_session_expiry' => $this->usr_session_expiry,
        ]);

        $query->andFilterWhere(['ilike', 'usr_auth_salt', $this->usr_auth_salt])
            ->andFilterWhere(['ilike', 'usr_email', $this->usr_email])
            ->andFilterWhere(['ilike', 'usr_full_name', $this->usr_full_name])
            ->andFilterWhere(['ilike', 'usr_roles', $this->usr_roles])
            ->andFilterWhere(['ilike', 'usr_staff_id', $this->usr_staff_id])
            ->andFilterWhere(['ilike', 'usr_status', $this->usr_status])
            ->andFilterWhere(['ilike', 'usr_username', $this->usr_username])
            ->andFilterWhere(['ilike', 'usr_title', $this->usr_title])
            ->andFilterWhere(['ilike', 'usr_education_level', $this->usr_education_level]);

        return $dataProvider;
    }
}
