<?php
$week = ["日", "月", "火", "水", "木", "金", "土"];
$today = date("w"); // 今日の曜日を数値で取得 (0:日曜日, 1:月曜日, ...)
$dayOfWeek = $week[$today];

echo "今日は" . $dayOfWeek . "曜日です。";
?>
