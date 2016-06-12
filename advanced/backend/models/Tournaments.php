<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tournaments".
 *
 * @property integer $id
 * @property string $name
 * @property integer $level
 * @property integer $match_format
 * @property integer $tournament_format
 * @property integer $organisation
 * @property integer $year_count
 * @property string $home_away
 * @property string $created_at
 * @property string $updated_at
 * @property string $status
 * @property string $priority
 *
 * @property Matches[] $matches
 * @property Levels $level0
 * @property MatchFormats $matchFormat
 * @property TournamentFormats $tournamentFormat
 * @property Organisations $organisation0
 */
class Tournaments extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tournaments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'level', 'match_format', 'tournament_format', 'organisation', 'year_count'], 'required'],
            [['level', 'match_format', 'tournament_format', 'organisation', 'year_count'], 'integer'],
            [['home_away', 'status', 'priority'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Tournament Name',
            'level' => 'Level',
            'match_format' => 'Match Format',
            'tournament_format' => 'Tournament Format',
            'organisation' => 'Organisation',
            'year_count' => 'Year',
            'home_away' => 'Home Away',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'status' => 'Status',
            'priority' => 'Priority',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatches()
    {
        return $this->hasMany(Matches::className(), ['tournament' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLevel0()
    {
        return $this->hasOne(Levels::className(), ['id' => 'level']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMatchFormat()
    {
        return $this->hasOne(MatchFormats::className(), ['id' => 'match_format']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTournamentFormat()
    {
        return $this->hasOne(TournamentFormats::className(), ['id' => 'tournament_format']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganisation0()
    {
        return $this->hasOne(Organisations::className(), ['id' => 'organisation']);
    }
}
