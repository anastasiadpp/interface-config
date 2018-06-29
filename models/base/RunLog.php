<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_RUN_LOG_V2".
 *
 * @property string $DATETIME
 * @property string $RECORD_SOURCE
 * @property string $LOG
 * @property string $SEQ
 * @property string $ID
 */
class RunLog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_RUN_LOG_V2';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['SEQ', 'ID'], 'number'],
            [['DATETIME'], 'string', 'max' => 7],
            [['RECORD_SOURCE'], 'string', 'max' => 100],
            [['LOG'], 'string', 'max' => 4000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'DATETIME' => 'Datetime',
            'RECORD_SOURCE' => 'Record  Source',
            'LOG' => 'Log',
            'SEQ' => 'Seq',
            'ID' => 'ID',
        ];
    }
}
