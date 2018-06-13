
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Page Not Found</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: left;
            width: 990px; margin: 0 auto;
            line-height: 2em;
        }
        .content img {margin-left: auto; margin-right: auto; display: block; max-width: 100%; border-radius: 5px;}

        .title {
            font-size: 36px;
            padding: 20px;
        }
    </style>
</head>
<body>
<h1 style="text-align: center">{{$article->title}}</h1>

<div class="content">
    <small>来源：{{$article->url}}</small>
    {!! $article->body !!}
</div>
</body>
</html>
