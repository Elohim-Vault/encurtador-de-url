<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="css/index.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Sua URL foi encurtada com sucesso</h1>
    <div class="card">
        <div class="card-body">
            <input class="form-control" type="text" value="{{URL::to('/'). '/'. $link->short_url}}">
            URL Longa: <a href="{{ $link->original_url}}">{{$link->original_url}}</a><br>
            <a href="{{ URL::to('/') }}">Encurtar outra URL</a>
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>
</html>
