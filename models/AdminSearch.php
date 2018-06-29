<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\Admin;

/**
 * AdminSearch represents the model behind the search form about `app\models\base\Admin`.
 */
class AdminSearch extends Admin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'ID_ROLE'], 'integer'],
            [['USERNAME', 'FULLNAME', 'PASSWORD', 'AUTHKEY', 'ACCESSTOKEN', 'LAST_LOGIN', 'LAST_LOGOUT'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Admin::find();

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
            'ID' => $this->ID,
            'ID_ROLE' => $this->ID_ROLE,
        ]);

        $query->andFilterWhere(['like', 'USERNAME', $this->USERNAME])
            ->andFilterWhere(['like', 'FULLNAME', $this->FULLNAME])
            ->andFilterWhere(['like', 'PASSWORD', $this->PASSWORD])
            ->andFilterWhere(['like', 'AUTHKEY', $this->AUTHKEY])
            ->andFilterWhere(['like', 'ACCESSTOKEN', $this->ACCESSTOKEN])
            ->andFilterWhere(['like', 'LAST_LOGIN', $this->LAST_LOGIN])
            ->andFilterWhere(['like', 'LAST_LOGOUT', $this->LAST_LOGOUT]);

        return $dataProvider;
    }
}
