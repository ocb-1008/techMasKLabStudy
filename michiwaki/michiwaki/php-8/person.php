<?php

class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct($name, $age, $gender) {
        // 各プロパティを初期化
        if($gender === "m"){
            $gender = "男性";
        } elseif($gender === "f"){
            $gender = "女性";
        } else {
            $gender = "不明";
        }

        $this ->name =$name;
        $this ->age =$age;
        $this ->gender =$gender;
    }

    public function selfIntroduction() {
        // 「私は〇〇、〇才、男性（または女性）です。」という文字列を返す
        return "わたしは" . $this->name ."、" . $this->age . "才、" . $this->gender ."です。";
    }

}