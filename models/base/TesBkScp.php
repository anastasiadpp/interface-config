<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_BK_V2_DPC_SCP".
 *
 * @property integer $ID_BK_TABLE_SCP
 * @property integer $ID_BK_TABLE_REF
 * @property string $TABLE_REF
 * @property string $KEY_REF
 * @property string $KEY_SOURCE
 * @property string $RECORD_SOURCE
 * @property string $RUN_KEY
 */
class TesBkScp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_BK_V2_DPC_SCP';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_BK_TABLE_SCP'], 'required'],
            [['ID_BK_TABLE_SCP', 'ID_BK_TABLE_REF'], 'integer'],
            [['TABLE_REF', 'KEY_REF', 'KEY_SOURCE', 'RECORD_SOURCE', 'RUN_KEY'], 'string', 'max' => 128],
            [['ID_BK_TABLE_SCP'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_BK_TABLE_SCP' => 'Id  Bk  Table  Scp',
            'ID_BK_TABLE_REF' => 'Id  Bk  Table  Ref',
            'TABLE_REF' => 'Table  Ref',
            'KEY_REF' => 'Key  Ref',
            'KEY_SOURCE' => 'Key  Source',
            'RECORD_SOURCE' => 'Record  Source',
            'RUN_KEY' => 'Run  Key',
        ];
    }
}
