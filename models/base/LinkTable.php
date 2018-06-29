<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "link_table".
 *
 * @property integer $id
 * @property string $ID_NUM
 * @property string $TABLE_LINK
 * @property string $TABLE_SOURCE
 * @property string $TABLE_REF
 * @property string $FLAG_TABLE_REF_IS_LINK
 * @property string $ID_LINK
 * @property string $KEY_SOURCE
 * @property string $KEY_REF
 * @property string $RECORD_SOURCE
 * @property string $LOAD_DATE_FIELD_SOURCE
 * @property integer $RUN_ORDER
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $ID_TABLE_REF_IS_LINK
 * @property string $RUN_KEY
 */
class LinkTable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'link_table';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RUN_ORDER'], 'integer'],
            [['ID_NUM', 'ID_TABLE_REF_IS_LINK'], 'string', 'max' => 3],
            [['TABLE_LINK', 'KEY_SOURCE'], 'string', 'max' => 255],
            [['TABLE_SOURCE'], 'string', 'max' => 255],
            [['TABLE_REF'], 'string', 'max' => 255],
            [['FLAG_TABLE_REF_IS_LINK'], 'string', 'max' => 255],
            [['ID_LINK'], 'string', 'max' => 255],
            [['KEY_REF'], 'string', 'max' => 255],
            [['RECORD_SOURCE'], 'string', 'max' => 255],
            [['LOAD_DATE_FIELD_SOURCE', 'RUN_KEY'], 'string', 'max' => 255],
            [['START_DATE'], 'string', 'max' => 255],
            [['END_DATE'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ID_NUM' => 'Id  Num',
            'TABLE_LINK' => 'Table  Link',
            'TABLE_SOURCE' => 'Table  Source',
            'TABLE_REF' => 'Table  Ref',
            'FLAG_TABLE_REF_IS_LINK' => 'Flag  Table  Ref  Is  Link',
            'ID_LINK' => 'Id  Link',
            'KEY_SOURCE' => 'Key  Source',
            'KEY_REF' => 'Key  Ref',
            'RECORD_SOURCE' => 'Record  Source',
            'LOAD_DATE_FIELD_SOURCE' => 'Load  Date  Field  Source',
            'RUN_ORDER' => 'Run  Order',
            'START_DATE' => 'Start  Date',
            'END_DATE' => 'End  Date',
            'ID_TABLE_REF_IS_LINK' => 'Id  Table  Ref  Is  Link',
            'RUN_KEY' => 'Run  Key',
        ];
    }
}
