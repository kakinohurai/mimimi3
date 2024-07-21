<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  // フォームからのデータを取得
  $name = $_POST["name"]; 
  $email = $_POST["email"]; 
  $message = $_POST["message"];

  // 入力値のバリデーション 
  if (empty($name) || empty($email) || empty($message)) { 
    $error_message = "全ての項目を入力してください。"; 
  } else { 
  // メールの送信 
  $to = "your-email@example.com"; 
  // 送信先のメールアドレスを指定 
  $subject = "お問い合わせがありました"; 
  $message_body = "名前: " . $name . "\n"; 
  $message_body .= "メールアドレス: " . $email . "\n"; 
  $message_body .= "お問い合わせ内容:\n" . $message; 
  $headers = "From: " . $email; 
  
  if (mail($to, $subject, $message_body, $headers)) { 
  $success_message = "お問い合わせを受け付けました。ありがとうございます！"; 
  } else { 
  $error_message = "メールの送信に失敗しました。後でもう一度お試しください。"; 
  } 
 } 
} 
?>
<!DOCTYPE html>


<html>
  <head>
    <title>みみみ(3)お問い合わせフォーラム</title>
  </head>
  <body>
    <h3>お問い合わせ</h3>
    <?php if (isset($error_message)): ?> 
      <p style="color: red;"><?php echo $error_message; ?></p> 
  <?php endif; ?> 
  <?php if (isset($success_message)): ?> 
    <p style="color: green;"><?php echo $success_message; ?></p> 
  <?php endif; ?> 
  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"> 
    <label for="name">名前:</label> 
    <input type="text" id="name" name="name" required><br> 
    <label for="email">メールアドレス:</label> 
    <input type="email" id="email" name="email" required><br> 
    <label for="message">お問い合わせ内容:</label><br> 
    <textarea id="message" name="message" rows="5" required></textarea><br> 
    <input type="submit" value="送信"> 
  </form>
</body>
</html>

    <form method="post" action="https://mimimi3-reality.netlify.app/confirm.php">
      <label for="name">お名前</label><br>
      <input type="text" id="name" name="name"><br>
	  <label for="name">会社名</label><br>
      <input type="text" id="" name="name"><br>
	  <label for="name">部署役職</label><br>
      <input type="text" id="name" name="name"><br>
	  <label for="name">部電話番号</label><br>
      <input type="text" id="name" name="name"><br>
      <label for="email">メールアドレス</label><br>
      <input type="email" id="email" name="email"><br>
	  <label for="email">性別</label><br>
      <input type="email" id="null" name="null"><br>
      <label for="message">お問い合わせ内容</label><br>
      <textarea id="message" name="message"></textarea><br><br>
      <input type="submit" value=" 確認 " />
	  <input type="reset" value="リセット" />
    </form>
  </body>
</html>
