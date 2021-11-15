<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>トップページ</title>
</head>

<style>
li {list-style:none}
</style>

<body>
  <form action="/sent" method="post">
    @csrf
    <ul>
      <li><label for="name">氏名</label></li>
      <li><input type="text" name="name" id="name"></li>
      <li><label for="email">メールアドレス</label></li>
      <li><input type="email" name="email" id="email"></li>
      <li><button type="submit">送信する</button></li>
    </ul>
  </form>
</body>

</html>