<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>更新ページ</title>
  <style>
    th,
    td {
      padding: 6px 24px;
      text-align: center
    }

    table {
      margin-bottom: 12px;
    }
  </style>
</head>

<body>
  <h1>一覧ページ</h1>
  <table border="1">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>本文</th>
        <th>投稿日</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <form action="{{ route('articles.update') }}" method="post">
          <td><input type="text" name="title" value="{{ $detail->title }}"></td>
          <td><textarea name="body" cols="30" rows="10">{{ $detail->body }}</textarea></td>
          <td>{{ $detail->created_at }}</td>
        </form>
      </tr>
    </tbody>
  </table>
  <button type="submit">更新する</button>
  <a href="{{ route('articles.index') }}">一覧ページ</a>
</body>

</html>
