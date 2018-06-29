<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\BkTable;

/**
 * BkTableSearch represents the model behind the search form about `app\models\base\BkTable`.
 */
class BkTableSearch extends BkTable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TABLE_REF', 'TABLE_SOURCE', 'KEY_REF', 'KEY_SOURCE', 'RECORD_SOURCE', 'LOAD_DATE_FIELD_SOURCE', 'START_DATE', 'END_DATE', 'RUN_KEY'], 'safe'],
            [['ID_BK_TABLE'], 'number'],
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
        $query = BkTable::find();

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
            'ID_BK_TABLE' => $this->ID_BK_TABLE,
        ]);

        $query->andFilterWhere(['like', 'TABLE_REF', $this->TABLE_REF])
            ->andFilterWhere(['like', 'TABLE_SOURCE', $this->TABLE_SOURCE])
            ->andFilterWhere(['like', 'KEY_REF', $this->KEY_REF])
            ->andFilterWhere(['like', 'KEY_SOURCE', $this->KEY_SOURCE])
            ->andFilterWhere(['like', 'RECORD_SOURCE', $this->RECORD_SOURCE])
            ->andFilterWhere(['like', 'LOAD_DATE_FIELD_SOURCE', $this->LOAD_DATE_FIELD_SOURCE])
            ->andFilterWhere(['like', 'START_DATE', $this->START_DATE])
            ->andFilterWhere(['like', 'END_DATE', $this->END_DATE])
            ->andFilterWhere(['like', 'RUN_KEY', $this->RUN_KEY]);

        return $dataProvider;
    }
}
