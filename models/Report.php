<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "report".
 *
 * @property integer $id
 * @property string $report_url
 * @property string $jenis_transaksi
 * @property string $date
 */
class Report extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'report';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['report_url', 'jenis_transaksi', 'date', 'from_date','until_date'], 'required'],
            [['date', 'until_date','from_date'], 'safe'],
            [['report_url'], 'string', 'max' => 300],
            [['jenis_transaksi'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'report_url' => 'Report Url',
            'jenis_transaksi' => 'Jenis Transaksi',
            'date' => 'Date',
            'from_date' => 'From Date',
            'until_date' => 'Until Date',
        ];
    }
}
