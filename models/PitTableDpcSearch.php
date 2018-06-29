<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\PitTableDpc;

/**
 * PitTableDpcSearch represents the model behind the search form about `app\models\base\PitTableDpc`.
 */
class PitTableDpcSearch extends PitTableDpc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PIT_TABLE', 'NO', 'DEPENDEN_NO', 'MANDATORY_FLAG'], 'integer'],
            [['TABLE_PIT', 'TABLE_PARENT', 'TABLE_DESC', 'TABLE_REFLINK_PARENT', 'KEY', 'DEPENDEN_KEY', 'START_DATE', 'END_DATE', 'RECORD_SOURCE', 'LAST_LOAD_DATE', 'ADDITIONAL_KEY', 'TABLE_ALIAS'], 'safe'],
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
        $query = PitTableDpc::find();

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
            'ID_PIT_TABLE' => $this->ID_PIT_TABLE,
            'NO' => $this->NO,
            'DEPENDEN_NO' => $this->DEPENDEN_NO,
            'MANDATORY_FLAG' => $this->MANDATORY_FLAG,
        ]);

        $query->andFilterWhere(['like', 'TABLE_PIT', $this->TABLE_PIT])
            ->andFilterWhere(['like', 'TABLE_PARENT', $this->TABLE_PARENT])
            ->andFilterWhere(['like', 'TABLE_DESC', $this->TABLE_DESC])
            ->andFilterWhere(['like', 'TABLE_REFLINK_PARENT', $this->TABLE_REFLINK_PARENT])
            ->andFilterWhere(['like', 'KEY', $this->KEY])
            ->andFilterWhere(['like', 'DEPENDEN_KEY', $this->DEPENDEN_KEY])
            ->andFilterWhere(['like', 'START_DATE', $this->START_DATE])
            ->andFilterWhere(['like', 'END_DATE', $this->END_DATE])
            ->andFilterWhere(['like', 'RECORD_SOURCE', $this->RECORD_SOURCE])
            ->andFilterWhere(['like', 'LAST_LOAD_DATE', $this->LAST_LOAD_DATE])
            ->andFilterWhere(['like', 'ADDITIONAL_KEY', $this->ADDITIONAL_KEY])
            ->andFilterWhere(['like', 'TABLE_ALIAS', $this->TABLE_ALIAS]);

        return $dataProvider;
    }
}
