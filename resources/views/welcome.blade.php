<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="shortcut icon" type="image/png" href="{{ asset('images/favicon.png') }}">

        <title>Natours | Exciting tours for adventurous people</title>
    </head>
    <body>
        <header class="header">
            <div class="header__logo-box">
                <img src="{{ asset('images/logo-white.png') }}" alt="Logo" class="header__logo">
            </div>

            <div class="header__text-box">
                <h1 class="heading-primary">
                    <p class="heading-primary--main">Outdoors</p>
                    <p class="heading-primary--sub">is where life happen</p>
                </h1>

                <a href="#" class="btn btn--white btn--animated">Discover our tours</a>
            </div>
        </header>
    </body>
</html>
