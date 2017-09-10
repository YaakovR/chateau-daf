<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mesechtos</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/infinite-rotator.js"></script>
    <link rel="stylesheet" href="css/crossfade.css" type="text/css" media="screen" />
</head>
<body>
    <ul>
        @foreach($mesechtos as $mesechta)
            <li>{{ $mesechta->name }}</li>
        @endforeach
    </ul>

    <div id="rotating-item-wrapper">
        <img src="img/dafYomi1.jpg" class="rotating-item" />
        <img src="img/dafYomi2.jpg" class="rotating-item" />
        <img src="img/dafYomi3.jpg" class="rotating-item" />
        <img src="img/dafYomi4.jpg" class="rotating-item" />
    </div>
</body>
</html>