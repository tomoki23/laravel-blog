<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登録画面</title>
</head>
<body>
  <h1>投稿ページ</h1>
  <form action="{{ route('articles.store') }}" method="post">
    @csrf
    <label for="title">タイトル：</label>
    <input type="text" name="title" id="title">
    <br>
    <label for="body">本文：</label>
    <input type="text" name="body" id="body">
    <button type="submit">投稿</button>
  </form>
</body>
</html>
