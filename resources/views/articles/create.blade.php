<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>登録画面</title>
  <style>
    input {
      margin-bottom: 8px;
    }
  </style>
</head>
<body>

  @if($errors->any())
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif

  <h1>投稿ページ</h1>
  <form action="{{ route('articles.store') }}" method="post">
    @csrf
    <label for="title">タイトル：</label>
    <input type="text" name="title" id="title" value="{{ old('title') }}">
    <br>
    <label for="body">本文：</label>
    <textarea name="body" id="body">{{ old('body') }}</textarea>
    <button type="submit">投稿</button>
  </form>
  <a href="{{ route('articles.index') }}">一覧ページ</a>
</body>
</html>
