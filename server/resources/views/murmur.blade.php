<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>murmur</title>
</head>
<body>
    <header>

    </header>
    <div class="content">
        <h1>投稿してください</h1>

        <ul>
            <button>お気に入りにする</button>
            @foreach($posts as $post => $value)
                <li>{{$posts}}</li>
            @endforeach

        </ul>
        <div class="form-content">
            <input type="text">
        </div>
        <button>投稿する</button>
    </div>

    
</body>
</html>