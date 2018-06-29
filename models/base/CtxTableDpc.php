<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_CTX_V2_DPC".
 *
 * @property integer $ID_CTX_TABLE
 * @property string $TABLE_DESC
 * @property string $TABLE_SOURCE
 * @property string $TIPE_DESC
 * @property string $TABLE_REF_LINK_PARENT
 * @property string $KEY_SOURCE_FOR_REF
 * @property integer $CONFIG_LINK_ID_PARENT
 * @property string $RECORD_SOURCE
 * @property string $KEY_HIER_LINK
 * @property string $LOAD_DATE_FIELD_SOURCE
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $TABLE_DESC_MV
 * @property string $RUN_KEY
 * @property string $ADDITIONAL_KEY
 * @property string $SOURCE_COLUMN_ID
 * @property string $FLAG_MULTIDATE
 * @property string $FLAG_UPDATE_END_DATE
 */
class CtxTableDpc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_CTX_V2_DPC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CTX_TABLE'], 'required'],
            [['ID_CTX_TABLE', 'CONFIG_LINK_ID_PARENT'], 'integer'],
            [['TABLE_DESC', 'TABLE_SOURCE', 'TIPE_DESC', 'TABLE_REF_LINK_PARENT', 'KEY_SOURCE_FOR_REF', 'RECORD_SOURCE', 'KEY_HIER_LINK', 'LOAD_DATE_FIELD_SOURCE', 'TABLE_DESC_MV', 'RUN_KEY', 'SOURCE_COLUMN_ID', 'FLAG_MULTIDATE', 'FLAG_UPDATE_END_DATE'], 'string', 'max' => 128],
            [['START_DATE', 'END_DATE'], 'string', 'max' => 30],
            [['ID_CTX_TABLE'], 'unique'],
            ['ADDITIONAL_KEY','required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_CTX_TABLE' => 'Id  Ctx  Table',
            'TABLE_DESC' => 'Table  Desc',
            'TABLE_SOURCE' => 'Table  Source',
            'TIPE_DESC' => 'Tipe  Desc',
            'TABLE_REF_LINK_PARENT' => 'Table  Ref  Link  Parent',
            'KEY_SOURCE_FOR_REF' => 'Key  Source  For  Ref',
            'CONFIG_LINK_ID_PARENT' => 'Config  Link  Id  Parent',
            'RECORD_SOURCE' => 'Record  Source',
            'KEY_HIER_LINK' => 'Key  Hier  Link',
            'LOAD_DATE_FIELD_SOURCE' => 'Load  Date  Field  Source',
            'START_DATE' => 'Start  Date',
            'END_DATE' => 'End  Date',
            'TABLE_DESC_MV' => 'Table  Desc  Mv',
            'RUN_KEY' => 'Run  Key',
            'ADDITIONAL_KEY' => 'Additional  Key',
            'SOURCE_COLUMN_ID' => 'Source  Column  ID',
            'FLAG_MULTIDATE' => 'Flag  Multidate',
            'FLAG_UPDATE_END_DATE' => 'Flag  Update  End  Date',
        ];
    }
}
