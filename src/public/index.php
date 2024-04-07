<?php
// 実践課題(if文のデバッグ)のコードをクラス化しましょう。

class FoodCalculator {
  private $food;
  private $num;

  public function __construct($food) {
    $this->food = $food;
    $this->calculateNum();
  }

  public function getNum() {
    return $this->num;
  }

  private function calculateNum() {
    if ($this->food % 2 == 0) {
      $this->num = $this->food / 2;
    } else {
      $this->num = ($this->food - 1) / 2;
      if ($this->num > 3) {
        $this->num += 5;
      } else {
        $this->num += 5;
      }
    }
  }
}

// クラスのインスタンス化
  $foodCalculator = new FoodCalculator(7);

// プロパティの値を取得して出力
  echo $foodCalculator->getNum();





// 実践課題(if文のデバッグ)のコードをクラス化しましょう。

class NumberChecker {
  private $num;

  public function __construct($num) {
    $this->num = $num;
  }

  public function checkMultiples() {
// 新しい変数 $output を定義し、それを条件に応じて適切なメッセージで埋めることで、クラスのメソッドが常に結果を返す
    $output = "";

// 与えられた数値が12や24の倍数であるかをチェック
    if ($this->num % 12 == 0 && $this->num % 24 == 0) {
      $output = "numの値は12の倍数かつ、24の倍数です";
    } elseif ($this->num % 12 == 0) {
      $output = "numの値は12の倍数です";
    } elseif ($this->num % 24 == 0) {
      $output = "numの値は24の倍数です";
    }

    return $output;
  }
}


// クラスのインスタンス化
  $numChecker = new NumberChecker(72);
  
// メソッドを呼び出して結果を出力
  echo $numChecker->checkMultiples();
