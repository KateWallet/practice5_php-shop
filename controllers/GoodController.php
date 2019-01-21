<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 20.01.2019
 * Time: 17:38
 */

namespace app\controllers;
use yii\web\Controller;
use app\models\Good;

class GoodController extends Controller
{

    public function actionIndex($name)
    {
        $good = new Good();
        $good = $good->getOneGood($name);
        return $this->render('index', compact('good'));
    }

}