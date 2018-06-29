<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "PS_CONFIG_BK_V2_DPC_SCP_REF".
 *
 * @property integer $ID
 * @property string $TABLE_REF
 */
class BkTableScpRef extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'PS_CONFIG_BK_V2_DPC_SCP_REF';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID'], 'integer'],
            [['TABLE_REF'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'TABLE_REF' => 'Table  Ref',
        ];
    }
}
