<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>
<body>
    <header>
        <a href="/logout">ログアウト</a>
        <a href="/create">クラス新規登録</a>
    </header>
    <table>
        <tr>
            <td>学年</td>
            <td>クラス</td>
            <td>出し物</td>
            <td>代表者</td>
            <td>飲食店フラグ</td>
            <td>備考</td>
        </tr>
        @foreach ($shops as $shop)
        <tr>
            <td>{{ $shop->grade }}</td>
            <td>{{ $shop->class }}</td>
            <td>{{ $shop->program }}</td>
            <td>{{ $shop->leader }}</td>
            <td>{{ $shop->shop_flag }}</td>
            <td>{{ $shop->remarks }}</td>
            <td><a href="/edit/{{$shop->id}}">編集</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>