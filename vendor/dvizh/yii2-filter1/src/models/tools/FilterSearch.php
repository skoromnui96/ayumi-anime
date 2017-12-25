<?php
namespace dvizh\filter\models\tools;

use yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use dvizh\filter\models\Filter;

class FilterSearch extends Filter
{
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['name', 'slug', 'type', 'is_filter'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }
    
    public function search($params)
    {
        $query = Filter::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => new \yii\data\Sort([
                'attributes' => [
                    'name',
                    'type',
                    'is_filter',
                ],
            ])
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'type' => $this->type,
            'is_filter' => $this->is_filter,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);
        $query->andFilterWhere(['like', 'slug', $this->slug]);

        return $dataProvider;
    }
}
