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

        <!--
        <section class="grid-test">
            <div class="row">
                <div class="col-1-of-2">Col 1 of 2</div>
                <div class="col-1-of-2">Col 1 of 2</div>
            </div>

            <div class="row">
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-1-of-3">Col 1 of 3</div>
            </div>

            <div class="row">
                <div class="col-1-of-3">Col 1 of 3</div>
                <div class="col-2-of-3">Col 2 of 3</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-2-of-4">Col 2 of 4</div>
            </div>

            <div class="row">
                <div class="col-1-of-4">Col 1 of 4</div>
                <div class="col-3-of-4">Col 3 of 4</div>
            </div>
        </section>
        -->

        <main>
            {{--Start about--}}
            <section class="section-about">
                <div class="u-center-text u-mb-8">
                    <h2 class="heading-secondary">
                        Exciting tours for adventurous people
                    </h2>
                </div>

                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-mb-small">You're going to fall in love with nature</h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, culpa ducimus eum excepturi
                            fugiat harum maxime nobis nulla odit officia possimus quasi quo reiciendis rem repellat,
                            repellendus sequi sunt vero!
                        </p>

                        <h3 class="heading-tertiary u-mb-small">Live adventures like you never have before</h3>
                        <p class="paragraph">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, culpa ducimus eum excepturi
                            fugiat harum maxime nobis nulla odit officia possimus quasi quo reiciendis rem repellat,
                            repellendus sequi sunt vero!
                        </p>

                        <a href="javascript:void(0)" class="btn-text">
                            Learn more &rarr;
                        </a>
                    </div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img src="images/nat-1-large.jpg" alt="" class="composition__photo composition__photo--p1">
                            <img src="images/nat-2-large.jpg" alt="" class="composition__photo composition__photo--p2">
                            <img src="images/nat-3-large.jpg" alt="" class="composition__photo composition__photo--p3">
                        </div>
                    </div>
                </div>
            </section>
            {{--End about--}}

            {{--Start features--}}
            <section class="section-features">

                <div class="row">
                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-world"></i>
                            <h3 class="heading-tertiary u-mb-small">Explore the world</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-compass"></i>
                            <h3 class="heading-tertiary u-mb-small">Meet nature</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-map"></i>
                            <h3 class="heading-tertiary u-mb-small">Find your way</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                        <div class="feature-box">
                            <i class="feature-box__icon icon-basic-heart"></i>
                            <h3 class="heading-tertiary u-mb-small">Live a healthier life</h3>
                            <div class="feature-box__text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur deleniti iste.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{--End features--}}
        </main>
    </body>
</html>
