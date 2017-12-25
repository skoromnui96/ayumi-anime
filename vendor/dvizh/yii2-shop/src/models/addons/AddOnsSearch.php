<?php
namespace dvizh\shop\models\addons;

use dvizh\shop\models\AddOns;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;


class AddOnsSearch extends AddOns
{
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['product_id', 'price', 'is_available'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = AddOns::find();

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


        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'is_available', $this->is_available])
            ->andFilterWhere(['like', 'name', $this->name]);


        return $dataProvider;
    }
}
