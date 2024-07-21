<?php 
session_start(); 

// セッションからデータを取得
$name = $_SESSION["name"]; 
$email = $_SESSION["email"]; 
$message = $_SESSION["message"]; 

// フォームのデータが送信された場合の処理 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  // ここでデータを処理またはデータベースに保存するなどの操作を行います。 
  // お問い合わせが完了したらセッションをクリア 
  session_unset(); session_destroy(); 
  // 完了画面にリダイレクト 
  header("Location: complete.php"); 
  exit(); 
} 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>お問い合わせフォーム - 確認</title>
  </head>
  <body>
    <h1>お問い合わせフォーム - 確認</h1>
    <h2>入力内容をご確認ください</h2>
    <p><strong>名前:</strong> <?php echo $name; ?></p>
    <p><strong>メールアドレス:</strong> <?php echo $email; ?></p>
    <p><strong>お問い合わせ内容:</strong> <?php echo $message; ?></p>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <input type="hidden" name="name" value="<?php echo $name; ?>"> 
      <input type="hidden" name="email" value="<?php echo $email; ?>"> 
      <input type="hidden" name="message" value="<?php echo $message; ?>">
      <input type="submit" value="送信">
    </form>
  </body>
</html>