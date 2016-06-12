<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tournaments;

/**
 * TournamentsSearch represents the model behind the search form about `backend\models\Tournaments`.
 */
class TournamentsSearch extends Tournaments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'level', 'match_format', 'tournament_format', 'organisation', 'year_count'], 'integer'],
            [['name', 'home_away', 'created_at', 'updated_at', 'status', 'priority'], 'safe'],
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
        $query = Tournaments::find();

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
            'level' => $this->level,
            'match_format' => $this->match_format,
            'tournament_format' => $this->tournament_format,
            'organisation' => $this->organisation,
            'year_count' => $this->year_count,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'home_away', $this->home_away])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
