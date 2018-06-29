<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_ALL_TAB_COLUMNS".
 *
 * @property string $OWNER
 * @property string $TABLE_NAME
 * @property string $COLUMN_NAME
 * @property string $DATA_TYPE
 * @property string $DATA_LENGTH
 * @property string $DATA_PRECISION
 * @property string $DATA_SCALE
 * @property string $NULLABLE
 * @property string $COLUMN_ID
 * @property string $DEFAULT_LENGTH
 * @property string $NUM_DISTINCT
 */
class AllColum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_ALL_TAB_COLUMNS';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['OWNER', 'TABLE_NAME', 'COLUMN_NAME', 'DATA_LENGTH'], 'required'],
            [['DATA_LENGTH', 'DATA_PRECISION', 'DATA_SCALE', 'COLUMN_ID', 'DEFAULT_LENGTH', 'NUM_DISTINCT'], 'number'],
            [['OWNER', 'TABLE_NAME', 'COLUMN_NAME'], 'string', 'max' => 30],
            [['DATA_TYPE'], 'string', 'max' => 106],
            [['NULLABLE'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'OWNER' => 'Owner',
            'TABLE_NAME' => 'Table  Name',
            'COLUMN_NAME' => 'Column  Name',
            'DATA_TYPE' => 'Data  Type',
            'DATA_LENGTH' => 'Data  Length',
            'DATA_PRECISION' => 'Data  Precision',
            'DATA_SCALE' => 'Data  Scale',
            'NULLABLE' => 'Nullable',
            'COLUMN_ID' => 'Column  ID',
            'DEFAULT_LENGTH' => 'Default  Length',
            'NUM_DISTINCT' => 'Num  Distinct',
        ];
    }
}
