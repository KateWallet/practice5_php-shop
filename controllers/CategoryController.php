<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 19.01.2019
 * Time: 1:22
 */

namespace app\controllers;
use app\models\Good;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller
{

    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }


    public function actionView($id)
    {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        return $this->render('view', compact('goods'));
    }

    public function actionSearch()
    {
        $search = Yii::$app->request->get('search');
        $goods = new Good();
        $goods = $goods->getSearchResults($search);
        return $this->render('search', compact('goods', 'search'));
    }


}