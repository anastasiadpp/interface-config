<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_REF_V2_DPC".
 *
 * @property integer $ID_REF_TABLE
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
class RefTableDpc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_REF_V2_DPC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_REF_TABLE'], 'required'],
            [['ID_REF_TABLE'], 'integer'],
            [['TABLE_REF', 'TABLE_SOURCE', 'KEY_REF', 'KEY_SOURCE', 'RECORD_SOURCE', 'LOAD_DATE_FIELD_SOURCE', 'RUN_KEY'], 'string', 'max' => 128],
            [['START_DATE', 'END_DATE'], 'string', 'max' => 30],
            [['ID_REF_TABLE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_REF_TABLE' => 'Id  Ref  Table',
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
