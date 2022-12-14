<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>一覧ページ</title>
  <style>
    th,td {
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
  {{-- 検索フォーム --}}
  <form action="{{ route('articles.index') }}" method="get" style="margin-bottom: 16px">
    <label for="search">検索：</label>
    <input type="text" name="search" id="search"/>
    <button type="submit">検索</button>
  </form>

  <table border="1">
    <thead>
      <tr>
        <th>タイトル</th>
        <th>本文</th>
        <th>投稿日</th>
      </tr>
    </thead>
    <tbody>
      @foreach($articles as $article)
      <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->body }}</td>
        <td>{{ $article->created_at }}</td>
        <td style="border:none;">
          <a href="{{ route('articles.show', [$article->id]) }}">詳細</a>
          <form action="{{ route('articles.destroy', [$article->id]) }}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  <a href="{{ route('articles.create') }}">投稿ページ</a>
</body>
</html>
