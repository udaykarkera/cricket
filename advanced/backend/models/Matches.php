<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "matches".
 *
 * @property integer $id
 * @property integer $tournament
 * @property integer $root
 * @property string $type
 * @property string $scheduled_at
 * @property integer $toss
 * @property integer $batting_first
 * @property string $home_team
 * @property integer $home_runs
 * @property integer $home_balls
 * @property integer $home_wks
 * @property string $away_team
 * @property integer $away_runs
 * @property integer $away_balls
 * @property integer $away_wks
 * @property string $result
 * @property double $run_rate
 * @property string $details
 * @property string $comments
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property string $priority
 *
 * @property Tournaments $tournament0
 */
class Matches extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'matches';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tournament', 'type', 'scheduled_at', 'batting_first', 'home_team', 'home_runs', 'home_balls', 'home_wks', 'away_team', 'away_runs', 'away_balls', 'away_wks', 'result', 'run_rate', 'details', 'comments'], 'required'],
            [['tournament', 'root', 'toss', 'batting_first', 'home_runs', 'home_balls', 'home_wks', 'away_runs', 'away_balls', 'away_wks'], 'integer'],
            [['scheduled_at', 'created_at', 'updated_at'], 'safe'],
            [['result', 'status', 'priority'], 'string'],
            [['run_rate'], 'number'],
            [['type'], 'string', 'max' => 20],
            [['home_team', 'away_team'], 'string', 'max' => 50],
            [['details', 'comments'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tournament' => 'Tournament',
            'root' => 'Root',
            'type' => 'Type',
            'scheduled_at' => 'Scheduled At',
            'toss' => 'Toss',
            'batting_first' => 'Batting First',
            'home_team' => 'Home Team',
            'home_runs' => 'Home Runs',
            'home_balls' => 'Home Balls',
            'home_wks' => 'Home Wks',
            'away_team' => 'Away Team',
            'away_runs' => 'Away Runs',
            'away_balls' => 'Away Balls',
            'away_wks' => 'Away Wks',
            'result' => 'Result',
            'run_rate' => 'Run Rate',
            'details' => 'Details',
            'comments' => 'Comments',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'priority' => 'Priority',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournament0()
    {
        return $this->hasOne(Tournaments::className(), ['id' => 'tournament']);
    }
}
