<!DOCTYPE html>
<html lang="ja">
<meta charset="UTF-8">
<head>
	<title></title>
</head>
<body>

<?php
$list = array("春", "夏", "秋", "冬");

foreach($list as $key => $val){
	echo "$key = $val";
	echo "<br />";
}
?>

<hr>

<?php
$list2 = array(
	"牛" => "草",
	"鶴" => "豆",
	"コアラ" => "ユーカリ"
);

foreach($list2 as $key => $val){
	echo "$key = $val";
	echo "<br />";
}

?>

<hr>

<?php
$list3 = array(
	"牛" => "草",
	"鶴" => "豆",
	"コアラ" => "ユーカリ"
);

foreach($list as $val){
	echo "$val";
	echo "<br />";
}
?>
<hr>

<?php
$list4 = array(
	"牛" => "草",
	"鶴" => "豆",
	"コアラ" => "ユーカリ"
);
?>
<?php foreach($list as $val): ?>
<?php 	echo "$val"; ?>
<?php 	endforeach; ?>


</body>
</html>