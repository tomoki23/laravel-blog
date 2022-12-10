<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>検索結果</title>
</head>
<body>
  <h1>検索結果</h1>
  <table border="1">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>本文</th>
        <th>投稿日</th>
      </tr>
    </thead>
    <tbody>
      @foreach($searchArticles as $article)
      <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->body }}</td>
        <td>{{ $article->created_at }}</td>
        <td style="border:none;">
          <a href="{{ route('articles.show',[$article->id]) }}">詳細</a>
          <form action="{{ route('articles.destroy',[$article->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
