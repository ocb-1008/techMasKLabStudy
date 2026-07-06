<?php

// CSVファイルを読み込みモードで開く
$fp = fopen("member.csv", "r");

// ファイルを1行ずつ取得する
//while で回します。
while (($line = fgetcsv($fp)) !== false){
        // 配列を繰り返す
        $num = count($line);
        //出力されたデータを表示する
        // $Cは、行数
        for($c = 0; $c < $num; $c++){
        echo $line[$c] . "<br />";
        }

}
// ファイルを閉じる
fclose($fp);

?>