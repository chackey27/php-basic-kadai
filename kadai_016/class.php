<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>class課題</title>
</head>
<body>
  <?php
  class food {
    private $name;
    private $price;
    public function show_price() {
      echo $this->price;
    }
    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price= $price;
    }
  }
  ?>
  <?php
  class animal {
    private $name;
    private $height;
    private $weight;
    public function show_height() {
      echo $this->height;
    }
    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }
  $meat = new food('カルビ',1200);
  $dog = new animal('犬',30,8000);
  print_r($meat);
  echo '<br>';
  print_r($dog);
  echo '<br>';
  $meat->show_price();
  echo '<br>';
  $dog->show_height();
  ?>
</body>
</html>