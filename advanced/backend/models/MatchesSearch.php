<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Matches;

/**
 * MatchesSearch represents the model behind the search form about `backend\models\Matches`.
 */
class MatchesSearch extends Matches
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'tournament', 'root', 'toss', 'batting_first', 'home_runs', 'home_balls', 'home_wks', 'away_runs', 'away_balls', 'away_wks'], 'integer'],
            [['type', 'scheduled_at', 'home_team', 'away_team', 'result', 'details', 'comments', 'created_at', 'updated_at', 'status', 'priority'], 'safe'],
            [['run_rate'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Matches::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'tournament' => $this->tournament,
            'root' => $this->root,
            'scheduled_at' => $this->scheduled_at,
            'toss' => $this->toss,
            'batting_first' => $this->batting_first,
            'home_runs' => $this->home_runs,
            'home_balls' => $this->home_balls,
            'home_wks' => $this->home_wks,
            'away_runs' => $this->away_runs,
            'away_balls' => $this->away_balls,
            'away_wks' => $this->away_wks,
            'run_rate' => $this->run_rate,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'home_team', $this->home_team])
            ->andFilterWhere(['like', 'away_team', $this->away_team])
            ->andFilterWhere(['like', 'result', $this->result])
            ->andFilterWhere(['like', 'details', $this->details])
            ->andFilterWhere(['like', 'comments', $this->comments])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
