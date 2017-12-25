<?php
namespace frontend\controllers;

use dvizh\shop\models\AddOns;
use Yii;
use yii\data\Pagination;
use yii\db\ActiveQuery;
use yii\web\Controller;
use dvizh\shop\models\Category;
use dvizh\shop\models\Product;

class StoreController extends Controller
{
    public function actionListView()
    {
        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id DESC');
        } else {
            $query = Product::find()->orderBy('id DESC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $pages->pageSizeParam = false;
        $top_sales = Product::find()->where(['is_popular' => 'yes'])->orderBy('id DESC')->all();

        return $this->render('list-view', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'pages' => $pages,
            'top_sales' => $top_sales
        ]);
    }
    public function actionListViewDesc()
    {
        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id ASC');
        } else {
            $query = Product::find()->orderBy('id ASC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $pages->pageSizeParam = false;
        $top_sales = Product::find()->where(['is_popular' => 'yes'])->orderBy('id DESC')->all();

        return $this->render('list-view', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'pages' => $pages,
            'top_sales' => $top_sales
        ]);
    }
    public function actionCardView()
    {
        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id DESC');
        } else {
            $query = Product::find()->orderBy('id DESC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $pages->pageSizeParam = false;
        $top_sales = Product::find()->where(['is_popular' => 'yes'])->orderBy('id DESC')->all();

        return $this->render('card-view', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'pages' => $pages,
            'top_sales' => $top_sales,
        ]);
    }
    public function actionCardViewDesc()
    {
        $categories = Category::find()->all();

        if($catId = yii::$app->request->get('categoryId')) {
            $category = Category::findOne($catId);
        } elseif($categories) {
            $category = current($categories);
        } else {
            $category = null;
        }

        if($category) {
            $query = Product::find()->category($category->id)->orderBy('id ASC');
        } else {
            $query = Product::find()->orderBy('id ASC');
        }

        $queryForFilter = clone $query;

        if($filter = yii::$app->request->get('filter')) {
            $query->filtered($filter);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 9]);
        $products = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        $pages->pageSizeParam = false;
        $top_sales = Product::find()->where(['is_popular' => 'yes'])->orderBy('id DESC')->all();

        return $this->render('card-view', [
            'queryForFilter' => $queryForFilter,
            'categories' => $categories,
            'products' => $products,
            'category' => $category,
            'pages' => $pages,
            'top_sales' => $top_sales,
        ]);
    }
    public function actionItemCard($id)
    {
        $top_sales = Product::find()->where(['is_popular' => 'yes'])->orderBy('id DESC')->all();
        $product = Product::findOne($id);
        $addons = AddOns::find()->where(['is_available' => 'yes', 'product_id' => $id])->orderBy('id DESC')->all();
        return $this->render('item-card',[
            'product' => $product,
            'top_sales' => $top_sales,
            'addons' => $addons
        ]);
    }
    public function actionOrderStep1()
    {
        return $this->render('order-step1');
    }

}