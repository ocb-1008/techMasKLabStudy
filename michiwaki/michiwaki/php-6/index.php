<?php

//現在の日付と時間
$d=date("Y-m-d H:i:s");
printf("現在、%s<br>",$d);

//明日
$today=date("Y年m月d日");
$tomorrow=date("Y年m月d日",strtotime("+1 day"));
$yesterday=date("Y年m月d日",strtotime("-1 day"));
$weekLater=date("Y年m月d日",strtotime("+1 week"));

printf( "今日は%sです。<br>", $today);
printf( "明日は%sです。<br>", $tomorrow);
printf( "昨日は%sです。<br>", $yesterday);
printf( "一週間後は%sです。<br>", $weekLater);


//指定日の3ヶ月後の日付を計算
$anyday="2026-10-08";
$anyday_after3month=date("Y年m月d日",strtotime('+3 month',strtotime("2026-07-08")));
printf( "３ヶ月後は%sです。<br>",$anyday_after3month);

//3か月後の日付までの日数を計算
$start = strtotime("2026-07-08");
$end = strtotime("2026-10-08");
$diff = ($end - $start)/(60*60*24);
printf("３ヶ月後の日付まで%d日です。<br>", $diff)

?>