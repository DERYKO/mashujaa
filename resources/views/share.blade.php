<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mashujaa day</title>
    <script src="https://kit.fontawesome.com/eb58b3fc62.js" crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPT7nVvv-ehiJbd6ca0c5WRjEdB_O0GY2l-rmG4cN0UHCFIUw8&s">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <p>{!! Adsense::show('responsive') !!}</p>
            <img src="data:image/jpeg;base64,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">
            <a class="btn btn-success" href='https://wa.me/?text={{url("/happy-mashujaa-day?name={$name}")}}' id=""><i class="fa fa-share-alt" aria-hidden="true"> Share here</i></a>
        <p>{!! Adsense::show('responsive') !!}</p>
        </div>

    </div>
</div>
</body>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="{{ asset('js/share.js') }}"></script>
</html>

