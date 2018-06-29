<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_BK_V2_DPC".
 *
 * @property integer $ID_BK_TABLE
 * @property integer $ID_BK_TABLE_REF
 * @property string $TABLE_REF
 * @property string $TABLE_SOURCE
 * @property string $KEY_REF
 * @property string $KEY_SOURCE
 * @property string $RECORD_SOURCE
 * @property string $LOAD_DATE_FIELD_SOURCE
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $RUN_KEY
 */
class BkTableDpc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_BK_V2_DPC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_BK_TABLE'], 'required'],
            [['ID_BK_TABLE', 'ID_BK_TABLE_REF'], 'integer'],
            [['TABLE_REF', 'TABLE_SOURCE', 'KEY_REF', 'KEY_SOURCE', 'RECORD_SOURCE', 'LOAD_DATE_FIELD_SOURCE', 'RUN_KEY'], 'string', 'max' => 128],
            [['START_DATE', 'END_DATE'], 'string', 'max' => 7],
            [['ID_BK_TABLE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_BK_TABLE' => 'Id  Bk  Table',
            'ID_BK_TABLE_REF' => 'Id  Bk  Table  Ref',
            'TABLE_REF' => 'Table  Ref',
            'TABLE_SOURCE' => 'Table  Source',
            'KEY_REF' => 'Key  Ref',
            'KEY_SOURCE' => 'Key  Source',
            'RECORD_SOURCE' => 'Record  Source',
            'LOAD_DATE_FIELD_SOURCE' => 'Load  Date  Field  Source',
            'START_DATE' => 'Start  Date',
            'END_DATE' => 'End  Date',
            'RUN_KEY' => 'Run  Key',
        ];
    }
}
