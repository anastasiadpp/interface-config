<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_LINK_V2_DPC".
 *
 * @property string $ID
 * @property string $TABLE_LINK
 * @property string $TABLE_SOURCE
 * @property string $TABLE_REF
 * @property string $FLAG_TABLE_REF_IS_LINK
 * @property string $ID_LINK
 * @property string $KEY_SOURCE
 * @property string $KEY_REF
 * @property string $RECORD_SOURCE
 * @property string $LOAD_DATE_FIELD_SOURCE
 * @property string $RUN_ORDER
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $ID_TABLE_REF_IS_LINK
 * @property string $RUN_KEY
 * @property string $ID_LK_TABLE
 */
class LinkTableDpc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_LINK_V2_DPC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'RUN_ORDER', 'ID_TABLE_REF_IS_LINK', 'ID_LK_TABLE'], 'number'],
            [['ID_LK_TABLE'], 'required'],
            [['TABLE_LINK', 'TABLE_SOURCE', 'TABLE_REF'], 'string', 'max' => 103],
            [['FLAG_TABLE_REF_IS_LINK'], 'string', 'max' => 1],
            [['ID_LINK', 'KEY_REF', 'RECORD_SOURCE', 'LOAD_DATE_FIELD_SOURCE', 'RUN_KEY'], 'string', 'max' => 100],
            [['KEY_SOURCE'], 'string', 'max' => 405],
            [['START_DATE', 'END_DATE'], 'string', 'max' => 10],
            [['ID_LK_TABLE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
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
            'ID_LK_TABLE' => 'Id  Lk  Table',
        ];
    }
}
