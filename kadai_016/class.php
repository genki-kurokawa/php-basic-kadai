<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>kadai_005</title>
</head>
<body>
<?php

class Food {
    
    private string $name;
    private int $price;

  
    public function __construct(string $name, int $price) {
        $this->name  = $name;
        $this->price = $price;
    }

   
    public function set_name(string $name): void {
        $this->name = $name;
    }

    
    public function get_price(): int {
        return $this->price;
    }

    // 名前を表示
    public function show_name(): void {
        echo $this->name . '<br>';
    }
}


class Animal {
    // プロパティ
    private string $name;
    private int    $height;
    private int    $weight;

   
    public function __construct(string $name, int $height, int $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    
    public function set_name(string $name): void {
        $this->name = $name;
    }

    // 高さを表示
    public function show_height(): void {
        echo $this->height . '<br>';
    }

    // ゲッター
    public function get_height(): int {
        return $this->height;
    }
}


// Food
$potato = new Food('potato', 250);
$potato->show_name();
echo 'Food price: ' . $potato->get_price() . '<br>';
print_r($potato);
echo '<br>';

// Animal
$dog = new Animal('dog', 60, 5000);
$dog->show_height();
echo 'Animal Height: ' . $dog->get_height() . '<br>';
print_r($dog);
?>
</body>
</html>
