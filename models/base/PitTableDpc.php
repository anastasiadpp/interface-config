<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_PIT_V2_DPC".
 *
 * @property integer $ID_PIT_TABLE
 * @property integer $NO
 * @property string $TABLE_PIT
 * @property string $TABLE_PARENT
 * @property string $TABLE_DESC
 * @property string $TABLE_REFLINK_PARENT
 * @property integer $DEPENDEN_NO
 * @property string $KEY
 * @property string $DEPENDEN_KEY
 * @property string $START_DATE
 * @property string $END_DATE
 * @property string $RECORD_SOURCE
 * @property string $LAST_LOAD_DATE
 * @property integer $MANDATORY_FLAG
 * @property string $ADDITIONAL_KEY
 * @property string $TABLE_ALIAS
 */
class PitTableDpc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_PIT_V2_DPC';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_PIT_TABLE'], 'required'],
            [['ID_PIT_TABLE', 'NO', 'DEPENDEN_NO', 'MANDATORY_FLAG'], 'integer'],
            [['TABLE_PIT', 'TABLE_PARENT', 'TABLE_DESC', 'TABLE_REFLINK_PARENT', 'KEY', 'DEPENDEN_KEY', 'RECORD_SOURCE', 'TABLE_ALIAS'], 'string', 'max' => 128],
            [['START_DATE', 'END_DATE', 'LAST_LOAD_DATE'], 'string', 'max' => 30],
            [['ADDITIONAL_KEY'], 'string', 'max' => 255],
            [['ID_PIT_TABLE'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_PIT_TABLE' => 'Id  Pit  Table',
            'NO' => 'No',
            'TABLE_PIT' => 'Table  Pit',
            'TABLE_PARENT' => 'Table  Parent',
            'TABLE_DESC' => 'Table  Desc',
            'TABLE_REFLINK_PARENT' => 'Table  Reflink  Parent',
            'DEPENDEN_NO' => 'Dependen  No',
            'KEY' => 'Key',
            'DEPENDEN_KEY' => 'Dependen  Key',
            'START_DATE' => 'Start  Date',
            'END_DATE' => 'End  Date',
            'RECORD_SOURCE' => 'Record  Source',
            'LAST_LOAD_DATE' => 'Last  Load  Date',
            'MANDATORY_FLAG' => 'Mandatory  Flag',
            'ADDITIONAL_KEY' => 'Additional  Key',
            'TABLE_ALIAS' => 'Table  Alias',
        ];
    }
}
