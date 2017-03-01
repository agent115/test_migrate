<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m170228_145102_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('product', [

                "id" => $this->primaryKey(),
                "name" => $this->string(255),
                "price" => $this->string(255),
                "size_display" => $this->string(255),
                "vendor" => $this->string(255),
                "description" => $this->text(),
                "camera" => $this->string(255),
                "availability" => $this->integer()->defaultValue(1),
                "resolution" => $this->string(255)->null()
        ]);

        $this->insert("product",[
            "name" => "LG s-550",
            "price" => "10000",
            "size_display" => "2050/1440",
            "vendor" => "LG",
            "description" => "Здесь описание товара",
            "camera" => "10",


        ]);

        $this->insert("product",[
            "name" => "LG s-550",
            "price" => "10000",
            "size_display" => "2050/1440",
            "vendor" => "LG",
            "description" => "Здесь описание товара",
            "camera" => "10",


        ]);

        $this->insert("product",[
            "name" => "NOKIA s-590",
            "price" => "10000",
            "size_display" => "2050/1440",
            "vendor" => "NOkIA",
            "description" => "Здесь описание товара NOKIA",
            "camera" => "7",


        ]);

        $this->insert("product",[
            "name" => "FLY s-590",
            "price" => "6800",
            "size_display" => "3050/1440",
            "vendor" => "FLY",
            "description" => "Здесь описание товара FLY",
            "camera" => "8",


        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {

        $this->dropTable('product');
        $this->batchInsert("product",["id"],[
            ['1'],
            ['2'],
            ['3']
        ]);
    }
}
