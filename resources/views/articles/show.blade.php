<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>詳細ページ</title>
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
        <td>{{ $detail->title }}</td>
        <td>{{ $detail->body }}</td>
        <td>{{ $detail->created_at }}</td>
      </tr>
    </tbody>
  </table>
  <a href="{{ route('articles.edit', [$detail->id]) }}">更新する</a>
  <a href="{{ route('articles.index') }}">一覧ページ</a>
</body>

</html>
