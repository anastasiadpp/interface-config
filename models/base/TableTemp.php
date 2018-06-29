<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_TEMP".
 *
 * @property integer $ID_TEMP_TABLE
 * @property integer $ID_TABLE
 * @property string $TABLE_NAME
 * @property string $TYPE_NAME
 */
class TableTemp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_TEMP';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TEMP_TABLE', 'ID_TABLE'], 'integer'],
            [['TABLE_NAME'], 'string', 'max' => 128],
            [['TYPE_NAME'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID_TEMP_TABLE' => 'Id  Temp  Table',
            'ID_TABLE' => 'Id  Table',
            'TABLE_NAME' => 'Table  Name',
            'TYPE_NAME' => 'Type  Name',
        ];
    }
}
