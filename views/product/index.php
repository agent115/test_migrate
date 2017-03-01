<?php
/* @var $this yii\web\View */
?>

<?php foreach ($products as $product):?>
<div class="prod-char">
    <div class="char">
        <span class="char-name">Размер экрана: </span>
        <span class="char-value"> <?= $product->size_display?></span>
    </div>
    <div class="char">
        <span class="char-name">Разрешение: </span>
        <span class="char-value"> <?= $product->size_display?> пикс</span>
    </div>
    <div class="char">
        <span class="char-name">Камера: </span>
        <span class="char-value"><?= $product->camera?> Мпикс</span>
    </div>
    <div class="char">
        <span class="char-name">Цена: </span>
        <span class="char-value"><?= $product->price?> руб</span>
    </div>
    <div class="char">
        <span class="char-name">Описание </span>
        <span class="char-value"><?= $product->description?> руб</span>
    </div>
    <div class="char">
        <span class="char-name">Наличие </span>
        <span class="char-value"><?= $product->availability?> </span>
    </div>
</div>
    <hr/>

<?php endforeach;?>