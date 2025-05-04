<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
</head>

<body>
    <p>
        <?php
        
        class Food {
            private $name;
            private $price;

            public function show_price() {
                echo $this->price;
            }

            public function __construct() {
                $this->name = "potato";
                $this->price = 250;                
            }
        }

        class Animal {
            private $name;
            private $height;
            private $weight;

            public function show_height() {
                echo $this->height;
            }

            public function __construct() {
                $this->name = "dog";
                $this->height = 60;    
                $this->weight = 5000;    
            }
        }

        $food = new Food();
        $animal = new Animal();

        print_r($food);
        echo "<br>";
        print_r($animal);
        echo "<br>";
        $food->show_price(250);
        echo "<br>";
        $animal->show_height(60);
        ?>
    </p>

</body>

</html>
