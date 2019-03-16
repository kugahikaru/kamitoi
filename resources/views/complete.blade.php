<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>vue test</title>
</head>

<body>
    <div id="app">
        <div class="container">
            <h3 class="mt-5">Inquiries to GOD</h3>
            <form action="{{ route('send')}}">
                <div class="form-group mt-4">
                    <select name="category">
                    <option value='' disabled selected style='display:none;'>選択してください</option>
                    <option value="0">問い</option>
                    <option value="1">懺悔</option>
                    <option value="2">願い</option>
                    </select>
                    <input type="text" class="form-control" name="body">
                </div>
                <button type="submit" class="btn btn-primary">神よ…</button>
            </form>
        </div>
    </div>

<script src="{{ asset('js/app.js')}}"></script>
</body>
</html>