<?php

// 以下にCarクラスを定義して、当プログラムを実行した時にエラーがでないようにして下さい。
class Car 
{
    private $carName; // 車名
    private $carNumber;  // 車体番号
    private $carColor; // カラー

    public function __construct($carName, $carNumber, $carColor) 
    {
        $this->carName = $carName;
        $this->carNumber = $carNumber;
        $this->carColor = $carColor;
    }

    public function getName() 
    {
        return $this->carName;
    }

    public function getNumber() 
    {
        return $this->carNumber;
    }

    public function getColor() 
    {
        return $this->carColor;
    }

    public function setName($carName) 
    {
        $this->carName = $carName;
    }

    public function setNumber($carNumber) 
    {
        $this->carNumber = $carNumber;
    }

    public function setColor($carColor) 
    {
        $this->carColor = $carColor;
    }

    public function infomation() 
    {
        return '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() .  '、カラー:' . $this->getColor() . 'です。';
    }
}

// 以下にCarクラスを継承したTaxiクラスを記述して下さい
class Taxi extends Car
{
    private $passenger; // 現在の乗車人数

    public function getPassenger()
    {
        return $this->passenger;
    }

    public function pickUp($pickUpPassenger)
    {
        $this->passenger = $pickUpPassenger;
    }

    public function lower($lowerPassenger)
    {
        if(($this->passenger - $lowerPassenger) >= 0) {
            $this->passenger -= $lowerPassenger;
            echo $this->getPassenger() . '人降車しました。';
        } else {
            echo '降車人数に誤りがあります';
        }
    }

    public function infomation()
    {
        return '車の車種:' . $this->getName() . '、車体番号:' . $this->getNumber() .  '、カラー:' . $this->getColor() . '、乗車人数は' . $this->getPassenger() . '人です。';
    }
}

// 以下を実行した時にエラーがでないようにして下さい
// Carクラスのインスタンスを生成
// 引数 : 車名、車体番号、カラー
$car1 = new Car('ランクル', 100, 'black');

// 車の情報を表示
echo $car1->infomation();
echo '<br>';
echo '<hr>';

// Taxiクラスのインスタンスを生成
$taxi1 = new Taxi('クラウンのタクシー', 222, 'black');

// 3人乗車
$taxi1->pickUp(3);

// タクシーの情報表示を表示
echo $taxi1->infomation();
echo '<br>';

// 2人降車
$taxi1->lower(2);
echo '<br>';

// 2人降車
$taxi1->lower(2);