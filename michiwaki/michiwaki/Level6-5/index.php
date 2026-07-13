<?php

//人物データの登録
$person1 = ["name" => "一郎", "age" => 25, "hobby" => "サッカー"];
$person2 = ["name" => "二郎", "age" => 30, "hobby" => "読書"];

//人物リストの作成
$persons = array_merge([$person1], [$person2]);

//年齢順に並び替え
usort($persons, function($a, $b){
    return $a["age"] - $b["age"]; 
});

//出力
echo "簡易プロフィール帳<br>";
for ($i = 0; $i < count($persons); $i++){
    $p = $persons[$i];
    printf("名前:%s(%d歳) - 趣味:%s<br>", $p["name"], $p["age"], $p["hobby"]);
}

//平均年齢
$ages = array_column($persons, "age");
$average = array_sum($ages) / count($ages);
echo "平均年齢:" . $average . "歳";

?>

