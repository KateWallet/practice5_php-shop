<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 19.01.2019
 * Time: 16:41
 */

namespace app\models;


use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories()
    {
        return Category::find()->asArray()->all();
    }

}