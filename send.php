<?php
　if ($_SERVER["REQUEST_METHOD"] == "POST") {
　　$name = $_POST["name"];
　　$email = $_POST["email"];
　　$message = $_POST["message"];
　　$to = "mimimiredstar@gmail.com";
　　$subject = "お問い合わせがありました";
　　$headers = "From:mimimiredstar@gmail.com";
　　$body = "名前: $name\nメールアドレス: $email\n\n$message";
　　if (mail($to, $subject, $body, $headers)) {
　　  $message = "お問い合わせが送信されました。ありがとうございます！";
　　} else {
 　   $message = "エラーが発生しました。もう一度お試しください。";
    }
  } else {
      header("Location: contact.php");
  }
?>
<html>
  <head>
    <title>お問い合わせフォーム - 送信完了画面</title>
  </head>
  <body>
    <h3>お問い合わせフォーム - 送信完了画面</h3>
    <p><?php echo $message; ?></p>
    <p><a href="contact.php">お問い合わせフォームに戻る</a></p>
  </body>
</html>