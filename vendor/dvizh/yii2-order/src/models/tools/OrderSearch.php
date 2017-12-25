<?php
namespace dvizh\order\models\tools;

use yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use dvizh\order\models\Order;
use dvizh\order\models\FieldValue;

class OrderSearch extends Order
{
    public function rules()
    {
        return [
            [['id', 'user_id', 'is_deleted', 'shipping_type_id', 'payment_type_id', 'seller_user_id'], 'integer'],
            [['payment', 'first_name', 'phone', 'email', 'status', 'time', 'date', 'promocode'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Order::find();

        $query->joinWith('elementsRelation')->groupBy('{{%order}}.id');

        if($elementTypes = yii::$app->request->get('element_types')) {
            $query->andFilterWhere(['{{%order_element}}.model' => $elementTypes])->groupBy('{{%order}}.id');
        }

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => [
                'defaultOrder' => [
                    'date' => SORT_DESC
                ]
            ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'same_address' => $this->same_address,
            'news_subscription' => $this->news_subscription,
            'user_id' => $this->user_id,
            'payment' => $this->payment,
            'status' => $this->status,
            'promocode' => $this->promocode,
            'seller_user_id' => $this->seller_user_id,
        ]);

        if(isset($this->id)) {
            $query->andWhere(['{{%order}}.id' => $this->id]);
        }

        if(isset($this->is_deleted)) {
            $query->andWhere(['{{%order}}.is_deleted' => $this->is_deleted]);
        }

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'shipping_type_id', $this->shipping_type_id])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'address2', $this->address2])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'state', $this->state])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'payment_type_id', $this->payment_type_id])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'time', $this->time]);

        return $dataProvider;
    }
}