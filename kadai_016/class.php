<!DOCTYPE html>
<html lang="ja">
 
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        class Food{
            private $name;
            private $price;

            // メソッド定義
            public function show_price(int $price){
                $this->price = $price;
                echo $this->price . "<br>";
            }
            // コンストラクタ定義
            public function __construct(string $name,int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        class Animal{
            private $name;
            private $height;
            private $weight;

            // メソッド定義
            public function show_height(int $height){
                $this->height = $height;
                echo $this->height;
            }
            // コンストラクタ定義
            public function __construct(string $name,int $height,int $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }

        // インスタンス化
        $Food = new Food("potato",250);
        $Animal = new Animal("dog",60,5000);

        print_r($Food);
        echo "<br>";
        print_r($Animal);
        echo "<br>";
        
        // メソッドアクセス
        $Food->show_price(250);
        $Animal->show_height(60);

        ?>
    </p>
    </body>

</html>