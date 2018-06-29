<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\TesBkScp;

/**
 * TesBkScpSearch represents the model behind the search form about `app\models\base\TesBkScp`.
 */
class TesBkScpSearch extends TesBkScp
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_BK_TABLE_SCP', 'ID_BK_TABLE_REF'], 'integer'],
            [['TABLE_REF', 'KEY_REF', 'KEY_SOURCE', 'RECORD_SOURCE', 'RUN_KEY'], 'safe'],
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
        $query = TesBkScp::find();

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
            'ID_BK_TABLE_SCP' => $this->ID_BK_TABLE_SCP,
            'ID_BK_TABLE_REF' => $this->ID_BK_TABLE_REF,
        ]);

        $query->andFilterWhere(['like', 'TABLE_REF', $this->TABLE_REF])
            ->andFilterWhere(['like', 'KEY_REF', $this->KEY_REF])
            ->andFilterWhere(['like', 'KEY_SOURCE', $this->KEY_SOURCE])
            ->andFilterWhere(['like', 'RECORD_SOURCE', $this->RECORD_SOURCE])
            ->andFilterWhere(['like', 'RUN_KEY', $this->RUN_KEY]);

        return $dataProvider;
    }
}
