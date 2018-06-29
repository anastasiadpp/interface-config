<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\LinkTableDpc;

/**
 * LinkTableDpcSearch represents the model behind the search form about `app\models\base\LinkTableDpc`.
 */
class LinkTableDpcSearch extends LinkTableDpc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'RUN_ORDER', 'ID_TABLE_REF_IS_LINK', 'ID_LK_TABLE'], 'number'],
            [['TABLE_LINK', 'TABLE_SOURCE', 'TABLE_REF', 'FLAG_TABLE_REF_IS_LINK', 'ID_LINK', 'KEY_SOURCE', 'KEY_REF', 'RECORD_SOURCE', 'LOAD_DATE_FIELD_SOURCE', 'START_DATE', 'END_DATE', 'RUN_KEY'], 'safe'],
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
        $query = LinkTableDpc::find();

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
            'RUN_ORDER' => $this->RUN_ORDER,
            'ID_TABLE_REF_IS_LINK' => $this->ID_TABLE_REF_IS_LINK,
            'ID_LK_TABLE' => $this->ID_LK_TABLE,
        ]);

        $query->andFilterWhere(['like', 'TABLE_LINK', $this->TABLE_LINK])
            ->andFilterWhere(['like', 'TABLE_SOURCE', $this->TABLE_SOURCE])
            ->andFilterWhere(['like', 'TABLE_REF', $this->TABLE_REF])
            ->andFilterWhere(['like', 'FLAG_TABLE_REF_IS_LINK', $this->FLAG_TABLE_REF_IS_LINK])
            ->andFilterWhere(['like', 'ID_LINK', $this->ID_LINK])
            ->andFilterWhere(['like', 'KEY_SOURCE', $this->KEY_SOURCE])
            ->andFilterWhere(['like', 'KEY_REF', $this->KEY_REF])
            ->andFilterWhere(['like', 'RECORD_SOURCE', $this->RECORD_SOURCE])
            ->andFilterWhere(['like', 'LOAD_DATE_FIELD_SOURCE', $this->LOAD_DATE_FIELD_SOURCE])
            ->andFilterWhere(['like', 'START_DATE', $this->START_DATE])
            ->andFilterWhere(['like', 'END_DATE', $this->END_DATE])
            ->andFilterWhere(['like', 'RUN_KEY', $this->RUN_KEY]);

        return $dataProvider;
    }
}
