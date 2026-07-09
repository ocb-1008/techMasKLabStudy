<?php
require_once 'Person.php';

class Patient extends Person {
    private $height;
    private $weight;

    public function __construct($name, $age, $gender, $height, $weight) {
        // Personクラスのコンストラクタを先に呼び出す
        parent::__construct($name, $age, $gender);
        // そのあと、自分のプロパティも代入
        $this->height = $height;
        $this->weight = $weight;

    }

    public function getHeight() {
        // 身長を返す
        return $this->height;
    }

    public function getWeight() {
        // 体重を返す
        return $this->weight;
    }

    public function calculateStandardWeight() {
        // 身長×身長×22 を計算して返す（標準体重の計算）
        return 22 * $this->height * $this->height;
    }
}