<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ball_by_ball".
 *
 * @property integer $id
 * @property string $ball_no
 * @property integer $match_id
 * @property integer $runs
 * @property integer $wicket
 * @property integer $n_w
 * @property integer $b_lb
 * @property integer $bowler
 * @property integer $batsmen
 * @property integer $wkeeper
 * @property integer $feilder
 * @property integer $innings
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property string $priority
 *
 * @property Matches $match
 */
class BallByBall extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ball_by_ball';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ball_no', 'match_id', 'runs', 'wicket', 'n_w', 'b_lb', 'bowler', 'batsmen', 'wkeeper', 'feilder', 'innings'], 'required'],
            [['match_id', 'runs', 'wicket', 'n_w', 'b_lb', 'bowler', 'batsmen', 'wkeeper', 'feilder', 'innings'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['status', 'priority'], 'string'],
            [['ball_no'], 'string', 'max' => 5]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ball_no' => 'Ball No',
            'match_id' => 'Match ID',
            'runs' => 'Runs',
            'wicket' => 'Wicket',
            'n_w' => 'N W',
            'b_lb' => 'B Lb',
            'bowler' => 'Bowler',
            'batsmen' => 'Batsmen',
            'wkeeper' => 'Wkeeper',
            'feilder' => 'Feilder',
            'innings' => 'Innings',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'priority' => 'Priority',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatch()
    {
        return $this->hasOne(Matches::className(), ['id' => 'match_id']);
    }
}
