<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Video;

/**
 * VideoSearch represents the model behind the search form of `common\models\Video`.
 */
class VideoSearch extends Video
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'views', 'like', 'unlike', 'category_id'], 'integer'],
            [['name', 'description', 'main_text'], 'safe'],
            [['price', 'old_price'], 'number'],
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
        $query = Video::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'views' => $this->views,
            'like' => $this->like,
            'unlike' => $this->unlike,
            'category_id' => $this->category_id,
            'price' => $this->price,
            'old_price' => $this->old_price,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'main_text', $this->main_text]);

        return $dataProvider;
    }
}
