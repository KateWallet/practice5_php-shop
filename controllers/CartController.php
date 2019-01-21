<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 20.01.2019
 * Time: 23:31
 */

namespace app\controllers;
use app\models\Good;
use app\models\Cart;
use Yii;
use yii\web\Controller;


class CartController extends Controller
{

    public function actionOpen()
    {
        $session = Yii::$app->session;
        $session->open();
        return $this->renderPartial('cart', compact('session'));
    }

    public function actionAdd($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);
        $session = Yii::$app->session;
        $session->open();
        //$session->remove('cart');
        $cart = new Cart();
        $cart->addToCart($good);
        return $this->renderPartial('cart', compact('good', 'session'));
    }

}