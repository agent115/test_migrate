<?php

namespace app\controllers;

use app\models\Product;

class ProductController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $products = Product::find()->all();
        return $this->render('index',compact("products"));
    }

}
