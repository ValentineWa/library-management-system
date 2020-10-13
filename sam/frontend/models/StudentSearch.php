<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Student;

/**
 * StudentSearch represents the model behind the search form of `frontend\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['studentId', 'idNo', 'userId'], 'integer'],
            [['studentName', 'studentNo', 'gender', 'phoneNo', 'dateofJoin'], 'safe'],
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
        $query = Student::find();

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
            'studentId' => $this->studentId,
            'idNo' => $this->idNo,
            'dateofJoin' => $this->dateofJoin,
            'userId' => $this->userId,
        ]);

        $query->andFilterWhere(['like', 'studentName', $this->studentName])
            ->andFilterWhere(['like', 'studentNo', $this->studentNo])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'phoneNo', $this->phoneNo]);

        return $dataProvider;
    }
}
