<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\BallByBall;

/**
 * BallByBallSearch represents the model behind the search form about `backend\models\BallByBall`.
 */
class BallByBallSearch extends BallByBall
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'match_id', 'runs', 'wicket', 'n_w', 'b_lb', 'bowler', 'batsmen', 'wkeeper', 'feilder', 'innings'], 'integer'],
            [['ball_no', 'created_at', 'updated_at', 'status', 'priority'], 'safe'],
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
        $query = BallByBall::find();

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
            'match_id' => $this->match_id,
            'runs' => $this->runs,
            'wicket' => $this->wicket,
            'n_w' => $this->n_w,
            'b_lb' => $this->b_lb,
            'bowler' => $this->bowler,
            'batsmen' => $this->batsmen,
            'wkeeper' => $this->wkeeper,
            'feilder' => $this->feilder,
            'innings' => $this->innings,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'ball_no', $this->ball_no])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'priority', $this->priority]);

        return $dataProvider;
    }
}
