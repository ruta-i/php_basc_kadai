<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset='utf-8'>
        <title>kadai_016</title>
    </head>
    <body>
        <p>
            <?php
            //クラスFoodを定義する
            class Food{
                private $name;

                private $price;

                public function show_price(){
                    echo $this->price . '<br>';
                }

                public function __construct(string $name,int $price){
                    $this->name =$name;
                    $this->price =$price;
                }
            }
            //クラスAnimalを定義する
            class Animal{
                private $name;

                private $height;

                private $weight;

                public function show_height(){
                    echo $this->height . '<br>';
                }

                public function __construct(string $name,int $height,int $weight){
                    $this->name =$name;
                    $this->height =$height;
                    $this->weight =$weight;
                }
            }

            //インスタンス化する
            $ramen =new Food('ラーメン',700);
            $cat =new Animal('猫',55,5000);

            //出力する
            print_r($ramen);
            echo '<br>';
            print_r($cat);
            echo '<br>';
            $ramen ->show_price();
            $cat ->show_height();
            ?>
        </p>
    </body>
</html>