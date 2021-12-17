<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="{{route('login')}}" method="post">
    @csrf
    <table>
        <tr>
            <td>ユーザー名:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>パスワード:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <button type="submit">決定</button>
    @error('message')
        <p>{{ $errors->first('message') }}</p>
    @enderror
    </form>
</body>
</html>