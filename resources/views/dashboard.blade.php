<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .card{margin: 3%; border-radius: 10%; background-color: rgb(145, 166, 224)}
        body{background-color: rgb(101, 138, 241)}
    </style>
</head>
<body>
    <div class="list-group list-group-horizontal">
        @foreach($weather as $row)
            <div class="card" style="width: 18rem;" center>
                <div class="card-body">
                    <h5 class="card-title">{{ $row->georgia_country }}</h5>
                    <h1 class="card-subtitle mb-2 text-muted">{{ $row->celsius }}°C</h1>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>