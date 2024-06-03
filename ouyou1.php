<?php
// 今日の日付を取得
$today = date("Y-m-d");

// 1年後の日付を計算
$one_year_later = date("Y-m-d", strtotime("+1 year"));

// 今日から1年後までの日付を出力
echo "今日の日付: " . $today . "<br>";
echo "1年後の日付: " . $one_year_later;
?>
