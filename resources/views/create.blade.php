<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>
<body>
    <form action="{{ route('create') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>学年:</td>
                    <td><input type="number" name='grade'></td>
                    <td>
                        @error('grade')
                            {{ $errors->first('grade') }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>クラス:</td>
                    <td><input type="text" name='class'></td>
                    <td>
                        @error('class')
                            {{ $errors->first('class') }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>出し物:</td>
                    <td><input type="text" name='program'></td>
                    <td>
                        @error('program')
                            {{ $errors->first('program') }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>代表者:</td>
                    <td><input type="text" name='leader'></td>
                    <td>
                        @error('leader')
                            {{ $errors->first('leader') }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>飲食店フラグ:</td>
                    <td><input type="text" name='shop_flag'></td>
                    <td>
                        @error('shop_flag')
                            {{ $errors->first('shop_flag') }}
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>備考:</td>
                    <td><input type="text" name='remarks'></td>
                    <td>
                        @error('remarks')
                            {{ $errors->first('remarks') }}
                        @enderror
                    </td>
                </tr>
            </table>
            <button type="submit">決定</button>
    </form>
</body>
</html>