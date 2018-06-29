<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\base\CtxTableDpc;

/**
 * CtxTableDpcSearch represents the model behind the search form about `app\models\base\CtxTableDpc`.
 */
class CtxTableDpcSearch extends CtxTableDpc
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CTX_TABLE', 'CONFIG_LINK_ID_PARENT'], 'integer'],
            [['TABLE_DESC', 'TABLE_SOURCE', 'TIPE_DESC', 'TABLE_REF_LINK_PARENT', 'KEY_SOURCE_FOR_REF', 'RECORD_SOURCE', 'KEY_HIER_LINK', 'LOAD_DATE_FIELD_SOURCE', 'START_DATE', 'END_DATE', 'TABLE_DESC_MV', 'RUN_KEY', 'ADDITIONAL_KEY', 'SOURCE_COLUMN_ID', 'FLAG_MULTIDATE', 'FLAG_UPDATE_END_DATE'], 'safe'],
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
        $query = CtxTableDpc::find();

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
            'ID_CTX_TABLE' => $this->ID_CTX_TABLE,
            'CONFIG_LINK_ID_PARENT' => $this->CONFIG_LINK_ID_PARENT,
        ]);

        $query->andFilterWhere(['like', 'TABLE_DESC', $this->TABLE_DESC])
            ->andFilterWhere(['like', 'TABLE_SOURCE', $this->TABLE_SOURCE])
            ->andFilterWhere(['like', 'TIPE_DESC', $this->TIPE_DESC])
            ->andFilterWhere(['like', 'TABLE_REF_LINK_PARENT', $this->TABLE_REF_LINK_PARENT])
            ->andFilterWhere(['like', 'KEY_SOURCE_FOR_REF', $this->KEY_SOURCE_FOR_REF])
            ->andFilterWhere(['like', 'RECORD_SOURCE', $this->RECORD_SOURCE])
            ->andFilterWhere(['like', 'KEY_HIER_LINK', $this->KEY_HIER_LINK])
            ->andFilterWhere(['like', 'LOAD_DATE_FIELD_SOURCE', $this->LOAD_DATE_FIELD_SOURCE])
            ->andFilterWhere(['like', 'START_DATE', $this->START_DATE])
            ->andFilterWhere(['like', 'END_DATE', $this->END_DATE])
            ->andFilterWhere(['like', 'TABLE_DESC_MV', $this->TABLE_DESC_MV])
            ->andFilterWhere(['like', 'RUN_KEY', $this->RUN_KEY])
            ->andFilterWhere(['like', 'ADDITIONAL_KEY', $this->ADDITIONAL_KEY])
            ->andFilterWhere(['like', 'SOURCE_COLUMN_ID', $this->SOURCE_COLUMN_ID])
            ->andFilterWhere(['like', 'FLAG_MULTIDATE', $this->FLAG_MULTIDATE])
            ->andFilterWhere(['like', 'FLAG_UPDATE_END_DATE', $this->FLAG_UPDATE_END_DATE]);

        return $dataProvider;
    }
}
