<?php
mb_language('japanese');
mb_internal_encoding('UTF-8');

$to = $_POST['to'];
$subject = $_POST['title'];
$message = $_POST['content'];
$headers = "from@example.com";

?>

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8" />
<title>メール送信処理</title>
</head>
<body>
<?php
if (mb_send_mail($to, $subject, $message, $headers)) {
	echo "メール送信成功です";
} else {
	echo "メール送信失敗です";
}
?>
</body>
</html>
