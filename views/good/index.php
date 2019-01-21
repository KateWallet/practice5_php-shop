<?
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= Html::encode($this->title = $good['name']) ?></title>
</head>
<body>
<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-8 justify-self-center">
            <h2><div class="product-title"><?= $good['name'] ?></div></h2>
            <div class="product">
                <div class="product-img">
                    <img src="/img/<?= $good['img'] ?>" alt="<?= $good['name'] ?>">
                </div>
                <div class="product-name"><?= $good['name'] ?></div>
                <div class="product-descr">Состав: <?= $good['composition'] ?></div>
                <div class="product-descr">Описание: <?= $good['descr'] ?></div>
                <div class="product-price">Цена: <?= $good['price'] ?> рублей</div>
                <div class="product-buttons">
                    <a href="#" data-name="<?=$good['link_name']?>" class="product-button__add btn btn-success">Заказать</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>